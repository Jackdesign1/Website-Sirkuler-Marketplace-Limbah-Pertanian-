<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sirkuler</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: #f8fafb;
            color: #1a202c;
        }

        /* Header/Navbar */
        .navbar {
            background: white;
            padding: 18px 0;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
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

        .logo-section {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .logo-svg {
            width: 45px;
            height: 45px;
        }

        .logo-text {
            font-size: 26px;
            font-weight: 800;
            color: #2d5016;
        }

        .nav-menu {
            display: flex;
            gap: 35px;
            align-items: center;
        }

        .nav-link {
            color: #4a5568;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: color 0.3s;
            position: relative;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #27ae60;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -18px;
            left: 0;
            right: 0;
            height: 3px;
            background: #27ae60;
            border-radius: 3px 3px 0 0;
        }

        .nav-actions {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .cart-icon {
            position: relative;
            cursor: pointer;
            font-size: 24px;
            color: #4a5568;
            transition: color 0.3s;
        }

        .cart-icon:hover {
            color: #27ae60;
        }

        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #27ae60;
            color: white;
            font-size: 11px;
            font-weight: 700;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .notification-bell {
            position: relative;
            cursor: pointer;
            font-size: 24px;
            color: #4a5568;
            transition: color 0.3s;
        }

        .notification-bell:hover {
            color: #27ae60;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #e53e3e;
            color: white;
            font-size: 11px;
            font-weight: 700;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-dropdown {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 8px 12px;
            border-radius: 12px;
            transition: background 0.3s;
        }

        .profile-dropdown:hover {
            background: #f7fafc;
        }

        .profile-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 16px;
        }

        .profile-info {
            display: flex;
            flex-direction: column;
        }

        .profile-name {
            font-size: 14px;
            font-weight: 700;
            color: #2d3748;
        }

        .profile-role {
            font-size: 12px;
            color: #718096;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            padding: 60px 30px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -200px;
            right: -100px;
        }

        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .hero-subtitle {
            font-size: 18px;
            opacity: 0.95;
            margin-bottom: 35px;
            max-width: 700px;
            line-height: 1.6;
        }

        .search-bar-hero {
            max-width: 700px;
            position: relative;
        }

        .search-bar-hero input {
            width: 100%;
            padding: 18px 60px 18px 25px;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .search-bar-hero input:focus {
            outline: none;
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.25);
        }

        .search-btn {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: #27ae60;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
        }

        .search-btn:hover {
            background: #229954;
        }

        /* Main Content */
        .main-content {
            max-width: 1400px;
            margin: -40px auto 40px;
            padding: 0 30px;
            position: relative;
            z-index: 10;
        }

        /* Two Main Cards */
        .main-cards {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 50px;
        }

        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(39, 174, 96, 0.2);
        }

        .feature-icon {
            font-size: 64px;
            margin-bottom: 20px;
        }

        .feature-title {
            font-size: 26px;
            font-weight: 800;
            color: #2d5016;
            margin-bottom: 12px;
        }

        .feature-subtitle {
            font-size: 14px;
            color: #718096;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .feature-btn {
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            align-self: flex-start;
            text-decoration: none;
            display: inline-block;
        }

        .feature-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(39, 174, 96, 0.3);
        }

        /* AI Insights Section */
        .ai-insights {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 28px;
            font-weight: 800;
            color: #2d5016;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .ai-badge {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: white;
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .insights-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .insight-card {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            padding: 30px;
            border-radius: 16px;
            border-left: 5px solid;
            transition: all 0.3s;
        }

        .insight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .insight-card.supply {
            border-left-color: #3b82f6;
        }

        .insight-card.price {
            border-left-color: #f59e0b;
        }

        .insight-card.trace {
            border-left-color: #10b981;
        }

        .insight-icon {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .insight-title {
            font-size: 16px;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 10px;
        }

        .insight-value {
            font-size: 28px;
            font-weight: 800;
            color: #27ae60;
            margin-bottom: 8px;
        }

        .insight-desc {
            font-size: 13px;
            color: #718096;
            line-height: 1.6;
        }

        .mini-chart {
            width: 100%;
            height: 60px;
            background: white;
            border-radius: 10px;
            margin-top: 15px;
            padding: 10px;
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
            gap: 3px;
        }

        .chart-bar {
            flex: 1;
            background: linear-gradient(to top, #3b82f6, #60a5fa);
            border-radius: 3px 3px 0 0;
            transition: all 0.3s;
        }

        .chart-bar:hover {
            opacity: 0.8;
        }

        /* Popular Products */
        .popular-products {
            margin-bottom: 50px;
        }

        .products-header {
            background: white;
            padding: 30px 40px;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            background: white;
            padding: 0 40px 40px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .product-card {
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: #27ae60;
        }

        .product-image {
            width: 100%;
            height: 180px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
        }

        .product-info {
            padding: 20px;
        }

        .product-name {
            font-size: 16px;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 8px;
        }

        .product-location {
            font-size: 13px;
            color: #718096;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .product-price {
            font-size: 20px;
            font-weight: 800;
            color: #27ae60;
            margin-bottom: 15px;
        }

        .product-btn {
            width: 100%;
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
        }

        .product-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(39, 174, 96, 0.3);
        }

        /* Footer */
        .footer {
            background: #1a202c;
            color: white;
            padding: 50px 30px 30px;
            margin-top: 60px;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 30px;
        }

        .footer-about h3 {
            font-size: 24px;
            font-weight: 800;
            color: #52d68a;
            margin-bottom: 15px;
        }

        .footer-about p {
            color: #cbd5e0;
            line-height: 1.7;
            font-size: 14px;
        }

        .footer-section h4 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #52d68a;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #cbd5e0;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #52d68a;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 25px;
            border-top: 1px solid #2d3748;
            color: #cbd5e0;
            font-size: 14px;
        }

        @media (max-width: 1200px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .insights-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 968px) {
            .main-cards {
                grid-template-columns: 1fr;
            }

            .products-grid {
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

            .products-grid {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }

            .hero-title {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo-section" onclick="window.location.href='#beranda'">
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
                <a href="#beranda" class="nav-link active">Beranda</a>
                <a href="#limbah-pertanian" class="nav-link">Limbah Pertanian</a>
                <a href="#produk-olahan" class="nav-link">Produk Olahan</a>
                <a href="#transaksi" class="nav-link">Transaksi</a>
                <a href="#akun" class="nav-link">Akun</a>
            </div>
            <div class="nav-actions">
                <div class="cart-icon" onclick="window.location.href='#transaksi'">
                    🛒
                    <span class="cart-badge" id="cartCount">0</span>
                </div>
                <div class="notification-bell">
                    🔔
                    <span class="notification-badge">3</span>
                </div>
                <div class="profile-dropdown">
                    <div class="profile-avatar">JD</div>
                    <div class="profile-info">
                        <div class="profile-name">John Doe</div>
                        <div class="profile-role">Industri</div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <h1 class="hero-title">Selamat Datang di Sirkuler</h1>
            <p class="hero-subtitle">
                Kelola, jual, dan beli limbah pertanian secara mudah dalam ekosistem digital yang terintegrasi dengan teknologi AI dan sistem traceability.
            </p>
            <div class="search-bar-hero">
                <input type="text" placeholder="Cari limbah atau produk olahan...">
                <button class="search-btn">🔍 Cari</button>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Two Main Cards -->
        <div class="main-cards">
            <div class="feature-card">
                <div>
                    <div class="feature-icon">🌾</div>
                    <h2 class="feature-title">Beli Limbah Pertanian</h2>
                    <p class="feature-subtitle">
                        Dari petani langsung • Data suplai real-time • Rekomendasi harga AI
                    </p>
                </div>
                <a href="#limbah-pertanian" class="feature-btn">Lihat Semua Limbah →</a>
            </div>

            <div class="feature-card">
                <div>
                    <div class="feature-icon">♻️</div>
                    <h2 class="feature-title">Beli Produk Olahan Limbah</h2>
                    <p class="feature-subtitle">
                        Pupuk organik, briket biomassa, pakan fermentasi, dan lainnya
                    </p>
                </div>
                <a href="#produk-olahan" class="feature-btn">Lihat Produk Olahan →</a>
            </div>
        </div>

        <!-- AI Insights Section -->
        <div class="ai-insights">
            <div class="section-header">
                <h2 class="section-title">
                    🤖 AI Insights Dashboard
                </h2>
                <span class="ai-badge">Powered by AI</span>
            </div>

            <div class="insights-grid">
                <!-- Supply Prediction -->
                <div class="insight-card supply">
                    <div class="insight-icon">📈</div>
                    <div class="insight-title">Prediksi Suplai 30 Hari</div>
                    <div class="insight-value">+12%</div>
                    <p class="insight-desc">
                        Perkiraan ketersediaan jerami padi meningkat 12% bulan ini berdasarkan data historis.
                    </p>
                    <div class="mini-chart">
                        <div class="chart-bar" style="height: 40%;"></div>
                        <div class="chart-bar" style="height: 55%;"></div>
                        <div class="chart-bar" style="height: 45%;"></div>
                        <div class="chart-bar" style="height: 70%;"></div>
                        <div class="chart-bar" style="height: 85%;"></div>
                        <div class="chart-bar" style="height: 90%;"></div>
                        <div class="chart-bar" style="height: 100%;"></div>
                    </div>
                </div>

                <!-- Price Recommendation -->
                <div class="insight-card price">
                    <div class="insight-icon">💰</div>
                    <div class="insight-title">Rekomendasi Harga (AI)</div>
                    <div class="insight-value">Rp 480/kg</div>
                    <p class="insight-desc">
                        Harga ideal jerami padi minggu ini berdasarkan analisis tren pasar dan demand.
                    </p>
                    <div style="margin-top: 15px; padding: 12px; background: white; border-radius: 10px; text-align: center; font-weight: 700; color: #f59e0b; font-size: 14px;">
                        📊 Tren: Stabil ±2%
                    </div>
                </div>

                <!-- Traceability Status -->
                <div class="insight-card trace">
                    <div class="insight-icon">🔍</div>
                    <div class="insight-title">Traceability Status</div>
                    <div class="insight-value">5 Batch</div>
                    <p class="insight-desc">
                        Lacak 5 batch limbah yang sedang dalam perjalanan dengan sistem tracking real-time.
                    </p>
                    <div style="margin-top: 15px; padding: 12px; background: white; border-radius: 10px; text-align: center; font-weight: 700; color: #10b981; font-size: 14px;">
                        ✓ Semua Terverifikasi
                    </div>
                </div>
            </div>
        </div>

        <!-- Limbah Pertanian Section -->
        <div class="popular-products">
            <div class="products-header">
                <div class="section-header">
                    <h2 class="section-title">🌾 Limbah Pertanian Tersedia</h2>
                    <a href="#limbah-pertanian" style="color: #27ae60; font-weight: 600; text-decoration: none;">Lihat Semua →</a>
                </div>
            </div>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">🌾</div>
                    <div class="product-info">
                        <h3 class="product-name">Jerami Padi Premium</h3>
                        <div class="product-location">📍 Karawang, Jawa Barat</div>
                        <div class="product-price">Rp 750.000 <span style="font-size: 14px; color: #718096;">/ton</span></div>
                        <button class="product-btn">Lihat Detail</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🌾</div>
                    <div class="product-info">
                        <h3 class="product-name">Sekam Padi Grade A</h3>
                        <div class="product-location">📍 Demak, Jawa Tengah</div>
                        <div class="product-price">Rp 450.000 <span style="font-size: 14px; color: #718096;">/ton</span></div>
                        <button class="product-btn">Lihat Detail</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🌽</div>
                    <div class="product-info">
                        <h3 class="product-name">Tongkol Jagung Organik</h3>
                        <div class="product-location">📍 Kediri, Jawa Timur</div>
                        <div class="product-price">Rp 600.000 <span style="font-size: 14px; color: #718096;">/ton</span></div>
                        <button class="product-btn">Lihat Detail</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🌿</div>
                    <div class="product-info">
                        <h3 class="product-name">Batang Singkong Premium</h3>
                        <div class="product-location">📍 Bogor, Jawa Barat</div>
                        <div class="product-price">Rp 520.000 <span style="font-size: 14px; color: #718096;">/ton</span></div>
                        <button class="product-btn">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Products -->
        <div class="popular-products">
            <div class="products-header">
                <div class="section-header">
                    <h2 class="section-title">🔥 Produk Olahan Populer</h2>
                    <a href="#produk-olahan" style="color: #27ae60; font-weight: 600; text-decoration: none;">Lihat Semua →</a>
                </div>
            </div>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">🌱</div>
                    <div class="product-info">
                        <h3 class="product-name">Kompos Organik</h3>
                        <div class="product-location">📍 Malang, Jawa Timur</div>
                        <div class="product-price">Rp 75.000 <span style="font-size: 14px; color: #718096;">/karung</span></div>
                        <button class="product-btn">Lihat Detail</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🔥</div>
                    <div class="product-info">
                        <h3 class="product-name">Briket Biomassa</h3>
                        <div class="product-location">📍 Lampung</div>
                        <div class="product-price">Rp 85.000 <span style="font-size: 14px; color: #718096;">/pack</span></div>
                        <button class="product-btn">Lihat Detail</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">💧</div>
                    <div class="product-info">
                        <h3 class="product-name">Pupuk Cair Organik</h3>
                        <div class="product-location">📍 Bandung, Jawa Barat</div>
                        <div class="product-price">Rp 45.000 <span style="font-size: 14px; color: #718096;">/liter</span></div>
                        <button class="product-btn">Lihat Detail</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🐄</div>
                    <div class="product-info">
                        <h3 class="product-name">Pakan Fermentasi Ternak</h3>
                        <div class="product-location">📍 Boyolali, Jawa Tengah</div>
                        <div class="product-price">Rp 180.000 <span style="font-size: 14px; color: #718096;">/sak</span></div>
                        <button class="product-btn">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                <h4>Tentang</h4>
                <ul class="footer-links">
                    <li><a href="#">Tentang Sirkuler</a></li>
                    <li><a href="#">Tim Kami</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Kontak</h4>
                <ul class="footer-links">
                    <li><a href="#">Email</a></li>
                    <li><a href="#">WhatsApp</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Legal</h4>
                <ul class="footer-links">
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            © 2025 Sirkuler. All rights reserved.
        </div>
    </footer>
</body>
</html>