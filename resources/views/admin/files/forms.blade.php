@extends('admin.app')
@section('content')
    @php
        $p = $forms['form1'];
        $fullName = trim(($p->name['firstname'] ?? '') . ' ' . ($p->name['middlename'] ?? '') . ' ' . ($p->name['lastname'] ?? '') . (isset($p->name['suffix']) && $p->name['suffix'] !== 'N/A' ? ' ' . $p->name['suffix'] : ''));
        $age = $p->date_of_birth ? \Carbon\Carbon::parse($p->date_of_birth)->age : null;
        $dx = $p->cancerdiagnoses;
        $steps = [
            'demographic'     => ['Demographic profile', 'fa-user',        true],
            'riskfactor'      => ['Risk factors',        'fa-heartbeat',   (bool) $p->riskfactors],
            'cancer-diagnose' => ['Cancer diagnosis',    'fa-stethoscope', (bool) $p->cancerdiagnoses],
            'treatment'       => ['Treatment',           'fa-medkit',      (bool) $p->treatments],
        ];
        $followUps = [
            'form2' => ['Form 2', 'Follow-up', 'fa-refresh', 'navy-bg'],
            'form3' => ['Form 3', 'Surveillance', 'fa-eye', 'lazur-bg'],
            'form4' => ['Form 4', 'Palliative care', 'fa-heart', 'yellow-bg'],
        ];
    @endphp
    <style>
        .pt-card { background: #fff; border-radius: 10px; box-shadow: 0 1px 4px rgba(0,0,0,.06); padding: 22px 24px; margin-bottom: 20px; }
        .pt-avatar { width: 64px; height: 64px; border-radius: 50%; background: #1c84c6; color: #fff; font-size: 24px; font-weight: 700; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .pt-meta { display: flex; flex-wrap: wrap; gap: 6px 22px; color: #6b7a8c; margin-top: 6px; }
        .pt-meta b { color: #2f4050; font-weight: 600; }
        .step-row { display: flex; align-items: center; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #f0f2f5; }
        .step-row:last-child { border-bottom: 0; }
        .step-ico { width: 34px; height: 34px; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; margin-right: 12px; }
        .step-ok { background: #e6f7f2; color: #1ab394; }
        .step-miss { background: #fdecea; color: #ed5565; }
        .fu-card { background: #fff; border-radius: 10px; box-shadow: 0 1px 4px rgba(0,0,0,.06); padding: 18px 20px; height: 100%; display: flex; flex-direction: column; }
        .fu-card .head { display: flex; align-items: center; gap: 12px; margin-bottom: 12px; }
        .fu-card .ico { width: 40px; height: 40px; border-radius: 10px; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 18px; }
        .fu-card .actions { margin-top: auto; display: flex; gap: 6px; }
    </style>

    <div class="wrapper wrapper-content">
        @include('admin.component.session-alert')

        <div class="mb-3">
            <a href="{{ route('admin.records') }}" class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i> Back to records</a>
        </div>

        {{-- Patient header --}}
        <div class="pt-card d-flex align-items-center flex-wrap" style="gap:18px">
            <div class="pt-avatar">{{ strtoupper(mb_substr($p->name['firstname'] ?? '?', 0, 1) . mb_substr($p->name['lastname'] ?? '', 0, 1)) }}</div>
            <div class="flex-grow-1">
                <h2 class="m-0 font-weight-bold" style="font-size:22px">{{ $fullName }}</h2>
                <div class="pt-meta">
                    <span>Hospital No. <b style="font-family:monospace">{{ $p->hospitalID }}</b></span>
                    <span>Sex <b>{{ ucfirst($p->sex) }}</b></span>
                    @if($age !== null)<span>Age <b>{{ $age }}</b></span>@endif
                    @if($p->mobile_number)<span><i class="fa fa-phone"></i> <b>{{ $p->mobile_number }}</b></span>@endif
                    @if($dx && $dx->clinical_stage)<span>Stage <b>{{ $dx->clinical_stage }}</b></span>@endif
                    @if($dx && !empty($dx->cancer_sites))<span>Site <b>{{ implode(', ', $dx->cancer_sites) }}</b></span>@endif
                </div>
            </div>
            <div>
                @if($p->status == 1)
                    <span class="label label-primary" style="font-size:12px;padding:6px 12px">Complete</span>
                @else
                    <span class="label label-warning" style="font-size:12px;padding:6px 12px">Draft</span>
                @endif
            </div>
        </div>

        <div class="row">
            {{-- Form 1 --}}
            <div class="col-lg-6 mb-4">
                <div class="pt-card h-100 mb-0">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h4 class="m-0 font-weight-bold">Form 1 &middot; Initial registration</h4>
                        <a href="{{ route('result.form1', ['id' => $p->id]) }}" target="_blank" rel="noopener" class="btn btn-white btn-sm">
                            <i class="fa fa-print"></i> Print
                        </a>
                    </div>
                    @foreach($steps as $key => [$label, $icon, $done])
                        <div class="step-row">
                            <div class="d-flex align-items-center">
                                <span class="step-ico {{ $done ? 'step-ok' : 'step-miss' }}"><i class="fa {{ $icon }}"></i></span>
                                <div>
                                    <div class="font-weight-bold">{{ $label }}</div>
                                    <small class="{{ $done ? 'text-navy' : 'text-danger' }}">{{ $done ? 'Saved' : 'Missing' }}</small>
                                </div>
                            </div>
                            <a href="{{ route('records.edit', ['id' => $p->id, 'step' => $key]) }}" class="btn btn-sm {{ $done ? 'btn-white' : 'btn-primary' }}">
                                <i class="fa {{ $done ? 'fa-pencil' : 'fa-plus' }}"></i> {{ $done ? 'Edit' : 'Add' }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Forms 2-4 --}}
            <div class="col-lg-6">
                <div class="row">
                    @foreach($followUps as $key => [$title, $subtitle, $icon, $bg])
                        @php $f = $forms[$key]; $has = isset($f->status) && $f->status == 1; @endphp
                        <div class="col-12 mb-4">
                            <div class="fu-card">
                                <div class="head">
                                    <div class="ico {{ $bg }}"><i class="fa {{ $icon }}"></i></div>
                                    <div class="flex-grow-1">
                                        <div class="font-weight-bold" style="font-size:15px">{{ $title }} &middot; {{ $subtitle }}</div>
                                        <small class="{{ $has ? 'text-navy' : 'text-muted' }}">
                                            {{ $has ? 'Has saved entries' : 'No entries yet' }}
                                        </small>
                                        @if(!empty($drafts[$key]))
                                            <small class="text-warning d-block"><i class="fa fa-pencil"></i> Unfinished entry &mdash; "New" will reopen it</small>
                                        @endif
                                    </div>
                                    <div class="actions">
                                        @if($has)
                                            <a href="{{ route('user.multiform', ['hospitalID' => $hospitalID, 'form' => substr($key, -1)]) }}" class="btn btn-white btn-sm">
                                                <i class="fa fa-list"></i>
                                                View Entries
                                            </a>
                                        @endif
                                        <a href="{{ route($key . '-firstpage', ['hospitalID' => $hospitalID, 'new' => 1]) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-plus"></i> New
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
