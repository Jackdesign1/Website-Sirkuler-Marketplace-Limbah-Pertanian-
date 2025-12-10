<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirkuler - Agricultural Waste to Circular Economy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #1a202c;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .navbar-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-svg {
            width: 50px;
            height: 50px;
        }

        .logo-text {
            font-size: 28px;
            font-weight: 800;
            color: #2d5016;
        }

        .nav-menu {
            display: flex;
            gap: 35px;
            align-items: center;
        }

        .nav-link {
            color: #2d3748;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #27ae60;
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            text-decoration: none;
            display: inline-block;
        }

        .btn-login {
            background: white;
            color: #27ae60;
            border: 2px solid #27ae60;
        }

        .btn-login:hover {
            background: #27ae60;
            color: white;
        }

        .btn-register {
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            color: white;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(39, 174, 96, 0.3);
        }

        /* Hero Section */
        .hero {
            margin-top: 90px;
            padding: 80px 30px;
            background: linear-gradient(135deg, #f5f9f5 0%, #e8f5e9 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(39, 174, 96, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            top: -200px;
            right: -200px;
        }

        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 56px;
            font-weight: 800;
            color: #2d5016;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .hero-highlight {
            color: #27ae60;
        }

        .hero-content p {
            font-size: 20px;
            color: #4a5568;
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn-hero-primary {
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            color: white;
            padding: 18px 40px;
            font-size: 18px;
        }

        .btn-hero-secondary {
            background: white;
            color: #27ae60;
            border: 2px solid #27ae60;
            padding: 18px 40px;
            font-size: 18px;
        }

        .hero-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-visual {
            width: 100%;
            max-width: 500px;
            height: 450px;
            background: white;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .visual-icon {
            font-size: 120px;
            margin-bottom: 20px;
        }

        .visual-text {
            text-align: center;
            color: #2d5016;
            font-size: 18px;
            font-weight: 600;
        }

        /* Stats Section */
        .stats {
            padding: 80px 30px;
            background: white;
        }

        .stats-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
        }

        .stat-card {
            text-align: center;
            padding: 30px;
            background: linear-gradient(135deg, #f5f9f5 0%, #e8f5e9 100%);
            border-radius: 20px;
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .stat-number {
            font-size: 42px;
            font-weight: 800;
            color: #27ae60;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 16px;
            color: #4a5568;
            font-weight: 600;
        }

        /* Features Section */
        .features {
            padding: 100px 30px;
            background: linear-gradient(135deg, #f5f9f5 0%, #e8f5e9 100%);
        }

        .features-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 42px;
            font-weight: 800;
            color: #2d5016;
            margin-bottom: 20px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 18px;
            color: #718096;
            margin-bottom: 60px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .feature-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(39, 174, 96, 0.2);
        }

        .feature-icon {
            font-size: 56px;
            margin-bottom: 20px;
        }

        .feature-title {
            font-size: 22px;
            font-weight: 700;
            color: #2d5016;
            margin-bottom: 15px;
        }

        .feature-desc {
            font-size: 15px;
            color: #4a5568;
            line-height: 1.7;
        }

        /* How It Works */
        .how-it-works {
            padding: 100px 30px;
            background: white;
        }

        .steps-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-top: 60px;
        }

        .step-card {
            text-align: center;
            padding: 30px;
            position: relative;
        }

        .step-number {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: 800;
            margin: 0 auto 25px;
            box-shadow: 0 8px 20px rgba(39, 174, 96, 0.3);
        }

        .step-title {
            font-size: 20px;
            font-weight: 700;
            color: #2d5016;
            margin-bottom: 12px;
        }

        .step-desc {
            font-size: 14px;
            color: #718096;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta {
            padding: 100px 30px;
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            text-align: center;
        }

        .cta-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .cta h2 {
            font-size: 48px;
            font-weight: 800;
            color: white;
            margin-bottom: 25px;
        }

        .cta p {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 40px;
            line-height: 1.7;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-cta-white {
            background: white;
            color: #27ae60;
            padding: 18px 45px;
            font-size: 18px;
        }

        .btn-cta-outline {
            background: transparent;
            color: white;
            border: 2px solid white;
            padding: 18px 45px;
            font-size: 18px;
        }

        .btn-cta-outline:hover {
            background: white;
            color: #27ae60;
        }

        /* Footer */
        .footer {
            background: #1a202c;
            color: white;
            padding: 60px 30px 30px;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 40px;
        }

        .footer-about h3 {
            font-size: 28px;
            font-weight: 800;
            color: #52d68a;
            margin-bottom: 20px;
        }

        .footer-about p {
            color: #cbd5e0;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .footer-section h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #52d68a;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #cbd5e0;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #52d68a;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #2d3748;
            color: #cbd5e0;
        }

        @media (max-width: 1024px) {
            .hero-container {
                grid-template-columns: 1fr;
            }

            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .steps-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-container {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero-content h1 {
                font-size: 36px;
            }

            .stats-container {
                grid-template-columns: 1fr;
            }

            .steps-grid {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <svg class="logo-svg" viewBox="0 0 300 250" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 90 80 Q 70 80, 70 100 Q 70 120, 90 120 L 210 120 Q 230 120, 230 140 Q 230 160, 210 160" 
                          fill="none" stroke="#27ae60" stroke-width="20" stroke-linecap="round"/>
                    <polygon points="85,75 90,65 95,75" fill="#27ae60"/>
                    <polygon points="205,165 210,175 215,165" fill="#27ae60"/>
                    <ellipse cx="135" cy="90" rx="10" ry="15" fill="#52d68a" opacity="0.8"/>
                    <ellipse cx="165" cy="150" rx="10" ry="15" fill="#34c471" opacity="0.8"/>
                    <circle cx="150" cy="120" r="7" fill="#f39c12"/>
                    <circle cx="105" cy="100" r="5" fill="#f39c12" opacity="0.7"/>
                    <circle cx="195" cy="140" r="5" fill="#e67e22" opacity="0.7"/>
                </svg>
                <span class="logo-text">SIRKULER</span>
            </div>
            <div class="nav-menu">
                <a href="#features" class="nav-link">Fitur</a>
                <a href="#how-it-works" class="nav-link">Cara Kerja</a>
                <a href="#about" class="nav-link">Tentang</a>
                <a href="#contact" class="nav-link">Kontak</a>
            </div>
            <div class="nav-buttons">
                <a href="Login.php" class="btn btn-login">Masuk</a>
                <a href="#register" class="btn btn-register">Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1>
                    Transformasi <span class="hero-highlight">Limbah Pertanian</span> Menjadi Ekonomi Sirkular
                </h1>
                <p>
                    Platform digital yang menghubungkan petani dengan industri, mengubah limbah pertanian menjadi nilai ekonomi dengan teknologi AI dan sistem traceability yang transparan.
                </p>
                <div class="hero-buttons">
                    <a href="#register" class="btn btn-hero-primary">Mulai Sekarang</a>
                    <a href="#how-it-works" class="btn btn-hero-secondary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-visual">
                    <div class="visual-icon">🌾♻️</div>
                    <div class="visual-text">
                        196.76 Juta Ton Limbah Pertanian<br>
                        Siap Dimanfaatkan!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">👨‍🌾</div>
                <div class="stat-number">5,000+</div>
                <div class="stat-label">Petani Terdaftar</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🏭</div>
                <div class="stat-number">200+</div>
                <div class="stat-label">Industri Partner</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">📦</div>
                <div class="stat-number">50K+</div>
                <div class="stat-label">Ton Limbah Tersalurkan</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">💰</div>
                <div class="stat-number">15M+</div>
                <div class="stat-label">Nilai Transaksi (Rp)</div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="features-container">
            <h2 class="section-title">Fitur Unggulan Sirkuler</h2>
            <p class="section-subtitle">
                Solusi digital lengkap untuk mengelola distribusi limbah pertanian secara modern dan terukur
            </p>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🤖</div>
                    <h3 class="feature-title">AI Prediksi Supply Chain</h3>
                    <p class="feature-desc">
                        Teknologi AI untuk memprediksi ketersediaan pasokan, demand pasar, dan rekomendasi harga optimal
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔍</div>
                    <h3 class="feature-title">Full Traceability</h3>
                    <p class="feature-desc">
                        Lacak asal dan kualitas limbah dari hulu ke hilir dengan sistem tracking yang transparan
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✓</div>
                    <h3 class="feature-title">Standarisasi Kualitas</h3>
                    <p class="feature-desc">
                        Sistem grading dan sertifikasi untuk memastikan kualitas produk sesuai standar industri
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💳</div>
                    <h3 class="feature-title">Pembayaran Aman</h3>
                    <p class="feature-desc">
                        Sistem pembayaran digital yang aman dan mudah dengan berbagai metode pembayaran
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🚚</div>
                    <h3 class="feature-title">Manajemen Logistik</h3>
                    <p class="feature-desc">
                        Koordinasi pengiriman dan distribusi limbah dengan tracking real-time
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3 class="feature-title">Dashboard Analytics</h3>
                    <p class="feature-desc">
                        Visualisasi data supply-demand, riwayat transaksi, dan insight bisnis yang actionable
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works" id="how-it-works">
        <div class="steps-container">
            <h2 class="section-title">Cara Kerja Sirkuler</h2>
            <p class="section-subtitle">
                Proses sederhana untuk mengubah limbah pertanian menjadi nilai ekonomi
            </p>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3 class="step-title">Daftar & Verifikasi</h3>
                    <p class="step-desc">Petani dan industri mendaftar sesuai role mereka dan melakukan verifikasi akun</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3 class="step-title">Input Produk</h3>
                    <p class="step-desc">Petani menambahkan limbah dengan spesifikasi lengkap, AI akan memberikan prediksi harga</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Matching & Transaksi</h3>
                    <p class="step-desc">Industri menemukan limbah sesuai kebutuhan dengan sistem rekomendasi AI</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h3 class="step-title">Pengiriman & Tracking</h3>
                    <p class="step-desc">Koordinasi logistik dengan tracking real-time hingga produk sampai tujuan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="cta-container">
            <h2>Siap Bergabung dengan Ekonomi Sirkular?</h2>
            <p>
                Bergabunglah dengan ribuan petani dan industri yang sudah merasakan manfaat dari Sirkuler. Transformasi limbah menjadi nilai ekonomi dimulai dari sini.
            </p>
            <div class="cta-buttons">
                <a href="#register" class="btn btn-cta-white">Daftar Sebagai Petani</a>
                <a href="#register" class="btn btn-cta-outline">Daftar Sebagai Industri</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-about">
                <h3>SIRKULER</h3>
                <p>
                    Platform digital yang mengubah limbah pertanian menjadi ekonomi sirkular dengan teknologi AI dan sistem traceability yang transparan.
                </p>
            </div>
            <div class="footer-section">
                <h4>Produk</h4>
                <ul class="footer-links">
                    <li><a href="#">Untuk Petani</a></li>
                    <li><a href="#">Untuk Industri</a></li>
                    <li><a href="#">Fitur</a></li>
                    <li><a href="#">Harga</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Perusahaan</h4>
                <ul class="footer-links">
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Dukungan</h4>
                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Panduan</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>
                    <li><a href="#">Privasi</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Sirkuler. All rights reserved. Tech for Impact 🌱</p>
        </div>
    </footer>
</body>
</html>