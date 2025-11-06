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
    public function connection(){
        $data = DB::connection('sqlsrv')->table('Patient')
                ->where('HospitalID', '0000000001')
                ->first();
        dd($data);
    }

    public function forms($id)
    {
        $form1 = Demographicprofile::find($id);
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
            'hospitalID' => $form1->hospitalID
        ]);

        return response()->json([
            'hospitalID' => $form1->hospitalID
        ]);

    }
    public function delete($id, $table)
    {
        $record = DB::table($table)->where('id', $id)->first();
        DB::table($table)->where('id', $id)->delete();
        
        // Log deletion
        $this->logActivity('delete', "Deleted record from {$table} (ID: {$id})", null, [
            'table' => $table,
            'record_id' => $id
        ]);
        
        return redirect()->back()->with('success', 'Record deleted successfully.');
    }

    public function dashboard() {
        $totalRecords = Demographicprofile::where('status', 1)->count();
        $totalUsers = User::where('role', 'user')->count();
        $pendingSupportMessages = SupportMessage::where('status', 'pending')->count();
        $totalSupportMessages = SupportMessage::count();
        $todayActivities = \App\Models\ActivityLog::whereDate('created_at', today())->count();
        $totalActivities = \App\Models\ActivityLog::count();
        
        return view('admin.files.dashboard', compact(
            'totalRecords', 
            'totalUsers', 
            'pendingSupportMessages', 
            'totalSupportMessages',
            'todayActivities',
            'totalActivities'
        ));
    }

    public function records(){
        $data = Demographicprofile::where('status', 1)
                ->orderBy('id', 'desc')
                ->get();
        return view('admin.files.records', compact('data'));
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
            
            default:
                $data = F4palliativeform::where('status', 1)->where('hospitalID', $hospitalID)->get();
                $route = 'form4';
                break;
        }

        return view('admin.files.user-form', [
            'data' => $data,
            'route' => $route
        ]);

        return response()->json([
            'data' => $data
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
