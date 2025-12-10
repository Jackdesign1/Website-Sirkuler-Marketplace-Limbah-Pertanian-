<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jerami Padi Berkualitas Premium - Sirkuler</title>
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

        /* Header */
        .header {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            cursor: pointer;
        }

        .breadcrumb {
            flex: 1;
            margin-left: 40px;
            font-size: 14px;
            color: #718096;
        }

        .breadcrumb a {
            color: #2ecc71;
            text-decoration: none;
            font-weight: 600;
        }

        .header-actions {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 10px 24px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
        }

        /* Main Container */
        .main-container {
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 30px;
        }

        .product-detail-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }

        .product-image-section {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        }

        .main-product-image {
            width: 100%;
            height: 450px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 120px;
            margin-bottom: 20px;
            position: relative;
        }

        .quality-badge-large {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #2ecc71;
            color: white;
            padding: 12px 24px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .verified-badge-large {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #3b82f6;
            color: white;
            padding: 12px 20px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
        }

        .ai-score-badge {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 800;
            box-shadow: 0 8px 20px rgba(251, 191, 36, 0.4);
        }

        .thumbnail-gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .thumbnail {
            height: 100px;
            background: #f7fafc;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .thumbnail:hover {
            border-color: #2ecc71;
            transform: scale(1.05);
        }

        .product-info-section {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        }

        .product-title {
            font-size: 32px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 15px;
        }

        .product-meta {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #718096;
        }

        .seller-info {
            background: #f7fafc;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .seller-avatar {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        .seller-details h4 {
            font-size: 16px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 5px;
        }

        .seller-details p {
            font-size: 13px;
            color: #718096;
        }

        .seller-rating {
            color: #f59e0b;
            font-weight: 600;
        }

        /* AI Price Section */
        .ai-price-section {
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            border: 2px solid #10b981;
        }

        .ai-badge {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: white;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 12px;
        }

        .price-comparison {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 15px;
        }

        .price-box {
            background: white;
            padding: 15px;
            border-radius: 10px;
        }

        .price-label {
            font-size: 12px;
            color: #065f46;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .price-value {
            font-size: 24px;
            font-weight: 900;
            color: #059669;
        }

        .price-current {
            font-size: 36px;
        }

        .price-trend {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 12px;
            margin-top: 5px;
        }

        .trend-up {
            color: #dc2626;
        }

        .trend-stable {
            color: #059669;
        }

        .ai-recommendation {
            background: white;
            padding: 15px;
            border-radius: 10px;
            font-size: 13px;
            color: #065f46;
            font-weight: 600;
        }

        /* AI Insights Grid */
        .ai-insights-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 25px;
        }

        .ai-insight-card {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            padding: 20px;
            border-radius: 12px;
            border: 2px solid #f59e0b;
        }

        .insight-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .insight-icon {
            font-size: 24px;
        }

        .insight-title {
            font-size: 14px;
            font-weight: 700;
            color: #92400e;
        }

        .insight-value {
            font-size: 28px;
            font-weight: 900;
            color: #92400e;
            margin-bottom: 5px;
        }

        .insight-desc {
            font-size: 12px;
            color: #78350f;
            line-height: 1.5;
        }

        .supply-chart {
            background: white;
            padding: 10px;
            border-radius: 8px;
            margin-top: 10px;
            height: 50px;
            display: flex;
            align-items: flex-end;
            gap: 3px;
        }

        .chart-bar {
            flex: 1;
            background: linear-gradient(to top, #f59e0b, #fbbf24);
            border-radius: 3px 3px 0 0;
            transition: all 0.3s;
        }

        .chart-bar:hover {
            opacity: 0.8;
        }

        .quantity-selector {
            margin-bottom: 25px;
        }

        .quantity-label {
            font-size: 14px;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 10px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .quantity-btn {
            width: 40px;
            height: 40px;
            border: 2px solid #e2e8f0;
            background: white;
            border-radius: 10px;
            font-size: 20px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
        }

        .quantity-btn:hover {
            border-color: #2ecc71;
            color: #2ecc71;
        }

        .quantity-input {
            width: 80px;
            height: 40px;
            text-align: center;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 700;
        }

        .action-buttons {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 15px;
            margin-bottom: 25px;
        }

        .btn-buy-now {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
            padding: 18px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-buy-now:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(46, 204, 113, 0.3);
        }

        .btn-contact {
            background: white;
            color: #2ecc71;
            border: 2px solid #2ecc71;
            padding: 18px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-contact:hover {
            background: #2ecc71;
            color: white;
        }

        .specifications-section {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .specs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .spec-card {
            background: #f7fafc;
            padding: 20px;
            border-radius: 12px;
            border-left: 4px solid #2ecc71;
        }

        .spec-label {
            font-size: 13px;
            color: #718096;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .spec-value {
            font-size: 20px;
            font-weight: 700;
            color: #1a202c;
        }

        .traceability-section {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .timeline {
            position: relative;
            padding-left: 40px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, #2ecc71, #27ae60);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -32px;
            top: 5px;
            width: 16px;
            height: 16px;
            background: #2ecc71;
            border: 3px solid white;
            border-radius: 50%;
            box-shadow: 0 0 0 3px #d1fae5;
        }

        .timeline-date {
            font-size: 13px;
            color: #718096;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .timeline-title {
            font-size: 16px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 5px;
        }

        .timeline-desc {
            font-size: 14px;
            color: #4a5568;
        }

        .certification-badges {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .cert-badge {
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            color: #1e40af;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        @media (max-width: 1024px) {
            .product-detail-grid {
                grid-template-columns: 1fr;
            }

            .specs-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .ai-insights-grid {
                grid-template-columns: 1fr;
            }

            .price-comparison {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .action-buttons {
                grid-template-columns: 1fr;
            }

            .specs-grid {
                grid-template-columns: 1fr;
            }

            .product-title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-container">
            <div class="logo">🌾 Sirkuler</div>
            <div class="breadcrumb">
                <a href="#">Beranda</a> / <a href="#">Limbah Pertanian</a> / Jerami Padi Berkualitas Premium
            </div>
            <div class="header-actions">
                <button class="btn btn-primary">Keranjang (0)</button>
            </div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Product Detail Grid -->
        <div class="product-detail-grid">
            <!-- Image Section -->
            <div class="product-image-section">
                <div class="main-product-image">
                    🌾
                    <div class="verified-badge-large">✓ Terverifikasi</div>
                    <div class="quality-badge-large">Premium</div>
                    <div class="ai-score-badge">🤖 AI Score: 95/100</div>
                </div>
                <div class="thumbnail-gallery">
                    <div class="thumbnail">🌾</div>
                    <div class="thumbnail">📦</div>
                    <div class="thumbnail">📊</div>
                    <div class="thumbnail">🚜</div>
                </div>
            </div>

            <!-- Info Section -->
            <div class="product-info-section">
                <h1 class="product-title">Jerami Padi Berkualitas Premium</h1>
                
                <div class="product-meta">
                    <div class="meta-item">
                        <span>📍</span>
                        <span>Karawang, Jawa Barat</span>
                    </div>
                    <div class="meta-item">
                        <span>👁️</span>
                        <span>1,247 views</span>
                    </div>
                    <div class="meta-item">
                        <span>🕒</span>
                        <span>Diperbarui 2 jam lalu</span>
                    </div>
                </div>

                <div class="seller-info">
                    <div class="seller-avatar">👨‍🌾</div>
                    <div class="seller-details">
                        <h4>Kelompok Tani Maju Bersama</h4>
                        <p>Anggota sejak 2023 • <span class="seller-rating">⭐ 4.9 (156 transaksi)</span></p>
                    </div>
                </div>

                <!-- AI Price Recommendation -->
                <div class="ai-price-section">
                    <span class="ai-badge">🤖 AI PRICE RECOMMENDATION</span>
                    <div class="price-comparison">
                        <div class="price-box">
                            <div class="price-label">Harga Saat Ini</div>
                            <div class="price-value price-current">Rp 750K</div>
                            <div class="price-trend trend-stable">
                                ✓ Harga Kompetitif
                            </div>
                        </div>
                        <div class="price-box">
                            <div class="price-label">AI Prediksi 7 Hari</div>
                            <div class="price-value">Rp 780K</div>
                            <div class="price-trend trend-up">
                                📈 +4% (Naik)
                            </div>
                        </div>
                    </div>
                    <div class="ai-recommendation">
                        💡 <strong>AI Rekomendasi:</strong> Waktu terbaik untuk membeli sekarang! Harga diprediksi naik Rp 30K minggu depan.
                    </div>
                </div>

                <!-- AI Insights Grid -->
                <div class="ai-insights-grid">
                    <!-- Supply Prediction -->
                    <div class="ai-insight-card">
                        <div class="insight-header">
                            <span class="insight-icon">📊</span>
                            <span class="insight-title">AI SUPPLY PREDICTION</span>
                        </div>
                        <div class="insight-value">↑ +18%</div>
                        <div class="insight-desc">
                            Prediksi ketersediaan naik 18% dalam 30 hari ke depan berdasarkan pola musim panen
                        </div>
                        <div class="supply-chart">
                            <div class="chart-bar" style="height: 50%;"></div>
                            <div class="chart-bar" style="height: 65%;"></div>
                            <div class="chart-bar" style="height: 75%;"></div>
                            <div class="chart-bar" style="height: 85%;"></div>
                            <div class="chart-bar" style="height: 95%;"></div>
                            <div class="chart-bar" style="height: 100%;"></div>
                        </div>
                    </div>

                    <!-- Demand Forecast -->
                    <div class="ai-insight-card">
                        <div class="insight-header">
                            <span class="insight-icon">⚡</span>
                            <span class="insight-title">AI DEMAND FORECAST</span>
                        </div>
                        <div class="insight-value">Tinggi</div>
                        <div class="insight-desc">
                            Permintaan tinggi terdeteksi! Stok diprediksi habis dalam 5 hari. Segera checkout untuk mengamankan produk.
                        </div>
                        <div style="margin-top: 10px; background: white; padding: 10px; border-radius: 8px; text-align: center; font-weight: 700; color: #dc2626;">
                            ⏰ 87% Stok Tersisa
                        </div>
                    </div>
                </div>

                <div class="quantity-selector">
                    <div class="quantity-label">Jumlah Pembelian (Ton)</div>
                    <div class="quantity-controls">
                        <button class="quantity-btn" onclick="decreaseQty()">−</button>
                        <input type="number" class="quantity-input" id="qtyInput" value="1" min="1" max="50">
                        <button class="quantity-btn" onclick="increaseQty()">+</button>
                        <span style="color: #718096; font-size: 14px;">Stok: <strong>50 ton</strong></span>
                    </div>
                </div>

                <div class="action-buttons">
                    <button class="btn-buy-now">🛒 Beli Sekarang</button>
                    <button class="btn-contact">💬 Hubungi</button>
                </div>

                <div style="background: #fef3c7; padding: 15px; border-radius: 10px; font-size: 13px; color: #92400e;">
                    <strong>💰 Hemat Hingga Rp 50.000</strong> untuk pembelian minimal 10 ton!
                </div>
            </div>
        </div>

        <!-- Specifications Section -->
        <div class="specifications-section">
            <h2 class="section-title">📋 Spesifikasi Produk</h2>
            <div class="specs-grid">
                <div class="spec-card">
                    <div class="spec-label">Kadar Air</div>
                    <div class="spec-value">12%</div>
                </div>
                <div class="spec-card">
                    <div class="spec-label">Panjang Rata-rata</div>
                    <div class="spec-value">40-60 cm</div>
                </div>
                <div class="spec-card">
                    <div class="spec-label">Kadar Abu</div>
                    <div class="spec-value">15-18%</div>
                </div>
                <div class="spec-card">
                    <div class="spec-label">Kadar Protein</div>
                    <div class="spec-value">4-6%</div>
                </div>
                <div class="spec-card">
                    <div class="spec-label">Kadar Serat Kasar</div>
                    <div class="spec-value">28-32%</div>
                </div>
                <div class="spec-card">
                    <div class="spec-label">Warna</div>
                    <div class="spec-value">Kuning Cerah</div>
                </div>
                <div class="spec-card">
                    <div class="spec-label">Kondisi</div>
                    <div class="spec-value">Kering, Bersih</div>
                </div>
                <div class="spec-card">
                    <div class="spec-label">Kemasan</div>
                    <div class="spec-value">Bale 20kg</div>
                </div>
            </div>

            <div class="certification-badges">
                <div class="cert-badge">✓ Lab Tested</div>
                <div class="cert-badge">✓ Organik</div>
                <div class="cert-badge">✓ Free Pestisida</div>
                <div class="cert-badge">✓ SNI Certified</div>
            </div>
        </div>

        <!-- Traceability Section -->
        <div class="traceability-section">
            <h2 class="section-title">🔍 Traceability - Pelacakan Asal & Kualitas</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">28 November 2025</div>
                    <div class="timeline-title">✅ Produk Siap Dijual</div>
                    <div class="timeline-desc">Produk telah lolos quality control dan siap untuk transaksi</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">26 November 2025</div>
                    <div class="timeline-title">🔬 Uji Laboratorium</div>
                    <div class="timeline-desc">Pengujian kadar air, protein, dan serat kasar di Lab Pertanian Karawang • Hasil: LULUS</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">24 November 2025</div>
                    <div class="timeline-title">📦 Proses Pengemasan</div>
                    <div class="timeline-desc">Pengemasan dalam bale 20kg dengan sistem press hidrolik untuk efisiensi transportasi</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">22 November 2025</div>
                    <div class="timeline-title">☀️ Pengeringan</div>
                    <div class="timeline-desc">Pengeringan alami di area terbuka selama 2 hari hingga kadar air mencapai 12%</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">20 November 2025</div>
                    <div class="timeline-title">🚜 Panen & Pengumpulan</div>
                    <div class="timeline-desc">Panen padi dari lahan seluas 15 hektar di Desa Tanjungsari, Karawang oleh 25 petani</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function increaseQty() {
            const input = document.getElementById('qtyInput');
            const currentValue = parseInt(input.value);
            if (currentValue < 50) {
                input.value = currentValue + 1;
            }
        }

        function decreaseQty() {
            const input = document.getElementById('qtyInput');
            const currentValue = parseInt(input.value);
            if (currentValue > 1) {
                input.value = currentValue - 1;
            }
        }
    </script>
</body>
</html>