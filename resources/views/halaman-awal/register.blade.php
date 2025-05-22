<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - SkyBooking</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f8f9fa;
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 375px;
            margin: 0 auto;
            background: white;
            min-height: 100vh;
            position: relative;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            overflow: hidden;
        }

        /* Header dengan efek melengkung */
        .register-header {
            background: linear-gradient(135deg, #8B0000, #A0001C);
            color: white;
            padding: 60px 20px 30px;
            text-align: center;
            position: relative;
            border-bottom-right-radius: 30px;
            border-bottom-left-radius: 30px;
            margin-bottom: 20px;
        }

        .register-header::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .register-header::after {
            content: '';
            position: absolute;
            bottom: -30px;
            left: -30px;
            width: 100px;
            height: 100px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

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
            z-index: 2;
        }

        .register-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
            position: relative;
            z-index: 2;
        }

        .register-subtitle {
            font-size: 14px;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        /* Register Content */
        .register-content {
            padding: 0 20px 100px;
        }

        /* Register Form */
        .register-form {
            margin-top: 10px;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: #495057;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 15px 15px;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .form-control:focus {
            border-color: #8B0000;
            background: white;
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 0, 0, 0.1);
        }

        .input-icon {
            position: absolute;
            top: 40px;
            right: 15px;
            color: #6c757d;
        }

        .password-toggle {
            position: absolute;
            top: 40px;
            right: 15px;
            color: #6c757d;
            cursor: pointer;
        }

        /* Terms & Conditions */
        .terms {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 20px 0;
        }

        .terms-checkbox {
            margin-top: 3px;
            accent-color: #8B0000;
            cursor: pointer;
        }

        .terms-label {
            font-size: 13px;
            color: #495057;
            cursor: pointer;
        }

        .terms-label a {
            color: #8B0000;
            font-weight: 500;
            text-decoration: none;
        }

        /* Register Button */
        .register-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #8B0000, #A0001C);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(139,0,0,0.2);
            margin-top: 10px;
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 20px rgba(139,0,0,0.3);
        }

        .register-btn:disabled {
            background: #6c757d;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background: #e9ecef;
        }

        .divider-text {
            padding: 0 15px;
            font-size: 13px;
            color: #6c757d;
        }

        /* Social Register */
        .social-register {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: 1px solid #e9ecef;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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

        /* Login Link */
        .login-link {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #6c757d;
        }

        .login-link a {
            color: #8B0000;
            font-weight: 500;
            text-decoration: none;
        }

        /* Error Message */
        .error-message {
            color: #dc3545;
            font-size: 13px;
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
        .register-btn.loading {
            position: relative;
            color: transparent;
            pointer-events: none;
        }

        .register-btn.loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to { transform: translate(-50%, -50%) rotate(360deg); }
        }

        /* Password Strength */
        .password-strength {
            margin-top: 5px;
            height: 4px;
            background: #e9ecef;
            border-radius: 2px;
            overflow: hidden;
        }

        .strength-bar {
            height: 100%;
            width: 0%;
            background: #dc3545;
            transition: all 0.3s ease;
        }

        .strength-weak {
            background: #dc3545;
            width: 25%;
        }

        .strength-medium {
            background: #ffc107;
            width: 50%;
        }

        .strength-strong {
            background: #28a745;
            width: 75%;
        }

        .strength-very-strong {
            background: #28a745;
            width: 100%;
        }

        .strength-text {
            font-size: 12px;
            color: #6c757d;
            margin-top: 3px;
            text-align: right;
        }

        @media (max-width: 375px) {
            .container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header dengan efek melengkung -->
        <div class="register-header">
            <button class="back-btn" onclick="window.history.back()">
                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                </svg>
            </button>
            <h1 class="register-title">Buat Akun Baru</h1>
            <p class="register-subtitle">Daftar untuk mulai memesan penerbangan</p>
        </div>

        <!-- Register Content -->
        <div class="register-content">
            <!-- Register Form -->
            <form class="register-form" id="registerForm">
                <div class="form-group">
                    <label for="fullname" class="form-label">Nama Lengkap</label>
                    <input type="text" id="fullname" class="form-control" placeholder="Masukkan nama lengkap" required>
                    <div class="error-message">Nama lengkap harus diisi</div>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" id="email" class="form-control" placeholder="contoh@email.com" required>
                    <div class="error-message">Email tidak valid</div>
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input type="tel" id="phone" class="form-control" placeholder="081234567890" required>
                    <div class="error-message">Nomor telepon tidak valid</div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" id="password" class="form-control" placeholder="Buat kata sandi" required>
                    <span class="password-toggle" id="togglePassword">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                        </svg>
                    </span>
                    <div class="password-strength">
                        <div class="strength-bar" id="strengthBar"></div>
                    </div>
                    <div class="strength-text" id="strengthText">Kekuatan kata sandi</div>
                    <div class="error-message">Kata sandi harus minimal 8 karakter</div>
                </div>

                <div class="form-group">
                    <label for="confirmPassword" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Ulangi kata sandi" required>
                    <div class="error-message">Kata sandi tidak cocok</div>
                </div>

                <div class="terms">
                    <input type="checkbox" id="terms" class="terms-checkbox" required>
                    <label for="terms" class="terms-label">
                        Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> SkyBooking
                    </label>
                </div>

                <button type="submit" class="register-btn" id="registerBtn">Daftar Sekarang</button>

                <div class="divider">
                    <div class="divider-line"></div>
                    <div class="divider-text">atau</div>
                    <div class="divider-line"></div>
                </div>

                <div class="social-register">
                    <button type="button" class="social-btn google">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.545 10.239v3.821h5.445c-0.712 2.315-2.647 3.972-5.445 3.972-3.332 0-6.033-2.701-6.033-6.032s2.701-6.032 6.033-6.032c1.498 0 2.866 0.549 3.921 1.453l2.814-2.814c-1.784-1.664-4.177-2.664-6.735-2.664-5.522 0-10 4.477-10 10s4.478 10 10 10c8.396 0 10-7.524 10-10 0-0.67-0.069-1.325-0.189-1.955h-9.811z"/>
                        </svg>
                    </button>
                    <button type="button" class="social-btn facebook">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                        </svg>
                    </button>
                    <button type="button" class="social-btn apple">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                        </svg>
                    </button>
                </div>

                <div class="login-link">
                    Sudah punya akun? <a href="/login">Masuk disini</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');
        
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            confirmPassword.setAttribute('type', type);
            
            // Toggle icon
            this.innerHTML = type === 'password' ? 
                '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>' :
                '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>';
        });

        // Password Strength Checker
        password.addEventListener('input', function() {
            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');
            const strength = checkPasswordStrength(this.value);
            
            strengthBar.className = 'strength-bar';
            strengthBar.classList.add(strength.class);
            
            strengthText.textContent = strength.text;
            strengthText.style.color = strength.color;
        });

        function checkPasswordStrength(password) {
            // Check password strength
            const hasLower = /[a-z]/.test(password);
            const hasUpper = /[A-Z]/.test(password);
            const hasNumber = /\d/.test(password);
            const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(password);
            const length = password.length;
            
            let strength = 0;
            
            if (length > 0) strength += 1;
            if (length >= 8) strength += 1;
            if (hasLower && hasUpper) strength += 1;
            if (hasNumber) strength += 1;
            if (hasSpecial) strength += 1;
            
            switch(strength) {
                case 0:
                    return { class: '', text: 'Masukkan kata sandi', color: '#6c757d' };
                case 1:
                    return { class: 'strength-weak', text: 'Sangat lemah', color: '#dc3545' };
                case 2:
                    return { class: 'strength-weak', text: 'Lemah', color: '#dc3545' };
                case 3:
                    return { class: 'strength-medium', text: 'Sedang', color: '#ffc107' };
                case 4:
                    return { class: 'strength-strong', text: 'Kuat', color: '#28a745' };
                case 5:
                    return { class: 'strength-very-strong', text: 'Sangat kuat', color: '#28a745' };
                default:
                    return { class: '', text: 'Kekuatan kata sandi', color: '#6c757d' };
            }
        }

        // Form Validation
        const registerForm = document.getElementById('registerForm');
        const registerBtn = document.getElementById('registerBtn');
        
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate all fields
            const fullname = document.getElementById('fullname');
            const email = document.getElementById('email');
            const phone = document.getElementById('phone');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');
            const terms = document.getElementById('terms');
            
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phoneRegex = /^[0-9]{10,13}$/;
            
            let isValid = true;
            
            // Validate fullname
            if (fullname.value.trim() === '') {
                fullname.parentElement.classList.add('error');
                isValid = false;
            } else {
                fullname.parentElement.classList.remove('error');
            }
            
            // Validate email
            if (!emailRegex.test(email.value)) {
                email.parentElement.classList.add('error');
                isValid = false;
            } else {
                email.parentElement.classList.remove('error');
            }
            
            // Validate phone
            if (!phoneRegex.test(phone.value)) {
                phone.parentElement.classList.add('error');
                isValid = false;
            } else {
                phone.parentElement.classList.remove('error');
            }
            
            // Validate password
            if (password.value.length < 8) {
                password.parentElement.classList.add('error');
                isValid = false;
            } else {
                password.parentElement.classList.remove('error');
            }
            
            // Validate confirm password
            if (confirmPassword.value !== password.value) {
                confirmPassword.parentElement.classList.add('error');
                isValid = false;
            } else {
                confirmPassword.parentElement.classList.remove('error');
            }
            
            // Validate terms
            if (!terms.checked) {
                terms.parentElement.classList.add('error');
                isValid = false;
            } else {
                terms.parentElement.classList.remove('error');
            }
            
            // If all valid, simulate registration
            if (isValid) {
                registerBtn.classList.add('loading');
                registerBtn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    registerBtn.classList.remove('loading');
                    registerBtn.disabled = false;
                    
                    // Redirect to verification page after successful registration
                    window.location.href = '/login';
                }, 2000);
            }
        });

        // Social Register Handlers
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const provider = this.classList.contains('google') ? 'Google' : 
                                this.classList.contains('facebook') ? 'Facebook' : 'Apple';
                alert(`Daftar dengan ${provider} akan dimulai. Di implementasi nyata, ini akan mengarahkan ke penyedia OAuth.`);
            });
        });
    </script>
</body>
</html>