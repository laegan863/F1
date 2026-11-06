@extends('admin.app')
@section('content')
    <style>
        .dash-toolbar { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px; margin-bottom: 18px; }
        .dash-toolbar h3 { margin: 0; font-weight: 700; }
        .dash-toolbar .sub { color: #8a95a3; font-size: 13px; }
        .period .btn { font-size: 12px; }
        .kpi { background: #fff; border-radius: 10px; padding: 18px 20px; box-shadow: 0 1px 4px rgba(0,0,0,.06); height: 100%; position: relative; overflow: hidden; display: block; color: inherit; transition: transform .1s, box-shadow .15s; }
        a.kpi:hover { transform: translateY(-2px); box-shadow: 0 6px 16px rgba(0,0,0,.08); color: inherit; text-decoration: none; }
        .kpi .lbl { color: #8a95a3; font-size: 11.5px; text-transform: uppercase; letter-spacing: .6px; font-weight: 600; }
        .kpi .val { font-size: 30px; font-weight: 700; color: #2f4050; line-height: 1.1; margin-top: 6px; }
        .kpi .foot { font-size: 12px; color: #8a95a3; margin-top: 4px; }
        .kpi .ico { position: absolute; right: 16px; top: 16px; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px; }
        .up { color: #1ab394; } .down { color: #ed5565; }
        .panel-card { background: #fff; border-radius: 10px; box-shadow: 0 1px 4px rgba(0,0,0,.06); padding: 18px 20px; height: 100%; }
        .panel-card h5 { font-weight: 700; font-size: 14px; margin: 0 0 4px; color: #2f4050; }
        .panel-card .hint { color: #8a95a3; font-size: 12px; margin-bottom: 12px; }
        .chart-box { position: relative; height: 260px; }
        .chart-box.sm { height: 220px; }
        .empty-chart { height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; color: #b0bac6; }
        .rf-row { margin-bottom: 12px; }
        .rf-row .top { display: flex; justify-content: space-between; font-size: 13px; margin-bottom: 4px; }
        .rf-bar { height: 8px; border-radius: 4px; background: #eef2f6; overflow: hidden; }
        .rf-bar > div { height: 100%; border-radius: 4px; background: linear-gradient(90deg, #f8ac59, #ed5565); }
        .mini-list { list-style: none; padding: 0; margin: 0; }
        .mini-list li { display: flex; justify-content: space-between; align-items: center; padding: 9px 0; border-bottom: 1px solid #f0f2f5; font-size: 13px; }
        .mini-list li:last-child { border-bottom: 0; }
        .avatar-sm { width: 32px; height: 32px; border-radius: 50%; background: #e7f2fb; color: #1c84c6; font-weight: 700; font-size: 12px; display: inline-flex; align-items: center; justify-content: center; margin-right: 10px; }
        .sys-tile { display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #f0f2f5; color: inherit; }
        .sys-tile:last-child { border-bottom: 0; }
        .sys-tile:hover { text-decoration: none; color: #1c84c6; }
        .sys-tile .n { margin-left: auto; font-weight: 700; font-size: 18px; }
        .row-gap > [class*="col-"] { margin-bottom: 20px; }
    </style>

    @php
        $periodLabels = ['all' => 'All time', 'year' => 'This year', '12m' => 'Last 12 months', '30d' => 'Last 30 days'];
        $isAdmin = Auth::user()->role === 'admin';
    @endphp

    <div class="wrapper wrapper-content">
        <div class="dash-toolbar">
            <div>
                <h3>Welcome back, {{ Auth::user()->name }}</h3>
                <div class="sub">Cancer registry overview &middot; {{ $periodLabels[$period] }} &middot; updated {{ now()->format('M d, Y g:i A') }}</div>
            </div>
            <div class="d-flex align-items-center" style="gap:8px">
                <div class="btn-group period" role="group" aria-label="Period">
                    @foreach($periodLabels as $key => $label)
                        <a href="{{ route('admin.dashboard', ['period' => $key]) }}" class="btn btn-sm {{ $period === $key ? 'btn-primary' : 'btn-white' }}">{{ $label }}</a>
                    @endforeach
                </div>
                <a href="{{ route('first-page') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Record</a>
            </div>
        </div>

        {{-- ================= KPIs ================= --}}
        <div class="row row-gap">
            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('admin.records') }}" class="kpi">
                    <div class="ico" style="background:#e7f2fb;color:#1c84c6"><i class="fa fa-folder-open"></i></div>
                    <div class="lbl">Patient records</div>
                    <div class="val">{{ number_format($kpis['records']) }}</div>
                    <div class="foot">Completed Form 1 records</div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="kpi">
                    <div class="ico" style="background:#e6f7f2;color:#1ab394"><i class="fa fa-calendar-plus-o"></i></div>
                    <div class="lbl">New this month</div>
                    <div class="val">{{ $kpis['thisMonth'] }}</div>
                    <div class="foot">
                        @if($kpis['monthChange'] === null)
                            No records last month
                        @else
                            <span class="{{ $kpis['monthChange'] >= 0 ? 'up' : 'down' }}">
                                <i class="fa fa-caret-{{ $kpis['monthChange'] >= 0 ? 'up' : 'down' }}"></i> {{ abs($kpis['monthChange']) }}%
                            </span> vs last month
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="kpi">
                    <div class="ico" style="background:#f3eefc;color:#7c5cc4"><i class="fa fa-user"></i></div>
                    <div class="lbl">Average age</div>
                    <div class="val">{{ $kpis['avgAge'] ?? '—' }}</div>
                    <div class="foot">{{ $kpis['newlyDx'] }} newly diagnosed</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('admin.records') }}#tab-drafts" class="kpi">
                    <div class="ico" style="background:#fff4e5;color:#f8ac59"><i class="fa fa-pencil-square-o"></i></div>
                    <div class="lbl">Unfinished drafts</div>
                    <div class="val">{{ $kpis['drafts'] }}</div>
                    <div class="foot">Started but not completed</div>
                </a>
            </div>
        </div>

        {{-- ================= Trend + sex ================= --}}
        <div class="row row-gap">
            <div class="col-lg-8">
                <div class="panel-card">
                    <h5>Registrations trend</h5>
                    <div class="hint">Completed records per month, last 12 months</div>
                    <div class="chart-box"><canvas id="trendChart"></canvas></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel-card">
                    <h5>Sex distribution</h5>
                    <div class="hint">Sex at birth</div>
                    <div class="chart-box"><canvas id="sexChart"></canvas></div>
                </div>
            </div>
        </div>

        {{-- ================= Sites + stage ================= --}}
        <div class="row row-gap">
            <div class="col-lg-7">
                <div class="panel-card">
                    <h5>Top primary cancer sites</h5>
                    <div class="hint">Up to 10 most frequent sites (a patient may have more than one)</div>
                    <div class="chart-box" style="height:300px"><canvas id="sitesChart"></canvas></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="panel-card">
                    <h5>Clinical stage at diagnosis</h5>
                    <div class="hint">Group clinical stage</div>
                    <div class="chart-box" style="height:300px"><canvas id="stageChart"></canvas></div>
                </div>
            </div>
        </div>

        {{-- ================= Age + status + modalities ================= --}}
        <div class="row row-gap">
            <div class="col-lg-4">
                <div class="panel-card">
                    <h5>Age groups</h5>
                    <div class="hint">Current age of patients</div>
                    <div class="chart-box sm"><canvas id="ageChart"></canvas></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel-card">
                    <h5>Current cancer status</h5>
                    <div class="hint">As recorded at registration</div>
                    <div class="chart-box sm"><canvas id="statusChart"></canvas></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel-card">
                    <h5>Treatment types</h5>
                    <div class="hint">Patients receiving each type</div>
                    <div class="chart-box sm"><canvas id="txChart"></canvas></div>
                </div>
            </div>
        </div>

        {{-- ================= Risk factors + geography + recent ================= --}}
        <div class="row row-gap">
            <div class="col-lg-4">
                <div class="panel-card">
                    <h5>Risk factor prevalence</h5>
                    <div class="hint">Share of {{ $rfCount }} patient{{ $rfCount === 1 ? '' : 's' }} with risk factor data</div>
                    @foreach($riskFactors as $label => $rf)
                        <div class="rf-row">
                            <div class="top"><span>{{ $label }}</span><span class="font-weight-bold">{{ $rf['pct'] }}% <small class="text-muted">({{ $rf['count'] }})</small></span></div>
                            <div class="rf-bar"><div style="width: {{ $rf['pct'] }}%"></div></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel-card">
                    <h5>Top locations</h5>
                    <div class="hint">Permanent address (city, province)</div>
                    @if($places->isEmpty())
                        <div class="text-muted text-center py-4">No data yet</div>
                    @else
                        @php $maxPlace = max($places->max(), 1); @endphp
                        <ul class="mini-list">
                            @foreach($places as $place => $n)
                                <li>
                                    <div style="flex:1;min-width:0">
                                        <div class="text-truncate" title="{{ $place }}">{{ $place }}</div>
                                        <div class="rf-bar mt-1" style="height:5px"><div style="width: {{ $n / $maxPlace * 100 }}%;background:#1c84c6"></div></div>
                                    </div>
                                    <span class="font-weight-bold ml-3">{{ $n }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Recently added</h5>
                        <a href="{{ route('admin.records') }}" class="small">View all</a>
                    </div>
                    <div class="hint">Latest completed records</div>
                    @if($recent->isEmpty())
                        <div class="text-muted text-center py-4">No records yet</div>
                    @else
                        <ul class="mini-list">
                            @foreach($recent as $r)
                                <li>
                                    <a href="{{ route('view.forms', ['id' => $r->id]) }}" class="d-flex align-items-center" style="color:inherit;min-width:0">
                                        <span class="avatar-sm">{{ strtoupper(mb_substr($r->name['firstname'] ?? '?', 0, 1) . mb_substr($r->name['lastname'] ?? '', 0, 1)) }}</span>
                                        <span class="text-truncate">
                                            <span class="font-weight-bold">{{ ($r->name['firstname'] ?? '') . ' ' . ($r->name['lastname'] ?? '') }}</span><br>
                                            <small class="text-muted">{{ implode(', ', optional($r->cancerdiagnoses)->cancer_sites ?? []) ?: 'No site recorded' }}</small>
                                        </span>
                                    </a>
                                    <small class="text-muted ml-2" style="white-space:nowrap">{{ optional($r->created_at)->diffForHumans(null, true) }}</small>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>

        {{-- ================= System overview (admin) ================= --}}
        @if($isAdmin)
            <div class="row row-gap">
                <div class="col-12">
                    <div class="panel-card">
                        <h5>System overview</h5>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{ route('admin.users') }}" class="sys-tile"><i class="fa fa-users fa-lg text-warning"></i> Sub users <span class="n">{{ $totalUsers }}</span></a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('admin.support-messages') }}" class="sys-tile"><i class="fa fa-life-ring fa-lg {{ $pendingSupportMessages ? 'text-danger' : 'text-navy' }}"></i> Pending support <span class="n">{{ $pendingSupportMessages }} <small class="text-muted" style="font-size:12px">/ {{ $totalSupportMessages }}</small></span></a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('admin.activity-logs') }}" class="sys-tile"><i class="fa fa-bolt fa-lg text-info"></i> Activities today <span class="n">{{ $todayActivities }}</span></a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('admin.activity-logs') }}" class="sys-tile"><i class="fa fa-history fa-lg text-primary"></i> All activities <span class="n">{{ number_format($totalActivities) }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <script src="{{ asset('assets/js/plugins/chartJs/Chart.min.js') }}"></script>
    <script>
        (function () {
            const palette = ['#1c84c6', '#1ab394', '#f8ac59', '#ed5565', '#7c5cc4', '#23c6c8', '#2f4050', '#a8d08d', '#ff8fab', '#b0bac6'];
            Chart.defaults.global.defaultFontFamily = '"open sans","Helvetica Neue",Helvetica,Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#6b7a8c';
            Chart.defaults.global.legend.labels.boxWidth = 12;
            Chart.defaults.global.tooltips.backgroundColor = '#2f4050';
            Chart.defaults.global.tooltips.xPadding = 10;
            Chart.defaults.global.tooltips.yPadding = 8;

            const intAxis = { ticks: { beginAtZero: true, precision: 0 }, gridLines: { color: '#f0f2f5', zeroLineColor: '#e3e9f0' } };
            const noGrid = { gridLines: { display: false } };
            const sum = (o) => Object.values(o).reduce((a, b) => a + b, 0);

            function render(id, config, values) {
                const el = document.getElementById(id);
                if (!el) return;
                if (!sum(values)) {
                    el.parentNode.innerHTML = '<div class="empty-chart"><i class="fa fa-bar-chart fa-2x mb-2"></i>No data for this period</div>';
                    return;
                }
                config.options = Object.assign({ responsive: true, maintainAspectRatio: false }, config.options || {});
                new Chart(el, config);
            }

            const trend = @json($trend);
            const trendCtx = document.getElementById('trendChart').getContext('2d');
            const grad = trendCtx.createLinearGradient(0, 0, 0, 260);
            grad.addColorStop(0, 'rgba(28,132,198,.30)');
            grad.addColorStop(1, 'rgba(28,132,198,0)');
            render('trendChart', {
                type: 'line',
                data: {
                    labels: Object.keys(trend),
                    datasets: [{
                        label: 'Records', data: Object.values(trend),
                        borderColor: '#1c84c6', backgroundColor: grad, borderWidth: 2.5,
                        pointBackgroundColor: '#fff', pointBorderColor: '#1c84c6', pointRadius: 4, pointHoverRadius: 6, lineTension: .35
                    }]
                },
                options: { legend: { display: false }, scales: { yAxes: [intAxis], xAxes: [noGrid] } }
            }, trend);

            const sex = @json($sex);
            render('sexChart', {
                type: 'doughnut',
                data: { labels: Object.keys(sex), datasets: [{ data: Object.values(sex), backgroundColor: ['#1c84c6', '#ff8fab'], borderWidth: 2 }] },
                options: { cutoutPercentage: 68, legend: { position: 'bottom' } }
            }, sex);

            const sites = @json($sites);
            render('sitesChart', {
                type: 'horizontalBar',
                data: { labels: Object.keys(sites), datasets: [{ label: 'Patients', data: Object.values(sites), backgroundColor: '#1ab394', barThickness: 16 }] },
                options: { legend: { display: false }, scales: { xAxes: [intAxis], yAxes: [noGrid] } }
            }, sites);

            const stages = @json($stages);
            render('stageChart', {
                type: 'bar',
                data: { labels: Object.keys(stages), datasets: [{ label: 'Patients', data: Object.values(stages), backgroundColor: ['#a8d08d', '#23c6c8', '#1c84c6', '#f8ac59', '#ed5565', '#b0bac6', '#d5dbe2'] }] },
                options: { legend: { display: false }, scales: { yAxes: [intAxis], xAxes: [noGrid] } }
            }, stages);

            const ages = @json($ageGroups);
            render('ageChart', {
                type: 'bar',
                data: { labels: Object.keys(ages), datasets: [{ label: 'Patients', data: Object.values(ages), backgroundColor: '#7c5cc4' }] },
                options: { legend: { display: false }, scales: { yAxes: [intAxis], xAxes: [noGrid] } }
            }, ages);

            const status = @json($status);
            render('statusChart', {
                type: 'pie',
                data: { labels: Object.keys(status), datasets: [{ data: Object.values(status), backgroundColor: palette, borderWidth: 2 }] },
                options: { legend: { position: 'bottom', labels: { fontSize: 11 } } }
            }, status);

            const tx = @json($modalities);
            render('txChart', {
                type: 'horizontalBar',
                data: { labels: Object.keys(tx), datasets: [{ label: 'Patients', data: Object.values(tx), backgroundColor: '#f8ac59', barThickness: 14 }] },
                options: { legend: { display: false }, scales: { xAxes: [intAxis], yAxes: [noGrid] } }
            }, tx);
        })();
    </script>
@endsection
