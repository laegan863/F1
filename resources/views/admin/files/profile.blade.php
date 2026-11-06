@extends('admin.app')
@section('content')
    <style>
        .pf-card { background: #fff; border-radius: 10px; box-shadow: 0 1px 4px rgba(0,0,0,.06); padding: 24px; margin-bottom: 20px; }
        .pf-card h4 { font-weight: 700; margin: 0 0 4px; font-size: 16px; }
        .pf-card .hint { color: #8a95a3; font-size: 13px; margin-bottom: 18px; }
        .pf-avatar { width: 84px; height: 84px; border-radius: 50%; background: linear-gradient(135deg, #1c84c6, #0b5d94); color: #fff; font-size: 30px; font-weight: 700; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; }
        .pf-meta { list-style: none; padding: 0; margin: 18px 0 0; text-align: left; }
        .pf-meta li { display: flex; justify-content: space-between; padding: 9px 0; border-top: 1px solid #f0f2f5; font-size: 13px; }
        .pf-meta li span:first-child { color: #8a95a3; }
        .pf-card label { font-weight: 600; font-size: 13px; color: #3b4a5c; }
        .pass-wrap { position: relative; }
        .pass-wrap .form-control { padding-right: 42px; }
        .pass-toggle { position: absolute; right: 4px; top: 50%; transform: translateY(-50%); border: 0; background: transparent; color: #8796a8; width: 34px; height: 34px; cursor: pointer; }
        .pass-toggle:hover { color: #1c84c6; }
        .strength { height: 6px; border-radius: 3px; background: #eef2f6; overflow: hidden; margin-top: 8px; }
        .strength > div { height: 100%; width: 0; transition: width .2s, background .2s; }
        .rules { list-style: none; padding: 0; margin: 8px 0 0; font-size: 12.5px; }
        .rules li { color: #8a95a3; margin-bottom: 2px; }
        .rules li.ok { color: #1ab394; }
        .rules li i { width: 14px; }
        .invalid-feedback { display: block; }
    </style>

    @php
        $initials = collect(preg_split('/\s+/', trim($user->name)))->filter()->take(2)->map(fn ($p) => mb_strtoupper(mb_substr($p, 0, 1)))->implode('');
        $profileErrors = $errors->getBag('profile');
        $passwordErrors = $errors->getBag('password');
    @endphp

    <div class="wrapper wrapper-content">
        <div class="row">
            {{-- ================= Account summary ================= --}}
            <div class="col-lg-4">
                <div class="pf-card text-center">
                    <div class="pf-avatar">{{ $initials ?: '?' }}</div>
                    <h3 class="font-weight-bold m-0">{{ $user->name }}</h3>
                    <div class="text-muted">{{ $user->email }}</div>
                    <div class="mt-2">
                        <span class="label {{ $user->role === 'admin' ? 'label-primary' : 'label-info' }}" style="padding:5px 12px">{{ ucfirst($user->role) }}</span>
                    </div>
                    <ul class="pf-meta">
                        <li><span>Member since</span><span>{{ optional($user->created_at)->format('M d, Y') ?? '—' }}</span></li>
                        <li><span>Last updated</span><span>{{ optional($user->updated_at)->diffForHumans() ?? '—' }}</span></li>
                    </ul>
                </div>

                <div class="pf-card">
                    <h4><i class="fa fa-history text-primary"></i> Recent sign-ins</h4>
                    <div class="hint">If you don't recognise a sign-in, change your password.</div>
                    @forelse($recentLogins as $log)
                        <div class="d-flex justify-content-between py-2" style="border-top:1px solid #f0f2f5;font-size:13px">
                            <span><i class="fa fa-sign-in text-muted"></i> {{ $log->created_at->format('M d, Y g:i A') }}</span>
                            <span class="text-muted">{{ $log->ip_address ?? '—' }}</span>
                        </div>
                    @empty
                        <div class="text-muted small">No sign-ins recorded yet.</div>
                    @endforelse
                </div>
            </div>

            <div class="col-lg-8">
                {{-- ================= Profile details ================= --}}
                <div class="pf-card">
                    <h4><i class="fa fa-user text-primary"></i> Account details</h4>
                    <div class="hint">Update your display name and the email address you sign in with.</div>

                    <form method="POST" action="{{ route('profile.update') }}" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Full name</label>
                                <input type="text" id="name" name="name" maxlength="255" required
                                       class="form-control {{ $profileErrors->has('name') ? 'is-invalid' : '' }}"
                                       value="{{ old('name', $user->name) }}">
                                @if($profileErrors->has('name'))<div class="invalid-feedback">{{ $profileErrors->first('name') }}</div>@endif
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">Email address</label>
                                <input type="email" id="email" name="email" maxlength="255" required autocomplete="username"
                                       class="form-control {{ $profileErrors->has('email') ? 'is-invalid' : '' }}"
                                       value="{{ old('email', $user->email) }}">
                                @if($profileErrors->has('email'))<div class="invalid-feedback">{{ $profileErrors->first('email') }}</div>@endif
                                <small class="form-text text-muted">You will use this email the next time you sign in.</small>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save details</button>
                        </div>
                    </form>
                </div>

                {{-- ================= Change password ================= --}}
                <div class="pf-card" id="change-password">
                    <h4><i class="fa fa-lock text-primary"></i> Change password</h4>
                    <div class="hint">Enter your current password, then choose a new one.</div>

                    <form method="POST" action="{{ route('profile.password') }}" id="passwordForm" novalidate>
                        @csrf
                        @method('PUT')
                        <input type="text" name="username" value="{{ $user->email }}" autocomplete="username" class="d-none" aria-hidden="true" tabindex="-1">

                        <div class="form-group">
                            <label for="current_password">Current password</label>
                            <div class="pass-wrap">
                                <input type="password" id="current_password" name="current_password" required autocomplete="current-password"
                                       class="form-control {{ $passwordErrors->has('current_password') ? 'is-invalid' : '' }}">
                                <button type="button" class="pass-toggle" data-target="current_password" aria-label="Show password"><i class="fa fa-eye"></i></button>
                            </div>
                            @if($passwordErrors->has('current_password'))<div class="invalid-feedback">{{ $passwordErrors->first('current_password') }}</div>@endif
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="password">New password</label>
                                <div class="pass-wrap">
                                    <input type="password" id="password" name="password" required autocomplete="new-password"
                                           class="form-control {{ $passwordErrors->has('password') ? 'is-invalid' : '' }}">
                                    <button type="button" class="pass-toggle" data-target="password" aria-label="Show password"><i class="fa fa-eye"></i></button>
                                </div>
                                <div class="strength"><div id="strengthBar"></div></div>
                                <ul class="rules" id="rules">
                                    <li data-rule="len"><i class="fa fa-circle-o"></i> At least 8 characters</li>
                                    <li data-rule="letter"><i class="fa fa-circle-o"></i> Contains a letter</li>
                                    <li data-rule="number"><i class="fa fa-circle-o"></i> Contains a number</li>
                                </ul>
                                @if($passwordErrors->has('password'))
                                    @foreach($passwordErrors->get('password') as $msg)
                                        <div class="invalid-feedback">{{ $msg }}</div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="password_confirmation">Confirm new password</label>
                                <div class="pass-wrap">
                                    <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" class="form-control">
                                    <button type="button" class="pass-toggle" data-target="password_confirmation" aria-label="Show password"><i class="fa fa-eye"></i></button>
                                </div>
                                <small class="form-text" id="matchHint"></small>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary" id="passwordBtn"><i class="fa fa-key"></i> Change password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.pass-toggle').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const input = document.getElementById(this.dataset.target);
                    const show = input.type === 'password';
                    input.type = show ? 'text' : 'password';
                    this.querySelector('i').className = show ? 'fa fa-eye-slash' : 'fa fa-eye';
                    this.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
                });
            });

            const pass = document.getElementById('password');
            const confirm = document.getElementById('password_confirmation');
            const bar = document.getElementById('strengthBar');
            const matchHint = document.getElementById('matchHint');
            const checks = {
                len: v => v.length >= 8,
                letter: v => /[A-Za-z]/.test(v),
                number: v => /\d/.test(v),
            };

            function update() {
                const v = pass.value;
                let score = 0;
                Object.entries(checks).forEach(([rule, fn]) => {
                    const ok = fn(v);
                    if (ok) score++;
                    const li = document.querySelector(`#rules [data-rule="${rule}"]`);
                    li.classList.toggle('ok', ok);
                    li.querySelector('i').className = ok ? 'fa fa-check-circle' : 'fa fa-circle-o';
                });
                if (v.length >= 12 && /[^A-Za-z0-9]/.test(v)) score++;
                const colors = ['#ed5565', '#ed5565', '#f8ac59', '#1ab394', '#1a7f5f'];
                bar.style.width = v ? (score / 4 * 100) + '%' : '0';
                bar.style.background = colors[score];

                if (confirm.value) {
                    const same = confirm.value === v;
                    matchHint.textContent = same ? 'Passwords match' : 'Passwords do not match';
                    matchHint.className = 'form-text ' + (same ? 'text-navy' : 'text-danger');
                } else {
                    matchHint.textContent = '';
                }
            }
            pass.addEventListener('input', update);
            confirm.addEventListener('input', update);

            document.getElementById('passwordForm').addEventListener('submit', function (e) {
                const allOk = Object.values(checks).every(fn => fn(pass.value));
                if (!document.getElementById('current_password').value || !allOk || pass.value !== confirm.value) {
                    e.preventDefault();
                    Swal.fire({ icon: 'warning', title: 'Check the password fields', text: 'Enter your current password and a new password that meets the rules and matches the confirmation.' });
                    return;
                }
                const b = document.getElementById('passwordBtn');
                b.disabled = true;
                b.innerHTML = '<i class="fa fa-circle-o-notch fa-spin"></i> Saving...';
            });

            @if($passwordErrors->any())
                document.getElementById('change-password').scrollIntoView({ behavior: 'smooth' });
            @endif
        });
    </script>
@endsection
