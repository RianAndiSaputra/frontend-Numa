<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SkyBooking</title>
    <style>
        :root {
            --primary-color: #8B0000;
            --secondary-color: #A0001C;
            --accent-color: #FF6B6B;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
            --bg-light: #f8f9fa;
            --white: #ffffff;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: var(--bg-light);
            min-height: 100vh;
            color: var(--text-dark);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            background: var(--white);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Header */
        .login-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 60px 20px 30px;
            position: relative;
            z-index: 10;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 24px;
            box-shadow: var(--shadow-md);
            text-align: center;
        }

        .login-header::after {
            content: '';
            position: absolute;
            bottom: -24px;
            left: 0;
            right: 0;
            height: 24px;
            background: var(--white);
            border-top-left-radius: 24px;
            border-top-right-radius: 24px;
            z-index: 1;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
            position: relative;
            z-index: 2;
            width: 100%;
            text-align: center;
        }
        .logo img {
            width: 160px;
            height: auto;
            object-fit: contain;
            display: block;
            margin: 0 auto;
        }

        .login-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 5px;
            position: relative;
            z-index: 2;
        }

        .login-subtitle {
            font-size: 14px;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        /* Back Button */
        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255,255,255,0.2);
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
            transition: var(--transition);
            z-index: 2;
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        /* Login Content */
        .login-content {
            padding: 30px 15px 15px;
            position: relative;
            z-index: 1;
            margin-top: -10px;
        }

        /* Login Form */
        .login-form {
            margin-top: 15px;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: var(--text-dark);
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            font-size: 14px;
            transition: var(--transition);
            background: var(--bg-light);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            background: var(--white);
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 0, 0, 0.1);
        }

        .input-icon {
            position: absolute;
            top: 38px;
            right: 15px;
            color: var(--text-light);
        }

        .password-toggle {
            position: absolute;
            top: 38px;
            right: 15px;
            color: var(--text-light);
            cursor: pointer;
        }

        /* Remember & Forgot */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember-checkbox {
            width: 16px;
            height: 16px;
            accent-color: var(--primary-color);
            cursor: pointer;
        }

        .remember-label {
            font-size: 13px;
            color: var(--text-dark);
            cursor: pointer;
        }

        .forgot-password {
            font-size: 13px;
            color: var(--primary-color);
            font-weight: 500;
            text-decoration: none;
        }

        /* Login Button */
        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border: none;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background: #e9ecef;
        }

        .divider-text {
            padding: 0 12px;
            font-size: 13px;
            color: var(--text-light);
        }

        /* Social Login */
        .social-login {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .social-btn {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--white);
            border: 1px solid #e9ecef;
            cursor: pointer;
            transition: var(--transition);
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .social-btn svg {
            width: 20px;
            height: 20px;
        }

        .social-btn.google {
            color: #DB4437;
        }

        .social-btn.facebook {
            color: #4267B2;
        }

        .social-btn.apple {
            color: #000000;
        }

        /* Register Link */
        .register-link {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: var(--text-light);
        }

        .register-link a {
            color: var(--primary-color);
            font-weight: 500;
            text-decoration: none;
        }

        /* Error Message */
        .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }

        .form-group.error .form-control {
            border-color: #dc3545;
        }

        .form-group.error .error-message {
            display: block;
        }

        /* Loading State */
        .login-btn.loading {
            position: relative;
            color: transparent;
            pointer-events: none;
        }

        .login-btn.loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 18px;
            height: 18px;
            border: 3px solid rgba(255,255,255,0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to { transform: translate(-50%, -50%) rotate(360deg); }
        }

        /* Biometric Login */
        .biometric-login {
            text-align: center;
            margin-top: 20px;
        }

        .biometric-btn {
            background: transparent;
            border: none;
            color: var(--primary-color);
            font-size: 13px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }

        .biometric-icon {
            width: 20px;
            height: 20px;
        }

        /* Responsive */
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
                margin: 0 auto;
                box-shadow: var(--shadow-lg);
                min-height: 100vh;
            }
            
            .login-content {
                padding: 30px 20px 20px;
            }
            
            .form-control {
                padding: 15px;
            }
            
            .login-btn {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="login-header">
            <button class="back-btn" onclick="window.history.back()">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                </svg>
            </button>
            <div class="logo">
                <img src="images/logo-numa.png" alt="SkyBooking Logo">
            </div>
            <h1 class="login-title">Selamat Datang</h1>
            <p class="login-subtitle">Masuk untuk memesan penerbangan Anda</p>
        </div>

        <!-- Login Content -->
        <div class="login-content">
            <!-- Login Form -->
            <form class="login-form" id="loginForm">
                <div class="form-group">
                    <label for="email" class="form-label">Email atau Nomor Telepon</label>
                    <input type="text" id="email" class="form-control" placeholder="contoh@email.com" required>
                    <svg class="input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                    </svg>
                    <div class="error-message">Email atau nomor telepon tidak valid</div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" id="password" class="form-control" placeholder="Masukkan kata sandi" required>
                    <svg class="input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    <span class="password-toggle" id="togglePassword">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                        </svg>
                    </span>
                    <div class="error-message">Kata sandi harus minimal 8 karakter</div>
                </div>

                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" class="remember-checkbox">
                        <label for="remember" class="remember-label">Ingat saya</label>
                    </div>
                    <a href="#" class="forgot-password">Lupa kata sandi?</a>
                </div>

                <button type="submit" class="login-btn" id="loginBtn">Masuk</button>

                <div class="biometric-login">
                    <button type="button" class="biometric-btn" id="biometricBtn">
                        <svg class="biometric-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 3c-2.8 0-5 2.2-5 5v3H5v11h14V11h-2V8c0-2.8-2.2-5-5-5zm0 1c2.2 0 4 1.8 4 4v3H8V8c0-2.2 1.8-4 4-4z"/>
                        </svg>
                        Masuk dengan Sidik Jari
                    </button>
                </div>

                <div class="divider">
                    <div class="divider-line"></div>
                    <div class="divider-text">atau</div>
                    <div class="divider-line"></div>
                </div>

                <div class="social-login">
                    <button type="button" class="social-btn google">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.545 10.239v3.821h5.445c-0.712 2.315-2.647 3.972-5.445 3.972-3.332 0-6.033-2.701-6.033-6.032s2.701-6.032 6.033-6.032c1.498 0 2.866 0.549 3.921 1.453l2.814-2.814c-1.784-1.664-4.177-2.664-6.735-2.664-5.522 0-10 4.477-10 10s4.478 10 10 10c8.396 0 10-7.524 10-10 0-0.67-0.069-1.325-0.189-1.955h-9.811z"/>
                        </svg>
                    </button>
                    <button type="button" class="social-btn facebook">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                        </svg>
                    </button>
                    <button type="button" class="social-btn apple">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                        </svg>
                    </button>
                </div>

                <div class="register-link">
                    Belum punya akun? <a href="/register">Daftar sekarang</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // Toggle icon
            this.innerHTML = type === 'password' ? 
                '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>' :
                '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>';
        });

        // Form Validation
        const loginForm = document.getElementById('loginForm');
        const loginBtn = document.getElementById('loginBtn');
        
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate email
            const email = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phoneRegex = /^[0-9]{10,13}$/;
            const isEmailValid = emailRegex.test(email.value) || phoneRegex.test(email.value);
            
            if (!isEmailValid) {
                email.parentElement.classList.add('error');
            } else {
                email.parentElement.classList.remove('error');
            }
            
            // Validate password
            const password = document.getElementById('password');
            const isPasswordValid = password.value.length >= 8;
            
            if (!isPasswordValid) {
                password.parentElement.classList.add('error');
            } else {
                password.parentElement.classList.remove('error');
            }
            
            // If all valid, simulate login
            if (isEmailValid && isPasswordValid) {
                loginBtn.classList.add('loading');
                loginBtn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    loginBtn.classList.remove('loading');
                    loginBtn.disabled = false;
                    
                    // Redirect to home page after successful login
                    window.location.href = '/home';
                }, 2000);
            }
        });

        // Biometric Login
        const biometricBtn = document.getElementById('biometricBtn');
        
        biometricBtn.addEventListener('click', function() {
            // In a real app, this would call the Web Authentication API
            alert('Autentikasi biometrik akan dimulai. Di implementasi nyata, ini akan memanggil Web Authentication API.');
        });

        // Social Login Handlers
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const provider = this.classList.contains('google') ? 'Google' : 
                                this.classList.contains('facebook') ? 'Facebook' : 'Apple';
                alert(`Login dengan ${provider} akan dimulai. Di implementasi nyata, ini akan mengarahkan ke penyedia OAuth.`);
            });
        });
    </script>
</body>
</html>