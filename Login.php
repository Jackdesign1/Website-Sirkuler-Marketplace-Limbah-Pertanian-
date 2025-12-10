<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Sirkuler</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f9f5 0%, #e8f5e9 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-width: 1100px;
            width: 100%;
            background: white;
            border-radius: 25px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        /* Left Side - Branding */
        .login-branding {
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .login-branding::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -150px;
            right: -150px;
        }

        .login-branding::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            bottom: -100px;
            left: -100px;
        }

        .brand-logo {
            margin-bottom: 30px;
            z-index: 1;
        }

        .brand-logo svg {
            width: 200px;
            height: 180px;
        }

        .brand-title {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 15px;
            z-index: 1;
            text-align: center;
        }

        .brand-tagline {
            font-size: 16px;
            opacity: 0.95;
            text-align: center;
            margin-bottom: 30px;
            z-index: 1;
            line-height: 1.6;
        }

        .brand-features {
            list-style: none;
            z-index: 1;
            width: 100%;
        }

        .brand-features li {
            padding: 12px 0;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-features li::before {
            content: '✓';
            width: 28px;
            height: 28px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            flex-shrink: 0;
        }

        /* Right Side - Form */
        .login-form-section {
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #27ae60;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 30px;
            transition: gap 0.3s;
        }

        .back-link:hover {
            gap: 12px;
        }

        .form-header {
            margin-bottom: 35px;
        }

        .form-header h1 {
            font-size: 32px;
            font-weight: 800;
            color: #2d5016;
            margin-bottom: 10px;
        }

        .form-header p {
            color: #718096;
            font-size: 15px;
        }

        .form-header p a {
            color: #27ae60;
            text-decoration: none;
            font-weight: 600;
        }

        .form-header p a:hover {
            text-decoration: underline;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #2d3748;
        }

        .form-input {
            padding: 14px 18px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 15px;
            transition: all 0.3s;
            font-family: inherit;
        }

        .form-input:focus {
            outline: none;
            border-color: #27ae60;
            box-shadow: 0 0 0 4px rgba(39, 174, 96, 0.1);
        }

        .password-input-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            font-size: 20px;
            padding: 5px;
            color: #718096;
            transition: color 0.3s;
        }

        .toggle-password:hover {
            color: #27ae60;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: -10px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #27ae60;
        }

        .remember-me label {
            font-size: 14px;
            color: #4a5568;
            cursor: pointer;
        }

        .forgot-password {
            color: #27ae60;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: color 0.3s;
        }

        .forgot-password:hover {
            color: #229954;
            text-decoration: underline;
        }

        .btn-login {
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            color: white;
            padding: 16px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(39, 174, 96, 0.3);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 25px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e2e8f0;
        }

        .divider span {
            color: #718096;
            font-size: 14px;
            font-weight: 500;
        }

        .social-login {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .btn-social {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            background: white;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            color: #2d3748;
            transition: all 0.3s;
        }

        .btn-social:hover {
            border-color: #27ae60;
            background: #f7fafc;
        }

        .btn-social img {
            width: 20px;
            height: 20px;
        }

        .alert {
            padding: 14px 18px;
            border-radius: 12px;
            font-size: 14px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-error {
            background: #fee;
            color: #c53030;
            border: 1px solid #feb2b2;
        }

        .alert-success {
            background: #f0fdf4;
            color: #166534;
            border: 1px solid #86efac;
        }

        @media (max-width: 968px) {
            .login-container {
                grid-template-columns: 1fr;
            }

            .login-branding {
                display: none;
            }

            .login-form-section {
                padding: 40px 30px;
            }
        }

        @media (max-width: 480px) {
            .login-form-section {
                padding: 30px 20px;
            }

            .form-header h1 {
                font-size: 26px;
            }

            .social-login {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Left Side - Branding -->
        <div class="login-branding">
            <div class="brand-logo">
                <svg viewBox="0 0 300 250" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 90 80 Q 70 80, 70 100 Q 70 120, 90 120 L 210 120 Q 230 120, 230 140 Q 230 160, 210 160" 
                          fill="none" stroke="white" stroke-width="20" stroke-linecap="round"/>
                    <polygon points="85,75 90,65 95,75" fill="white"/>
                    <polygon points="205,165 210,175 215,165" fill="white"/>
                    <ellipse cx="135" cy="90" rx="10" ry="15" fill="rgba(255,255,255,0.8)" opacity="0.8"/>
                    <ellipse cx="165" cy="150" rx="10" ry="15" fill="rgba(255,255,255,0.7)" opacity="0.8"/>
                    <circle cx="150" cy="120" r="7" fill="#f39c12"/>
                    <circle cx="105" cy="100" r="5" fill="#f39c12" opacity="0.7"/>
                    <circle cx="195" cy="140" r="5" fill="#e67e22" opacity="0.7"/>
                </svg>
            </div>
            <h2 class="brand-title">SIRKULER</h2>
            <p class="brand-tagline">Agricultural Waste to Circular Economy</p>
            <ul class="brand-features">
                <li>Platform marketplace limbah pertanian terpercaya</li>
                <li>AI-powered supply chain prediction</li>
                <li>Full traceability dari hulu ke hilir</li>
                <li>Hubungkan petani dengan industri langsung</li>
                <li>Transaksi aman dan transparan</li>
            </ul>
        </div>

        <!-- Right Side - Form -->
        <div class="login-form-section">
            <a href="#" class="back-link">
                <span>←</span>
                <span>Kembali ke Beranda</span>
            </a>

            <div class="form-header">
                <h1>Selamat Datang Kembali! 👋</h1>
                <p>Belum punya akun? <a href="#register">Daftar sekarang</a></p>
            </div>

            <!-- Alert Example (hidden by default, shown via JS) -->
            <div class="alert alert-error" id="alertError" style="display: none;">
                <span>⚠️</span>
                <span>Email atau password salah. Silakan coba lagi.</span>
            </div>

            <form class="login-form" onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        class="form-input" 
                        placeholder="nama@email.com"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="password-input-wrapper">
                        <input 
                            type="password" 
                            id="password" 
                            class="form-input" 
                            placeholder="Masukkan password"
                            required
                        >
                        <button type="button" class="toggle-password" onclick="togglePassword()">
                            👁️
                        </button>
                    </div>
                </div>

                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Ingat saya</label>
                    </div>
                    <a href="#forgot-password" class="forgot-password">Lupa password?</a>
                </div>

                <button type="submit" class="btn-login">Masuk</button>
            </form>

            <div class="divider">
                <span>Atau masuk dengan</span>
            </div>

            <div class="social-login">
                <button class="btn-social" onclick="loginWithGoogle()">
                    <span>🔵</span>
                    <span>Google</span>
                </button>
                <button class="btn-social" onclick="loginWithFacebook()">
                    <span>📘</span>
                    <span>Facebook</span>
                </button>
            </div>
        </div>
    </div>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleBtn = document.querySelector('.toggle-password');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleBtn.textContent = '🙈';
        } else {
            passwordInput.type = 'password';
            toggleBtn.textContent = '👁️';
        }
    }

    function handleLogin(event) {
        event.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const remember = document.getElementById('remember').checked;

        const btnLogin = document.querySelector('.btn-login');
        btnLogin.textContent = 'Memproses...';
        btnLogin.disabled = true;

        // HILANGKAN ALERT ERROR DULU
        document.getElementById('alertError').style.display = 'none';

        setTimeout(() => {
            let success = false;

            // VALIDASI LOGIN
            if (
                (email === 'petani@sirkuler.com' && password === 'password123') ||
                (email === 'industri@sirkuler.com' && password === 'password123')
            ) {
                success = true;
            }

            if (success) {
                // REDIRECT FIXED
                window.location.href = 'Dashboard_Awal.php';
                return; // Stop di sini
            } else {
                // TAMPILKAN ALERT ERROR
                document.getElementById('alertError').style.display = 'flex';

                setTimeout(() => {
                    document.getElementById('alertError').style.display = 'none';
                }, 4000);

                // RESET BUTTON
                btnLogin.textContent = 'Masuk';
                btnLogin.disabled = false;
            }

        }, 1200);
    }

    function loginWithGoogle() {
        alert('Login dengan Google akan segera tersedia!');
    }

    function loginWithFacebook() {
        alert('Login dengan Facebook akan segera tersedia!');
    }
</script>
</body>
</html>