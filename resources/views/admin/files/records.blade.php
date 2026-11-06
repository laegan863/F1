@extends('admin.app')
@section('content')
    <style>
        .rec-stat { background: #fff; border-radius: 10px; padding: 16px 18px; display: flex; align-items: center; gap: 14px; box-shadow: 0 1px 4px rgba(0,0,0,.06); margin-bottom: 20px; }
        .rec-stat .ico { width: 44px; height: 44px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px; }
        .rec-stat .val { font-size: 24px; font-weight: 700; line-height: 1; }
        .rec-stat .lbl { color: #8a95a3; font-size: 12px; text-transform: uppercase; letter-spacing: .5px; margin-top: 4px; }
        .rec-table td { vertical-align: middle !important; }
        .rec-name { font-weight: 600; color: #2f4050; }
        .rec-sub { color: #8a95a3; font-size: 12px; }
        .pill { display: inline-block; border-radius: 999px; padding: 2px 10px; font-size: 11.5px; font-weight: 600; background: #eef2f6; color: #4a5a6c; margin: 1px 0; }
        .pill-stage { background: #e7f2fb; color: #0b5d94; }
        .rec-actions .btn { margin: 1px; }
        .nav-tabs .badge { margin-left: 4px; }
        .draft-progress { height: 6px; border-radius: 3px; background: #eef2f6; overflow: hidden; width: 120px; }
        .draft-progress > div { height: 100%; background: #f8ac59; }
    </style>

    <div class="wrapper wrapper-content">
        @include('admin.component.session-alert')

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="rec-stat">
                    <div class="ico" style="background:#e7f2fb;color:#1c84c6"><i class="fa fa-folder-open"></i></div>
                    <div><div class="val">{{ $stats['total'] }}</div><div class="lbl">Completed records</div></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="rec-stat">
                    <div class="ico" style="background:#e6f7f2;color:#1ab394"><i class="fa fa-calendar-plus-o"></i></div>
                    <div><div class="val">{{ $stats['thisMonth'] }}</div><div class="lbl">Added this month</div></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="rec-stat">
                    <div class="ico" style="background:#f3eefc;color:#7c5cc4"><i class="fa fa-venus-mars"></i></div>
                    <div><div class="val">{{ $stats['male'] }} / {{ $stats['female'] }}</div><div class="lbl">Male / Female</div></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="rec-stat">
                    <div class="ico" style="background:#fff4e5;color:#f8ac59"><i class="fa fa-pencil-square-o"></i></div>
                    <div><div class="val">{{ $stats['drafts'] }}</div><div class="lbl">Unfinished drafts</div></div>
                </div>
            </div>
        </div>

        <div class="ibox">
            <div class="ibox-title d-flex align-items-center justify-content-between" style="padding-right:15px">
                <h5>Patient Records</h5>
                <a href="{{ route('first-page') }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i> Add Record
                </a>
            </div>
            <div class="ibox-content">
                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab-completed" role="tab">
                            Completed <span class="badge badge-primary">{{ $stats['total'] }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-drafts" role="tab">
                            Drafts <span class="badge badge-warning">{{ $stats['drafts'] }}</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    {{-- ================= Completed records ================= --}}
                    <div class="tab-pane active" id="tab-completed" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover dataTables-example rec-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Hospital No.</th>
                                        <th>Patient</th>
                                        <th>Sex / Age</th>
                                        <th>Primary Site</th>
                                        <th>Stage</th>
                                        <th>Added</th>
                                        <th class="text-center" style="min-width:170px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        @php
                                            $dx = $item->cancerdiagnoses;
                                            $sites = collect($dx->cancer_sites ?? [])->when($dx && $dx->cancer_site_other, fn ($c) => $c->push($dx->cancer_site_other));
                                            $age = $item->date_of_birth ? \Carbon\Carbon::parse($item->date_of_birth)->age : null;
                                            $fullName = trim(($item->name['firstname'] ?? '') . ' ' . ($item->name['middlename'] ?? '') . ' ' . ($item->name['lastname'] ?? ''));
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><span class="font-weight-bold" style="font-family:monospace">{{ $item->hospitalID }}</span></td>
                                            <td>
                                                <div class="rec-name">{{ $fullName }}</div>
                                                <div class="rec-sub">
                                                    @if($item->mobile_number)<i class="fa fa-phone"></i> {{ $item->mobile_number }}@endif
                                                    @if($item->email_address) &middot; {{ $item->email_address }}@endif
                                                </div>
                                            </td>
                                            <td data-order="{{ $age }}">
                                                {{ ucfirst($item->sex) }}{{ $age !== null ? ', ' . $age : '' }}
                                            </td>
                                            <td>
                                                @forelse($sites->take(2) as $site)
                                                    <span class="pill">{{ $site }}</span>
                                                @empty
                                                    <span class="text-muted">&mdash;</span>
                                                @endforelse
                                                @if($sites->count() > 2)
                                                    <span class="pill" title="{{ $sites->slice(2)->implode(', ') }}">+{{ $sites->count() - 2 }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($dx && $dx->clinical_stage)
                                                    <span class="pill pill-stage">{{ $dx->clinical_stage }}</span>
                                                @else
                                                    <span class="text-muted">&mdash;</span>
                                                @endif
                                            </td>
                                            <td data-order="{{ optional($item->created_at)->timestamp }}">
                                                {{ optional($item->created_at)->format('M d, Y') }}
                                            </td>
                                            <td class="text-center rec-actions" style="white-space:nowrap">
                                                <a href="{{ route('view.forms', ['id' => $item->id]) }}" class="btn btn-primary btn-xs" title="Open record">
                                                    <i class="fa fa-folder-open"></i> Open
                                                </a>
                                                <a href="{{ route('result.form1', ['id' => $item->id]) }}" target="_blank" rel="noopener" class="btn btn-white btn-xs" title="Print Form 1">
                                                    <i class="fa fa-print"></i>
                                                </a>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <h6 class="dropdown-header">Edit Form 1</h6>
                                                        <a class="dropdown-item" href="{{ route('records.edit', ['id' => $item->id, 'step' => 'demographic']) }}"><i class="fa fa-user fa-fw"></i> Demographic profile</a>
                                                        <a class="dropdown-item" href="{{ route('records.edit', ['id' => $item->id, 'step' => 'riskfactor']) }}"><i class="fa fa-heartbeat fa-fw"></i> Risk factors</a>
                                                        <a class="dropdown-item" href="{{ route('records.edit', ['id' => $item->id, 'step' => 'cancer-diagnose']) }}"><i class="fa fa-stethoscope fa-fw"></i> Cancer diagnosis</a>
                                                        <a class="dropdown-item" href="{{ route('records.edit', ['id' => $item->id, 'step' => 'treatment']) }}"><i class="fa fa-medkit fa-fw"></i> Treatment</a>
                                                    </div>
                                                </div>
                                                @if(Auth::user()->role === 'admin')
                                                    <button type="button" class="btn btn-danger btn-xs"
                                                            onclick="confirmRecordDelete({{ $item->id }}, @js($fullName))" title="Delete record">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- ================= Drafts ================= --}}
                    <div class="tab-pane" id="tab-drafts" role="tabpanel">
                        @if($drafts->isEmpty())
                            <div class="text-center text-muted py-5">
                                <i class="fa fa-check-circle fa-3x mb-2" style="color:#1ab394"></i>
                                <div>No unfinished drafts. Every started record has been completed.</div>
                            </div>
                        @else
                            <p class="text-muted small">
                                Drafts are records whose wizard was started but not finished. Resume to continue where it stopped.
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover rec-table">
                                    <thead>
                                        <tr>
                                            <th>Hospital No.</th>
                                            <th>Patient</th>
                                            <th>Progress</th>
                                            <th>Last updated</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($drafts as $d)
                                            @php
                                                $done = 1 + ($d->riskfactors ? 1 : 0) + ($d->cancerdiagnoses ? 1 : 0);
                                                $draftName = trim(($d->name['firstname'] ?? '') . ' ' . ($d->name['lastname'] ?? ''));
                                            @endphp
                                            <tr>
                                                <td style="font-family:monospace" class="font-weight-bold">{{ $d->hospitalID }}</td>
                                                <td class="rec-name">{{ $draftName ?: '—' }}</td>
                                                <td>
                                                    <div class="draft-progress"><div style="width: {{ $done / 4 * 100 }}%"></div></div>
                                                    <span class="rec-sub">{{ $done }} of 4 steps saved</span>
                                                </td>
                                                <td>{{ optional($d->updated_at)->diffForHumans() }}</td>
                                                <td class="text-center" style="white-space:nowrap">
                                                    <form method="POST" action="{{ route('admin.validate-hospital-number') }}" class="d-inline">
                                                        @csrf
                                                        <input type="hidden" name="HospitalID" value="{{ $d->hospitalID }}">
                                                        <button class="btn btn-warning btn-xs"><i class="fa fa-play"></i> Resume</button>
                                                    </form>
                                                    @if(Auth::user()->role === 'admin')
                                                        <button type="button" class="btn btn-danger btn-xs"
                                                                onclick="confirmRecordDelete({{ $d->id }}, @js($draftName ?: $d->hospitalID))">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function () {
            if (location.hash === '#tab-drafts') $('a[href="#tab-drafts"]').tab('show');
        });
    </script>
    @if(Auth::user()->role === 'admin')
        <form id="deleteRecordForm" method="POST" class="d-none">
            @csrf
            @method('DELETE')
        </form>
        <script>
            function confirmRecordDelete(id, name) {
                Swal.fire({
                    title: 'Delete this record?',
                    html: 'The Form 1 record of <b>' + $('<div>').text(name).html() + '</b> (demographics, risk factors, diagnosis and treatment) will be permanently deleted.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ed5565',
                    confirmButtonText: 'Yes, delete it',
                    input: 'text',
                    inputPlaceholder: 'Type DELETE to confirm',
                    preConfirm: (v) => {
                        if (v !== 'DELETE') { Swal.showValidationMessage('Please type DELETE to confirm'); return false; }
                        return true;
                    }
                }).then((r) => {
                    if (r.isConfirmed) {
                        const f = document.getElementById('deleteRecordForm');
                        f.action = "{{ route('admin.records.delete', ['id' => '__ID__']) }}".replace('__ID__', id);
                        f.submit();
                    }
                });
            }
        </script>
    @endif
@endsection
