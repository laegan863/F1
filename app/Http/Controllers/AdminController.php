<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Demographicprofile;
use App\Models\F2followup;
use App\Models\F3patientsurveillanceform;
use App\Models\F4palliativeform;
use App\Models\SupportMessage;
use App\Traits\LogsActivity;

class AdminController extends Controller
{
    use LogsActivity;
    public function forms($id)
    {
        $form1 = Demographicprofile::with(['riskfactors', 'cancerdiagnoses', 'treatments'])->findOrFail($id);
        $form2 = F2followup::where('hospitalID', $form1->hospitalID)->where('status', 1)->first();
        $form3 = F3patientsurveillanceform::where('hospitalID', $form1->hospitalID)->where('status', 1)->first();
        $form4 = F4palliativeform::where('hospitalID', $form1->hospitalID)->where('status', 1)->first();        
        return view('admin.files.forms',[
            'forms' => [
                'form1' => $form1 ?? [],
                'form2' => $form2 ?? [],
                'form3' => $form3 ?? [],
                'form4' => $form4 ?? []
            ],
            'hospitalID' => $form1->hospitalID,
            'drafts' => [
                'form2' => F2followup::where('hospitalID', $form1->hospitalID)->where('status', 0)->exists(),
                'form3' => F3patientsurveillanceform::where('hospitalID', $form1->hospitalID)->where('status', 0)->exists(),
                'form4' => F4palliativeform::where('hospitalID', $form1->hospitalID)->where('status', 0)->exists(),
            ],
        ]);
    }
    /**
     * Tables that may be deleted from via the generic admin delete route.
     * Anything else is rejected (previously any table name in the URL was accepted).
     */
    private const DELETABLE_TABLES = ['users'];

    public function delete($id, $table)
    {
        abort_unless(in_array($table, self::DELETABLE_TABLES, true), 404);

        if ($table === 'users' && (int) $id === (int) auth()->id()) {
            return back()->withErrors(['error' => 'You cannot delete your own account.']);
        }

        $record = DB::table($table)->where('id', $id)->first();
        abort_unless($record, 404);

        DB::table($table)->where('id', $id)->delete();

        $this->logActivity('delete', "Deleted record from {$table} (ID: {$id})", null, [
            'table' => $table,
            'record_id' => $id
        ]);

        return redirect()->back()->with('success', 'Record deleted successfully.');
    }

    /** Delete a Form 1 patient record together with all of its Form 1 steps. */
    public function delete_record($id)
    {
        $record = Demographicprofile::findOrFail($id);
        $name = trim(($record->name['firstname'] ?? '') . ' ' . ($record->name['lastname'] ?? ''));

        DB::transaction(function () use ($record) {
            $record->riskfactors()->delete();
            $record->cancerdiagnoses()->delete();
            $record->treatments()->delete();

            // Forms 2-4 are linked by hospital number (not a foreign key), so remove them explicitly.
            // Their child pages are removed by the ON DELETE CASCADE foreign keys on "code".
            foreach ([F2followup::class, F3patientsurveillanceform::class, F4palliativeform::class] as $model) {
                $model::where('hospitalID', $record->hospitalID)->get()->each->delete();
            }

            $record->delete();
        });

        $this->logActivity('delete', "Deleted Form 1 record of {$name} (Hospital ID: {$record->hospitalID})", null, [
            'table' => 'demographicprofiles',
            'record_id' => $id,
            'hospitalID' => $record->hospitalID,
        ]);

        return to_route('admin.records')->with('success', "The record of {$name} has been deleted.");
    }

