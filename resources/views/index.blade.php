<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBCR - @yield("title")</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <style>
        :root {
            --brand: #107ec7;
            --brand-dark: #0b5d94;
            --brand-soft: #e7f2fb;
            --ink: #1f2d3d;
            --muted: #6b7a8c;
            --line: #e3e9f0;
            --ok: #1f9d6b;
        }
        body {
            background: #eef3f8;
            font-family: "Segoe UI", -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 14px;
            color: var(--ink);
        }
        .max-w-1000 { max-width: 1080px; }
        .bg-darkblue { background: var(--brand); }

        /* ---------- Top bar ---------- */
        .topbar {
            background: linear-gradient(120deg, var(--brand) 0%, var(--brand-dark) 100%);
            color: #fff;
            box-shadow: 0 2px 10px rgba(11, 93, 148, .25);
        }
        .topbar .inner { max-width: 1080px; margin: 0 auto; padding: 12px 24px; display: flex; align-items: center; justify-content: space-between; }
        .topbar .brand { display: flex; align-items: center; gap: 10px; color: #fff; text-decoration: none; font-weight: 700; letter-spacing: .5px; }
        .topbar .brand img { width: 34px; height: 34px; border-radius: 8px; background: #fff; padding: 2px; }
        .topbar .brand small { display: block; font-weight: 400; font-size: 11px; opacity: .8; letter-spacing: 1px; text-transform: uppercase; }
        .topbar .btn-exit { color: #fff; border: 1px solid rgba(255,255,255,.45); border-radius: 8px; padding: 6px 14px; font-size: 13px; text-decoration: none; }
        .topbar .btn-exit:hover { background: rgba(255,255,255,.12); }

        /* ---------- Main stepper ---------- */
        .stepper { display: flex; list-style: none; margin: 0 0 20px; padding: 18px 12px; background: #fff; border-radius: 14px; box-shadow: 0 2px 8px rgba(20, 50, 80, .06); }
        .stepper li { flex: 1; position: relative; text-align: center; font-size: 12.5px; color: var(--muted); }
        .stepper li::before {
            content: ""; position: absolute; top: 17px; left: calc(-50% + 22px); right: calc(50% + 22px);
            height: 3px; background: var(--line); border-radius: 2px;
        }
        .stepper li:first-child::before { display: none; }
        .stepper li.done::before, .stepper li.active::before { background: var(--brand); }
        .stepper .dot {
            width: 36px; height: 36px; border-radius: 50%; margin: 0 auto 8px;
            display: flex; align-items: center; justify-content: center;
            background: #fff; border: 2px solid var(--line); color: var(--muted); font-weight: 700; position: relative; z-index: 1;
            transition: all .2s;
        }
        .stepper li.done .dot { background: var(--brand); border-color: var(--brand); color: #fff; }
        .stepper li.active .dot { border-color: var(--brand); color: var(--brand); box-shadow: 0 0 0 5px rgba(16,126,199,.15); }
        .stepper li.active { color: var(--ink); font-weight: 600; }
        .stepper li.done { color: var(--brand-dark); }
        .stepper li.done a:hover .dot { box-shadow: 0 0 0 5px rgba(16,126,199,.15); }
        @media (max-width: 640px) { .stepper .label { display: none; } }

        .edit-banner { display: flex; align-items: center; gap: 12px; background: #fff7e6; border: 1px solid #ffe1a6; color: #7a5200; border-radius: 12px; padding: 12px 16px; margin-bottom: 18px; }

        /* ---------- Card ---------- */
        .form-card { border: 0; border-radius: 14px; overflow: hidden; box-shadow: 0 4px 18px rgba(20, 50, 80, .08); }
        .form-card > .card-header { background: #fff; border-bottom: 1px solid var(--line); padding: 18px 28px; }
        .form-card > .card-header h5 { margin: 0; font-weight: 700; color: var(--ink); font-size: 17px; letter-spacing: .2px; }
        .form-card > .card-header .step-kicker { font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--brand); font-weight: 600; margin-bottom: 2px; }
        .form-card .card-body { padding: 28px !important; }
        .form-card .card-footer { background: #f8fafc; border-top: 1px solid var(--line); padding: 14px 28px; }

        /* ---------- Sub-step (section) wizard ---------- */
        .section-nav { display: flex; flex-wrap: wrap; gap: 8px; padding: 14px 28px; background: #f8fafc; border-bottom: 1px solid var(--line); }
        .section-nav button {
            border: 1px solid var(--line); background: #fff; color: var(--muted); border-radius: 999px;
            padding: 6px 14px 6px 6px; font-size: 13px; display: inline-flex; align-items: center; gap: 8px; cursor: pointer; transition: all .15s;
        }
        .section-nav button .n { width: 22px; height: 22px; border-radius: 50%; background: #eef2f6; display: inline-flex; align-items: center; justify-content: center; font-size: 11.5px; font-weight: 700; }
        .section-nav button.active { border-color: var(--brand); color: var(--brand-dark); background: var(--brand-soft); font-weight: 600; }
        .section-nav button.active .n { background: var(--brand); color: #fff; }
        .section-nav button.visited .n { background: #d8ecfa; color: var(--brand-dark); }
        .section-nav button.has-error { border-color: #e5534b; color: #b3261e; }
        .section-nav button.has-error .n { background: #e5534b; color: #fff; }
        .wizard-section { animation: fadeIn .25s ease; }
        .wizard-section.d-none { animation: none; }
        .wizard-section > .section-title { font-size: 15px; font-weight: 700; color: var(--brand-dark); margin-bottom: 18px; padding-bottom: 10px; border-bottom: 2px solid var(--brand-soft); }
        .section-progress { height: 4px; background: var(--line); }
        .section-progress > div { height: 100%; background: var(--brand); width: 0; transition: width .3s ease; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(6px); } to { opacity: 1; transform: none; } }

        /* ---------- Inputs ---------- */
        .form-control, .form-select { border-radius: 8px !important; font-size: 14px !important; border-color: #d5dee8; padding-top: .5rem; padding-bottom: .5rem; }
        .form-control:focus, .form-select:focus { border-color: var(--brand); box-shadow: 0 0 0 .2rem rgba(16,126,199,.15); }
        .form-check-input:checked { background-color: var(--brand); border-color: var(--brand); }
        .form-label, label.fw-bold { color: #33465a; }
        .btn { border-radius: 8px !important; }
        .btn-primary { background: var(--brand); border-color: var(--brand); }
        .btn-primary:hover { background: var(--brand-dark); border-color: var(--brand-dark); }
        .is-invalid-group { background: #fff5f5; border-radius: 8px; outline: 1px dashed #e5534b; outline-offset: 4px; }

        /* Hide number spinners */
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
        input[type=number] { -moz-appearance: textfield; }

        .alert-errors { border-radius: 12px; border: 1px solid #f5c2c0; background: #fdf0ef; color: #8c2620; }
    </style>
    @yield('styles')
</head>
<body>
    @php
        $wizardSteps = [
            1 => ['label' => 'Hospital No.',    'icon' => 'fa-id-card-o'],
            2 => ['label' => 'Demographics',    'icon' => 'fa-user'],
            3 => ['label' => 'Risk Factors',    'icon' => 'fa-heartbeat'],
            4 => ['label' => 'Cancer Diagnosis','icon' => 'fa-stethoscope'],
            5 => ['label' => 'Treatment',       'icon' => 'fa-medkit'],
        ];
        $stepRoutes = [1 => 'first-page', 2 => 'demographic-profile', 3 => 'risk-factor', 4 => 'cancer-diagnose', 5 => 'treatment-diagnose'];
        $currentStep = (int) trim($__env->yieldContent('wizard_step', '0'));
        $isEditMode = isset($mode) && $mode === 'edit';
        $exitHref = $exitUrl ?? ($isEditMode && isset($record) ? route('view.forms', ['id' => $record->id]) : route('admin.records'));
    @endphp

    <header class="topbar">
        <div class="inner">
            <a class="brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                <span>CBCR <small>Cancer Registry</small></span>
            </a>
            <a class="btn-exit" href="{{ $exitHref }}"
               onclick="return confirmLeave(event, this.href)">
                <i class="fa fa-times me-1"></i> {{ $isEditMode ? 'Cancel editing' : 'Exit' }}
            </a>
        </div>
    </header>

    <section class="max-w-1000 mx-auto">
        <div class="container my-4">
            @if($currentStep > 0 && !$isEditMode)
                <ol class="stepper" aria-label="Add record progress">
                    @foreach($wizardSteps as $n => $s)
                        <li class="{{ $n < $currentStep ? 'done' : ($n === $currentStep ? 'active' : '') }}" @if($n === $currentStep) aria-current="step" @endif>
                            @if($n < $currentStep && $n > 1)
                                <a href="{{ route($stepRoutes[$n]) }}" class="text-decoration-none text-reset" title="Go back to {{ $s['label'] }}" onclick="return confirmLeave(event, this.href)">
                            @endif
                            <div class="dot">
                                @if($n < $currentStep)
                                    <i class="fa fa-check"></i>
                                @else
                                    {{ $n }}
                                @endif
                            </div>
                            <span class="label">{{ $s['label'] }}</span>
                            @if($n < $currentStep && $n > 1)
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ol>
            @endif

            {{-- Generic stepper used by Forms 2-4 (controller passes $wizard) --}}
            @isset($wizard)
                <div class="text-muted small fw-semibold text-uppercase mb-2" style="letter-spacing:1px">{{ $wizard['title'] }}</div>
                <ol class="stepper" aria-label="Form progress">
                    @foreach($wizard['steps'] as $n => $s)
                        @php $cls = $n === $wizard['current'] ? 'active' : ($s['saved'] ? 'done' : ''); @endphp
                        <li class="{{ $cls }}" @if($n === $wizard['current']) aria-current="step" @endif>
                            @if($s['url'])
                                <a href="{{ $s['url'] }}" class="text-decoration-none text-reset" title="Go to {{ $s['label'] }}" onclick="return confirmLeave(event, this.href)">
                            @endif
                            <div class="dot">
                                @if($s['saved'] && $n !== $wizard['current'])
                                    <i class="fa fa-check"></i>
                                @else
                                    {{ $n }}
                                @endif
                            </div>
                            <span class="label">{{ $s['label'] }}</span>
                            @if($s['url'])
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ol>
            @endisset

            @if($isEditMode)
                <div class="edit-banner">
                    <i class="fa fa-pencil-square-o fa-lg"></i>
                    <div>
                        <strong>Editing record</strong>
                        @isset($record)
                            &mdash; {{ $record->name['firstname'] ?? '' }} {{ $record->name['lastname'] ?? '' }}
                            <span class="text-muted">(Hospital No. {{ $record->hospitalID }})</span>
                        @endisset
                    </div>
                </div>
            @endif

            <div class="card form-card">
                <div class="card-header">
                    @isset($wizard)
                        <div class="step-kicker">
                            {{ $isEditMode ? 'Edit · ' : '' }}Page {{ $wizard['current'] }} of {{ count($wizard['steps']) }}
                        </div>
                    @endisset
                    @if($currentStep > 0)
                        <div class="step-kicker">
                            @if($isEditMode)
                                Edit &middot; {{ $wizardSteps[$currentStep]['label'] }}
                            @else
                                Step {{ $currentStep }} of {{ count($wizardSteps) }}
                            @endif
                        </div>
                    @endif
                    <h5>@yield("nav_title")</h5>
                </div>
                @if ($errors->any())
                    <div class="alert alert-errors alert-dismissible fade show mx-4 mt-4 mb-0" role="alert">
                        <div class="fw-semibold mb-1"><i class="fa fa-exclamation-triangle me-1"></i> Please fix the following:</div>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li class="small">{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @yield("content")
            </div>
        </div>
    </section>

<script src="{{ asset('sweetalert.min.js') }}"></script>
<script>
    let formDirty = false;
    document.addEventListener('input', function (e) {
        if (e.target.closest('#form')) formDirty = true;
    });

    function confirmLeave(e, href) {
        if (!formDirty) return true;
        e.preventDefault();
        Swal.fire({
            title: 'Leave this page?',
            text: 'Changes on this step have not been saved yet.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Leave',
            cancelButtonText: 'Stay'
        }).then(function (r) { if (r.isConfirmed) { formDirty = false; window.location.href = href; } });
        return false;
    }

    function handleSubmit() {
        const isEdit = {{ $isEditMode ? 'true' : 'false' }};
        Swal.fire({
            title: isEdit ? 'Save changes?' : 'Save this step?',
            text: isEdit ? 'The record will be updated with your changes.' : 'Your answers will be saved and you will continue to the next step.',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#107ec7',
            cancelButtonColor: '#6c757d',
            confirmButtonText: isEdit ? 'Yes, save changes' : 'Yes, save & continue'
        }).then((result) => {
            if (result.isConfirmed) {
                formDirty = false;
                const form = document.getElementById("form");
                form.querySelectorAll('[data-submit-btn]').forEach(b => {
                    b.disabled = true;
                    b.innerHTML = '<i class="fa fa-circle-o-notch fa-spin me-1"></i> Saving...';
                });
                form.submit();
            }
        });
    }

    /**
     * Sub-step wizard: any element with .wizard-section inside #form becomes a
     * step. Navigation, progress, and jumping to the first section with a
     * server-side validation error are handled here.
     */
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('form');
        if (!form) return;
        const sections = Array.from(form.querySelectorAll('.wizard-section'));
        const footer = form.querySelector('.card-footer');
        const errorKeys = @json($errors->keys());

        // Highlight fields that failed server-side validation
        const fieldsFor = (key) => {
            const parts = key.split('.');
            let name = parts.shift();
            parts.forEach(p => { name += '[' + p + ']'; });
            return Array.from(form.querySelectorAll(
                `[name="${name}"], [name="${name}[]"], [name^="${name}["]`
            ));
        };
        errorKeys.forEach(key => {
            fieldsFor(key).forEach(el => {
                if (el.type === 'radio' || el.type === 'checkbox') {
                    const group = el.closest('.mb-3, .row, .col-md-6, .col-md-4');
                    if (group) group.classList.add('is-invalid-group');
                } else {
                    el.classList.add('is-invalid');
                    el.addEventListener('input', () => el.classList.remove('is-invalid'), { once: true });
                    el.addEventListener('change', () => el.classList.remove('is-invalid'), { once: true });
                }
            });
        });

        if (sections.length < 2 || !footer) return;

        // Build the section nav + progress bar
        const nav = document.createElement('div');
        nav.className = 'section-nav';
        const progress = document.createElement('div');
        progress.className = 'section-progress';
        progress.innerHTML = '<div></div>';
        sections.forEach((sec, i) => {
            const title = sec.dataset.title || ('Part ' + (i + 1));
            const b = document.createElement('button');
            b.type = 'button';
            b.innerHTML = `<span class="n">${i + 1}</span><span>${title}</span>`;
            b.addEventListener('click', () => go(i));
            nav.appendChild(b);
            if (!sec.querySelector('.section-title')) {
                const h = document.createElement('div');
                h.className = 'section-title';
                h.textContent = title;
                sec.prepend(h);
            }
        });
        const body = form.querySelector('.card-body');
        body.parentNode.insertBefore(nav, body);
        body.parentNode.insertBefore(progress, body);

        // Footer controls
        const submitBtn = footer.querySelector('[data-submit-btn]');
        const prevBtn = document.createElement('button');
        prevBtn.type = 'button';
        prevBtn.className = 'btn btn-outline-secondary';
        prevBtn.innerHTML = '<i class="fa fa-angle-left me-1"></i> Previous';
        const nextBtn = document.createElement('button');
        nextBtn.type = 'button';
        nextBtn.className = 'btn btn-primary';
        nextBtn.innerHTML = 'Next <i class="fa fa-angle-right ms-1"></i>';
        const counter = document.createElement('span');
        counter.className = 'text-muted small me-auto ms-2 align-self-center';
        const slot = footer.querySelector('[data-section-controls]') || footer;
        slot.prepend(prevBtn);
        if (submitBtn) submitBtn.before(nextBtn); else slot.append(nextBtn);
        prevBtn.after(counter);

        let current = 0;
        const visited = new Set([0]);

        function go(i) {
            if (i < 0 || i >= sections.length) return;
            current = i;
            visited.add(i);
            sections.forEach((s, idx) => s.classList.toggle('d-none', idx !== i));
            Array.from(nav.children).forEach((b, idx) => {
                b.classList.toggle('active', idx === i);
                b.classList.toggle('visited', visited.has(idx) && idx !== i);
            });
            prevBtn.classList.toggle('invisible', i === 0);
            const last = i === sections.length - 1;
            nextBtn.classList.toggle('d-none', last);
            if (submitBtn) submitBtn.classList.toggle('d-none', !last);
            counter.textContent = `Part ${i + 1} of ${sections.length}`;
            progress.firstElementChild.style.width = ((i + 1) / sections.length * 100) + '%';
            const top = form.getBoundingClientRect().top + window.scrollY - 16;
            if (window.scrollY > top) window.scrollTo({ top: top, behavior: 'smooth' });
        }

        prevBtn.addEventListener('click', () => go(current - 1));
        nextBtn.addEventListener('click', () => go(current + 1));

        // Mark sections with errors and open the first one
        let firstError = -1;
        errorKeys.forEach(key => {
            fieldsFor(key).forEach(el => {
                const sec = el.closest('.wizard-section');
                const idx = sections.indexOf(sec);
                if (idx >= 0) {
                    nav.children[idx].classList.add('has-error');
                    if (firstError === -1 || idx < firstError) firstError = idx;
                }
            });
        });
        if (errorKeys.length) sections.forEach((_, i) => visited.add(i));
        go(firstError >= 0 ? firstError : 0);
    });
</script>
@stack('psgc-script')
@yield("script")
@if($errors->any())
    <script>
        Swal.fire({
            title: 'Some answers need attention',
            text: "Please review the highlighted fields.",
            icon: 'error',
            confirmButtonColor: '#107ec7',
            confirmButtonText: 'Review'
        });
    </script>
@endif
@if(Session::has('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            timer: 4000,
            timerProgressBar: true,
            showConfirmButton: false,
            icon: "success",
            title: @json(Session::get('success'))
        });
    </script>
@endif
@if(Session::has('info'))
    <script>
        Swal.fire({
            title: "Heads up",
            text: @json(Session::get('info')),
            icon: "info",
            confirmButtonColor: '#107ec7'
        });
    </script>
@endif
@if(Session::has('error'))
    <script>
        Swal.fire({
            title: "Something went wrong",
            text: @json(Session::get('error')),
            icon: "error",
            confirmButtonColor: '#107ec7'
        });
    </script>
@endif
<script src="{{ asset('bootstrap.min.js') }}"></script>
</body>
</html>
