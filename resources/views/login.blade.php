@extends('layouts.main')

@section('content')
<section class="login-section">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 90vh;">
            <div class="col-md-5 col-lg-4">
                
                <!-- Login Card -->
                <div class="login-card">
                    
                    <!-- Header -->
                    <div class="login-header">
                        <h1 class="login-title">Masuk</h1>
                        <p class="login-subtitle">Akses sistem informasi akademik</p>
                    </div>

                    <!-- Error Message -->
                    @if($errors->any())
                        <div class="alert-error">
                            <div class="alert-icon">
                                <i class="bi bi-exclamation-circle-fill"></i>
                            </div>
                            <div class="alert-content">
                                <h5 class="alert-title">Login Gagal</h5>
                                @foreach($errors->all() as $error)
                                    <p class="alert-message">{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Form -->
                    <form method="POST" action="{{ route('login.attempt') }}" class="login-form">
                        @csrf
                        
                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-wrapper">
                                <i class="bi bi-envelope-fill"></i>
                                <input 
                                    type="email" 
                                    class="form-input" 
                                    id="email" 
                                    name="email" 
                                    placeholder="Masukkan email Anda"
                                    value="{{ old('email') }}" 
                                    required
                                >
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-wrapper">
                                <i class="bi bi-lock-fill"></i>
                                <input 
                                    type="password" 
                                    class="form-input" 
                                    id="password" 
                                    name="password" 
                                    placeholder="Masukkan password Anda"
                                    required
                                >
                                <button class="toggle-password" type="button" id="togglePassword">
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check">
                            <input 
                                type="checkbox" 
                                class="form-check-input" 
                                id="remember" 
                                name="remember"
                            >
                            <label class="form-check-label" for="remember">
                                Ingat saya
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn-login">
                            <span>Masuk</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>

                    <!-- Divider -->
                    <div class="divider">
                        <span>Demo Credentials</span>
                    </div>

                    <!-- Demo Credentials -->
                    <div class="credentials-box">
                        <div class="credential-item">
                            <span class="credential-label">Email:</span>
                            <code class="credential-value">admin@example.com</code>
                        </div>
                        <div class="credential-item">
                            <span class="credential-label">Password:</span>
                            <code class="credential-value">password123</code>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordInput = document.getElementById('password');
    const toggleBtn = this;
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleBtn.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';
    } else {
        passwordInput.type = 'password';
        toggleBtn.innerHTML = '<i class="bi bi-eye-fill"></i>';
    }
});
</script>

<style>
    .login-section {
        background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
        min-height: 100vh;
    }

    /* Login Card */
    .login-card {
        background: #ffffff;
        border-radius: 20px;
        border: 1px solid rgba(229, 231, 235, 0.3);
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.08);
        padding: 2.5rem 2rem;
        transition: all 0.3s ease;
    }

    .login-card:hover {
        box-shadow: 0 20px 70px rgba(37, 99, 235, 0.12);
    }

    /* Header */
    .login-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .login-title {
        font-size: 2rem;
        font-weight: 800;
        color: #1f2937;
        margin-bottom: 0.5rem;
        letter-spacing: -0.5px;
    }

    .login-subtitle {
        font-size: 0.95rem;
        color: #6b7280;
    }

    /* Alert Error */
    .alert-error {
        display: flex;
        gap: 1rem;
        padding: 1rem;
        background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(239, 68, 68, 0.05));
        border: 1.5px solid #ef4444;
        border-radius: 12px;
        margin-bottom: 1.5rem;
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .alert-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: #fee2e2;
        border-radius: 8px;
        color: #ef4444;
        flex-shrink: 0;
        font-size: 1.2rem;
    }

    .alert-content {
        flex: 1;
    }

    .alert-title {
        font-weight: 700;
        color: #dc2626;
        margin-bottom: 0.25rem;
        font-size: 0.95rem;
    }

    .alert-message {
        font-size: 0.85rem;
        color: #b91c1c;
        margin: 0;
    }

    /* Form */
    .login-form {
        margin-bottom: 1.5rem;
    }

    .form-group {
        margin-bottom: 1.25rem;
    }

    .form-label {
        display: block;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 0.625rem;
        font-size: 0.95rem;
        letter-spacing: -0.2px;
    }

    .input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-wrapper i {
        position: absolute;
        left: 1rem;
        color: #2563eb;
        font-size: 1.1rem;
        pointer-events: none;
    }

    .form-input {
        width: 100%;
        padding: 0.95rem 1rem 0.95rem 2.75rem;
        border: 1.5px solid #e5e7eb;
        border-radius: 12px;
        font-size: 0.95rem;
        color: #1f2937;
        background: #f9fafb;
        transition: all 0.2s ease;
        font-family: inherit;
    }

    .form-input::placeholder {
        color: #a1a5af;
    }

    .form-input:focus {
        outline: none;
        background: #ffffff;
        border-color: #2563eb;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
    }

    .toggle-password {
        position: absolute;
        right: 1rem;
        background: none;
        border: none;
        color: #6b7280;
        cursor: pointer;
        padding: 0.5rem;
        transition: color 0.2s ease;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .toggle-password:hover {
        color: #2563eb;
    }

    /* Form Check */
    .form-check {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }

    .form-check-input {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: #2563eb;
    }

    .form-check-label {
        font-size: 0.95rem;
        color: #6b7280;
        cursor: pointer;
        user-select: none;
    }

    /* Login Button */
    .btn-login {
        width: 100%;
        padding: 1rem;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 0.95rem;
        letter-spacing: 0.3px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
    }

    .btn-login:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
    }

    .btn-login:active {
        transform: translateY(-1px);
    }

    /* Divider */
    .divider {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin: 1.5rem 0;
        font-size: 0.85rem;
        color: #9ca3af;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: #e5e7eb;
    }

    /* Credentials Box */
    .credentials-box {
        background: linear-gradient(135deg, #f8f9fa, #f3f4f6);
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 1rem;
    }

    .credential-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 0;
        font-size: 0.9rem;
    }

    .credential-item:not(:last-child) {
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #d1d5db;
    }

    .credential-label {
        font-weight: 700;
        color: #6b7280;
    }

    .credential-value {
        background: #ffffff;
        padding: 0.5rem 0.75rem;
        border-radius: 6px;
        color: #2563eb;
        font-family: 'Courier New', monospace;
        font-weight: 600;
        font-size: 0.85rem;
        border: 1px solid #dbeafe;
    }

    /* Responsive */
    @media (max-width: 480px) {
        .login-card {
            padding: 2rem 1.5rem;
        }

        .login-title {
            font-size: 1.75rem;
        }

        .credentials-box {
            font-size: 0.85rem;
        }
    }
</style>
@endsection