    public function dashboard(Request $request) {
        $period = in_array($request->query('period'), ['30d', '12m', 'year', 'all'], true) ? $request->query('period') : 'all';
        $from = match ($period) {
            '30d'  => now()->subDays(30)->startOfDay(),
            '12m'  => now()->subMonths(12)->startOfDay(),
            'year' => now()->startOfYear(),
            default => null,
        };

        $allCompleted = Demographicprofile::with(['riskfactors', 'cancerdiagnoses', 'treatments'])
            ->where('status', 1)
            ->get();
        $records = $from ? $allCompleted->filter(fn ($r) => $r->created_at && $r->created_at->gte($from))->values() : $allCompleted;

        // ---------- KPIs ----------
        $thisMonth = $allCompleted->filter(fn ($r) => $r->created_at && $r->created_at->isSameMonth(now()))->count();
        $lastMonth = $allCompleted->filter(fn ($r) => $r->created_at && $r->created_at->isSameMonth(now()->subMonthNoOverflow()))->count();
        $ages = $records->map(fn ($r) => $r->date_of_birth ? \Carbon\Carbon::parse($r->date_of_birth)->age : null)->filter(fn ($a) => $a !== null);

        $kpis = [
            'records'     => $records->count(),
            'thisMonth'   => $thisMonth,
            'monthChange' => $lastMonth > 0 ? round(($thisMonth - $lastMonth) / $lastMonth * 100) : null,
            'drafts'      => Demographicprofile::where('status', 0)->count(),
            'avgAge'      => $ages->count() ? round($ages->avg(), 1) : null,
            'newlyDx'     => $records->filter(fn ($r) => optional($r->cancerdiagnoses)->cancer_status === 'Newly diagnosed')->count(),
        ];

        // ---------- Monthly trend (last 12 months, always) ----------
        $trend = collect(range(11, 0))->mapWithKeys(function ($i) use ($allCompleted) {
            $month = now()->startOfMonth()->subMonths($i);
            return [$month->format('M Y') => $allCompleted->filter(fn ($r) => $r->created_at && $r->created_at->isSameMonth($month))->count()];
        });

        // ---------- Demographics ----------
        $sex = [
            'Male'   => $records->where('sex', 'male')->count(),
            'Female' => $records->where('sex', 'female')->count(),
        ];
        $ageBands = ['0-14' => [0, 14], '15-29' => [15, 29], '30-44' => [30, 44], '45-59' => [45, 59], '60-74' => [60, 74], '75+' => [75, 200]];
        $ageGroups = collect($ageBands)->map(fn ($b) => $ages->filter(fn ($a) => $a >= $b[0] && $a <= $b[1])->count());

        // ---------- Diagnosis ----------
        $dx = $records->pluck('cancerdiagnoses')->filter();
        $sites = $dx->flatMap(fn ($d) => array_merge($d->cancer_sites ?? [], $d->cancer_site_other ? [$d->cancer_site_other] : []))
            ->countBy()->sortDesc()->take(10);
        $stageOrder = ['Stage 0', 'Stage I', 'Stage II', 'Stage III', 'Stage IV', 'Unknown'];
        $stageCounts = $dx->pluck('clinical_stage')->filter()->countBy();
        $stages = collect($stageOrder)->mapWithKeys(fn ($s) => [$s => $stageCounts[$s] ?? 0]);
        $notStaged = $dx->filter(fn ($d) => empty($d->clinical_stage))->count();
        if ($notStaged) {
            $stages['Not staged'] = $notStaged;
        }
        $status = $dx->pluck('cancer_status')->filter()->countBy()->sortDesc();

        // ---------- Treatment modalities ----------
        $tx = $records->pluck('treatments')->filter();
        $modalities = collect([
            'Surgery'          => 'surgery',
            'Anti-cancer drug' => 'anticancer_drug',
            'Radiotherapy'     => 'radiotherapy',
            'Theranostics'     => 'theranostics',
            'Other therapies'  => 'other_therapies',
            'Multidisciplinary team' => 'team_approach',
        ])->map(fn ($field) => $tx->where($field, 'Yes')->count());

        // ---------- Risk factors (share of patients with a risk factor record) ----------
        $rf = $records->pluck('riskfactors')->filter();
        $rfTotal = max($rf->count(), 1);
        $riskFactors = collect([
            'Current / previous smoker' => $rf->filter(fn ($r) => in_array($r->tobacco_use, ['Current Smoker', 'Previous Smoker']))->count(),
            'Second-hand smoke'         => $rf->where('second_hand_smoke', 'Yes')->count(),
            'Harmful alcohol use'       => $rf->filter(fn ($r) => str_starts_with((string) $r->alcohol_use, 'With'))->count(),
            'Physically inactive'       => $rf->where('physical_activity', 'Usually Inactive')->count(),
            'Family history of cancer'  => $rf->where('family_history', 'yes')->count(),
            'Occupational exposure'     => $rf->where('occupational_exposure', 'yes')->count(),
        ])->map(fn ($n) => ['count' => $n, 'pct' => round($n / $rfTotal * 100)]);
        $rfCount = $rf->count();

        // ---------- Geography ----------
        $places = $records->map(fn ($r) => trim(($r->permanent['city'] ?? '') . (isset($r->permanent['province']) ? ', ' . $r->permanent['province'] : ''), ', '))
            ->filter()->countBy()->sortDesc()->take(6);

        $recent = $allCompleted->sortByDesc('created_at')->take(6)->values();

        // ---------- System (admin) ----------
        $totalUsers = User::where('role', 'user')->count();
        $pendingSupportMessages = SupportMessage::where('status', 'pending')->count();
        $totalSupportMessages = SupportMessage::count();
        $todayActivities = \App\Models\ActivityLog::whereDate('created_at', today())->count();
        $totalActivities = \App\Models\ActivityLog::count();
        $totalRecords = $allCompleted->count();

        return view('admin.files.dashboard', compact(
            'period', 'kpis', 'trend', 'sex', 'ageGroups', 'sites', 'stages', 'status',
            'modalities', 'riskFactors', 'rfCount', 'places', 'recent',
            'totalRecords', 'totalUsers', 'pendingSupportMessages', 'totalSupportMessages',
            'todayActivities', 'totalActivities'
        ));
    }

