@extends('app')
@section('title', 'Sign in')
@section('body_class', 'login-body')

@section('styles')
    body.login-body { background: #f3f6fa; }
    .auth-shell { min-height: 100vh; display: flex; }
    .auth-brand {
        flex: 1 1 50%;
        position: relative;
        overflow: hidden;
        color: #fff;
        padding: 56px 64px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background:
            radial-gradient(circle at 15% 20%, rgba(255,255,255,.12) 0, rgba(255,255,255,0) 40%),
            radial-gradient(circle at 85% 80%, rgba(255,255,255,.10) 0, rgba(255,255,255,0) 45%),
            linear-gradient(140deg, var(--brand) 0%, var(--brand-dark) 55%, var(--brand-deep) 100%);
    }
    .auth-brand::after {
        content: "";
        position: absolute;
        right: -120px; bottom: -120px;
        width: 420px; height: 420px;
        border-radius: 50%;
        border: 60px solid rgba(255,255,255,.06);
    }
    .brand-mark { display: flex; align-items: center; gap: 14px; }
    .brand-mark img { width: 52px; height: 52px; border-radius: 12px; background: #fff; padding: 4px; }
    .brand-mark .name { font-size: 26px; font-weight: 700; letter-spacing: .5px; line-height: 1; }
    .brand-mark .sub { font-size: 12px; opacity: .8; letter-spacing: 1.5px; text-transform: uppercase; }
    .brand-copy h1 { font-size: 38px; font-weight: 700; line-height: 1.2; margin-bottom: 16px; color: #fff; }
    .brand-copy p { font-size: 16px; opacity: .85; max-width: 440px; }
    .brand-points { list-style: none; padding: 0; margin: 28px 0 0; }
    .brand-points li { display: flex; align-items: center; gap: 12px; margin-bottom: 14px; font-size: 15px; }
    .brand-points .ico {
        width: 34px; height: 34px; border-radius: 10px;
        display: inline-flex; align-items: center; justify-content: center;
        background: rgba(255,255,255,.15);
    }
    .brand-foot { font-size: 13px; opacity: .7; position: relative; z-index: 1; }

    .auth-panel {
        flex: 1 1 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 24px;
    }
    .auth-card {
        width: 100%;
        max-width: 420px;
        background: #fff;
        border-radius: 18px;
        padding: 40px 36px;
        box-shadow: 0 20px 50px rgba(16, 60, 100, .10), 0 2px 6px rgba(16, 60, 100, .06);
    }
    .auth-card h2 { font-size: 26px; font-weight: 700; margin: 0 0 6px; color: var(--ink); }
    .auth-card .lead-sm { color: var(--muted); font-size: 14px; margin-bottom: 28px; }
    .auth-card label { font-weight: 600; font-size: 13px; color: #3b4a5c; margin-bottom: 6px; }
    .input-icon { position: relative; }
    .input-icon > .fa {
        position: absolute; left: 14px; top: 50%; transform: translateY(-50%);
        color: #9aa8b8; font-size: 15px; pointer-events: none;
    }
    .input-icon .form-control {
        height: 48px;
        padding-left: 42px;
        border-radius: 10px;
        border: 1.5px solid #dfe6ee;
        font-size: 15px;
        transition: border-color .15s, box-shadow .15s;
    }
    .input-icon .form-control:focus {
        border-color: var(--brand);
        box-shadow: 0 0 0 4px rgba(16, 126, 199, .12);
    }
    .input-icon .form-control.is-invalid { border-color: #e5534b; }
    .toggle-pass {
        position: absolute; right: 6px; top: 50%; transform: translateY(-50%);
        border: 0; background: transparent; color: #8796a8;
        width: 38px; height: 38px; border-radius: 8px; cursor: pointer;
    }
    .toggle-pass:hover { background: #f1f5f9; color: var(--brand); }
    .input-icon .form-control.has-toggle { padding-right: 48px; }
    .field-error { color: #d63b33; font-size: 12.5px; margin-top: 6px; display: block; }
    .caps-warn { display: none; color: #b7791f; font-size: 12.5px; margin-top: 6px; }
    .btn-signin {
        height: 48px; border-radius: 10px; font-weight: 600; font-size: 15px;
        background: var(--brand); border: 0;
        box-shadow: 0 8px 18px rgba(16, 126, 199, .28);
        transition: transform .08s, box-shadow .15s, background .15s;
    }
    .btn-signin:hover, .btn-signin:focus { background: var(--brand-dark); }
    .btn-signin:active { transform: translateY(1px); }
    .btn-signin[disabled] { opacity: .8; }
    .auth-alert {
        display: flex; gap: 10px; align-items: flex-start;
        background: #fdecea; color: #a12a22; border: 1px solid #f7c6c2;
        border-radius: 10px; padding: 12px 14px; font-size: 14px; margin-bottom: 20px;
    }
    .remember { display: flex; align-items: center; gap: 8px; font-size: 13.5px; color: #4a5a6c; cursor: pointer; font-weight: 500; margin: 0; }
    .remember input { width: 16px; height: 16px; accent-color: var(--brand); }
    .auth-help { text-align: center; margin-top: 26px; font-size: 13px; color: var(--muted); }

    @media (max-width: 991.98px) {
        .auth-brand { display: none; }
        .auth-panel { background: linear-gradient(160deg, #e8f2fb 0%, #f3f6fa 60%); }
        .mobile-brand { display: flex !important; }
    }
    .mobile-brand { display: none; align-items: center; gap: 10px; margin-bottom: 24px; }
    .mobile-brand img { width: 40px; height: 40px; border-radius: 10px; }
    .mobile-brand span { font-weight: 700; font-size: 20px; color: var(--brand-dark); }
@endsection

@section('content')
    <div class="auth-shell">
        <aside class="auth-brand">
            <div class="brand-mark">
                <img src="{{ asset('assets/img/logo.png') }}" alt="CLMMRH logo">
                <div>
                    <div class="name">HBCR</div>
                    <div class="sub">Hospital-Based Cancer Registry</div>
                </div>
            </div>

            <div class="brand-copy animated fadeInUp">
                <h1>Cancer registry,<br>made simpler.</h1>
                <p>Record, follow up, and report on cancer patients in one secure workspace.</p>
                <ul class="brand-points">
                    <li><span class="ico"><i class="fa fa-list-alt"></i></span> Step-by-step patient record wizard</li>
                    <li><span class="ico"><i class="fa fa-bar-chart"></i></span> Live dashboard analytics</li>
                    <li><span class="ico"><i class="fa fa-lock"></i></span> Role-based access and activity logs</li>
                </ul>
            </div>

            <div class="brand-foot">&copy; {{ date('Y') }} CLMMRH. All rights reserved.</div>
        </aside>

        <main class="auth-panel">
            <div class="auth-card animated fadeInDown">
                <div class="mobile-brand">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="CLMMRH logo">
                    <span>HBCR</span>
                </div>

                <h2>Welcome back</h2>
                <p class="lead-sm">Sign in with your account to continue.</p>

                @error('error')
                    <div class="auth-alert" role="alert">
                        <i class="fa fa-exclamation-circle mt-1"></i>
                        <div>{{ $message }}</div>
                    </div>
                @enderror

                <form id="loginForm" method="post" action="{{ route('verify-auth') }}" novalidate>
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email">Email address</label>
                        <div class="input-icon">
                            <i class="fa fa-envelope-o"></i>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="form-control @error('email') is-invalid @enderror"
                                   placeholder="you@example.com" autocomplete="username" required autofocus>
                        </div>
                        @error('email')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <div class="input-icon">
                            <i class="fa fa-lock"></i>
                            <input type="password" id="password" name="password"
                                   class="form-control has-toggle @error('password') is-invalid @enderror"
                                   placeholder="Enter your password" autocomplete="current-password" required>
                            <button type="button" class="toggle-pass" id="togglePass" aria-label="Show password" title="Show password">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                        <span class="caps-warn" id="capsWarn"><i class="fa fa-warning"></i> Caps Lock is on</span>
                        @error('password')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <label class="remember" for="remember">
                            <input type="checkbox" id="remember" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                            Keep me signed in
                        </label>
                    </div>

                    <button type="submit" id="loginBtn" class="btn btn-primary btn-block btn-signin">
                        <span class="btn-label">Sign in</span>
                        <span class="btn-loading d-none"><i class="fa fa-circle-o-notch fa-spin mr-1"></i> Signing in...</span>
                    </button>
                </form>

                <div class="auth-help">
                    <i class="fa fa-info-circle"></i> Need an account or forgot your password? Contact your system administrator.
                </div>
            </div>
        </main>
    </div>
@endsection

@section('script')
    <script>
        (function () {
            const pass = document.getElementById('password');
            const toggle = document.getElementById('togglePass');
            const caps = document.getElementById('capsWarn');
            const form = document.getElementById('loginForm');
            const btn = document.getElementById('loginBtn');

            toggle.addEventListener('click', function () {
                const show = pass.type === 'password';
                pass.type = show ? 'text' : 'password';
                this.querySelector('i').className = show ? 'fa fa-eye-slash' : 'fa fa-eye';
                this.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
                pass.focus();
            });

            ['keydown', 'keyup'].forEach(function (evt) {
                pass.addEventListener(evt, function (e) {
                    if (e.getModifierState) {
                        caps.style.display = e.getModifierState('CapsLock') ? 'block' : 'none';
                    }
                });
            });

            form.addEventListener('submit', function (e) {
                let valid = true;
                form.querySelectorAll('input[required]').forEach(function (input) {
                    const ok = input.value.trim() !== '' && (input.type !== 'email' || /\S+@\S+\.\S+/.test(input.value));
                    input.classList.toggle('is-invalid', !ok);
                    if (!ok) valid = false;
                });
                if (!valid) {
                    e.preventDefault();
                    form.querySelector('.is-invalid').focus();
                    return;
                }
                btn.disabled = true;
                btn.querySelector('.btn-label').classList.add('d-none');
                btn.querySelector('.btn-loading').classList.remove('d-none');
            });

            form.querySelectorAll('input').forEach(function (input) {
                input.addEventListener('input', function () { this.classList.remove('is-invalid'); });
            });
        })();
    </script>
@endsection