    public function records(){
        $data = Demographicprofile::with(['cancerdiagnoses', 'treatments'])
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->get();

        $drafts = Demographicprofile::with(['riskfactors', 'cancerdiagnoses'])
                ->where('status', 0)
                ->orderBy('updated_at', 'desc')
                ->get();

        $stats = [
            'total'     => $data->count(),
            'thisMonth' => $data->filter(fn ($r) => $r->created_at && $r->created_at->isCurrentMonth())->count(),
            'male'      => $data->where('sex', 'male')->count(),
            'female'    => $data->where('sex', 'female')->count(),
            'drafts'    => $drafts->count(),
        ];

        return view('admin.files.records', compact('data', 'drafts', 'stats'));
    }

    public function users() {
        $data = User::orderBy('id', 'desc')->get();
        return view('admin.files.users', compact('data'));
    }

    public function add_user(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255|unique:users,name',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:admin,user',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        // Log user creation
        $this->logCreate($user, "Created new user: {$user->name} ({$user->role})");

        return redirect()->route('admin.users')->with('success', 'User added successfully.');
    }

    public function edit(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|string|in:admin,user',
        ]);

        $user = User::findOrFail($id);
        $oldData = $user->toArray();
        
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->role = $request->role;
        $user->save();

        // Log user update
        $this->logUpdate($user, "Updated user: {$user->name}", [
            'old' => $oldData,
            'new' => $user->toArray()
        ]);

        return to_route('admin.users')->with('success', 'User updated successfully.');
    }

    public function user_multiform($hospitalID, $form)
    {
        $data = [];
        $route = '';
        switch ($form) {
            case 2:
                $data = F2followup::where('status', 1)->where('hospitalID', $hospitalID)->get();
                $route = 'form2';
                break;
            case 3:
                $data = F3patientsurveillanceform::where('status', 1)->where('hospitalID', $hospitalID)->get();
                $route = 'form3';
                break;
            
            case 4:
                $data = F4palliativeform::where('status', 1)->where('hospitalID', $hospitalID)->get();
                $route = 'form4';
                break;
            default:
                abort(404);
        }

        return view('admin.files.user-form', [
            'data' => $data,
            'route' => $route
        ]);
    }

    public function report()
    {
        return view('admin.files.report');
    }

    public function select_report()
    {
        return view('admin.files.select-report');
    }

    public function generate_report(Request $request)
    {
        return view('reports.' . strtolower($request->code),[
            'data' => $request->all()
        ]);
    }
}
