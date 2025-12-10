<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - Sirkuler</title>
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

        /* Navbar */
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

        .checkout-steps {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #718096;
        }

        .step.active {
            color: #27ae60;
            font-weight: 700;
        }

        .step-number {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 13px;
        }

        .step.active .step-number {
            background: #27ae60;
            color: white;
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

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            padding: 30px 30px;
            color: white;
        }

        .page-header-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .page-title {
            font-size: 28px;
            font-weight: 800;
        }

        /* Main Container */
        .main-container {
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 30px;
            display: grid;
            grid-template-columns: 1fr 450px;
            gap: 30px;
        }

        /* Payment Section */
        .payment-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .section-card {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        }

        .section-title {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Payment Methods */
        .payment-methods {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .payment-method {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .payment-method:hover {
            border-color: #27ae60;
            background: #f0fdf4;
        }

        .payment-method.selected {
            border-color: #27ae60;
            background: #f0fdf4;
        }

        .method-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .radio-btn {
            width: 22px;
            height: 22px;
            border: 2px solid #cbd5e0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .payment-method.selected .radio-btn {
            border-color: #27ae60;
        }

        .radio-btn::after {
            content: '';
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: transparent;
        }

        .payment-method.selected .radio-btn::after {
            background: #27ae60;
        }

        .method-title {
            font-size: 16px;
            font-weight: 700;
            color: #1a202c;
        }

        .bank-options {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin-top: 15px;
        }

        .bank-option {
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            background: white;
        }

        .bank-option:hover,
        .bank-option.selected {
            border-color: #27ae60;
            background: #f0fdf4;
        }

        .bank-logo {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .bank-name {
            font-size: 12px;
            font-weight: 700;
            color: #2d3748;
        }

        /* Shipping Options */
        .shipping-options {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .shipping-option {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 18px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .shipping-option:hover {
            border-color: #27ae60;
            background: #f0fdf4;
        }

        .shipping-option.selected {
            border-color: #27ae60;
            background: #f0fdf4;
        }

        .shipping-info {
            flex: 1;
        }

        .shipping-name {
            font-size: 15px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 3px;
        }

        .shipping-est {
            font-size: 13px;
            color: #718096;
        }

        .shipping-price {
            font-size: 16px;
            font-weight: 700;
            color: #27ae60;
        }

        .shipping-free {
            background: #27ae60;
            color: white;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 700;
        }

        /* Order Summary */
        .order-summary {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .summary-title {
            font-size: 20px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 20px;
        }

        .order-items {
            max-height: 250px;
            overflow-y: auto;
            margin-bottom: 20px;
        }

        .order-item {
            display: flex;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .item-img {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            flex-shrink: 0;
        }

        .item-detail {
            flex: 1;
        }

        .item-name {
            font-size: 14px;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 3px;
        }

        .item-qty {
            font-size: 12px;
            color: #718096;
        }

        .item-price {
            font-size: 14px;
            font-weight: 700;
            color: #27ae60;
            text-align: right;
        }

        .summary-divider {
            height: 1px;
            background: #e2e8f0;
            margin: 20px 0;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            font-size: 15px;
        }

        .summary-label {
            color: #718096;
        }

        .summary-value {
            font-weight: 700;
            color: #2d3748;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            padding: 20px 0;
            font-size: 18px;
            border-top: 2px solid #e2e8f0;
            margin-top: 15px;
        }

        .total-label {
            font-weight: 700;
            color: #1a202c;
        }

        .total-value {
            font-weight: 800;
            color: #27ae60;
            font-size: 26px;
        }

        .btn-pay {
            width: 100%;
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            color: white;
            padding: 18px;
            border-radius: 12px;
            border: none;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 20px;
        }

        .btn-pay:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(39, 174, 96, 0.3);
        }

        .security-note {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #718096;
        }

        @media (max-width: 1024px) {
            .main-container {
                grid-template-columns: 1fr;
            }

            .order-summary {
                position: static;
            }

            .bank-options {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .checkout-steps {
                display: none;
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
            <div class="checkout-steps">
                <div class="step">
                    <span class="step-number">✓</span>
                    <span>Keranjang</span>
                </div>
                <span style="color: #cbd5e0;">→</span>
                <div class="step active">
                    <span class="step-number">2</span>
                    <span>Pembayaran</span>
                </div>
                <span style="color: #cbd5e0;">→</span>
                <div class="step">
                    <span class="step-number">3</span>
                    <span>Selesai</span>
                </div>
            </div>
            <div class="profile-avatar">JD</div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-container">
            <h1 class="page-title">💳 Pembayaran</h1>
        </div>
    </div>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Payment Section -->
        <div class="payment-section">
            <!-- Payment Method -->
            <div class="section-card">
                <h3 class="section-title">💰 Metode Pembayaran</h3>
                <div class="payment-methods">
                    <!-- Transfer Bank VA -->
                    <div class="payment-method selected" onclick="selectPayment(this, 'bank')">
                        <div class="method-header">
                            <div class="radio-btn"></div>
                            <span class="method-title">Transfer Bank Virtual Account</span>
                        </div>
                        <div class="bank-options">
                            <div class="bank-option selected" onclick="selectBank(event, this)">
                                <div class="bank-logo">🏦</div>
                                <div class="bank-name">BRI</div>
                            </div>
                            <div class="bank-option" onclick="selectBank(event, this)">
                                <div class="bank-logo">🏦</div>
                                <div class="bank-name">BCA</div>
                            </div>
                            <div class="bank-option" onclick="selectBank(event, this)">
                                <div class="bank-logo">🏦</div>
                                <div class="bank-name">Mandiri</div>
                            </div>
                            <div class="bank-option" onclick="selectBank(event, this)">
                                <div class="bank-logo">🏦</div>
                                <div class="bank-name">BNI</div>
                            </div>
                        </div>
                    </div>

                    <!-- Kredit Syariah -->
                    <div class="payment-method" onclick="selectPayment(this, 'credit')">
                        <div class="method-header">
                            <div class="radio-btn"></div>
                            <span class="method-title">Kredit Syariah (Cicilan 0%)</span>
                        </div>
                        <p style="font-size: 13px; color: #718096; margin-left: 37px;">
                            Cicilan 3-12 bulan tanpa bunga • Proses cepat & mudah
                        </p>
                    </div>
                </div>
            </div>

            <!-- Shipping Method -->
            <div class="section-card">
                <h3 class="section-title">🚚 Metode Pengiriman</h3>
                <div class="shipping-options">
                    <div class="shipping-option selected" onclick="selectShipping(this, 75000)">
                        <div class="radio-btn"></div>
                        <div class="shipping-info">
                            <div class="shipping-name">JNE Reguler</div>
                            <div class="shipping-est">Estimasi 3-4 hari</div>
                        </div>
                        <div class="shipping-price">Rp 75.000</div>
                    </div>

                    <div class="shipping-option" onclick="selectShipping(this, 95000)">
                        <div class="radio-btn"></div>
                        <div class="shipping-info">
                            <div class="shipping-name">JNT Express</div>
                            <div class="shipping-est">Estimasi 2-3 hari</div>
                        </div>
                        <div class="shipping-price">Rp 95.000</div>
                    </div>

                    <div class="shipping-option" onclick="selectShipping(this, 120000)">
                        <div class="radio-btn"></div>
                        <div class="shipping-info">
                            <div class="shipping-name">Delivery Premium</div>
                            <div class="shipping-est">Estimasi 1-2 hari</div>
                        </div>
                        <div class="shipping-price">Rp 120.000</div>
                    </div>

                    <div class="shipping-option" onclick="selectShipping(this, 0)">
                        <div class="radio-btn"></div>
                        <div class="shipping-info">
                            <div class="shipping-name">Ambil Sendiri di Lokasi</div>
                            <div class="shipping-est">Tersedia hari kerja 08:00-16:00</div>
                        </div>
                        <div class="shipping-free">GRATIS</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="order-summary">
            <h3 class="summary-title">Ringkasan Pesanan</h3>
            
            <div class="order-items">
                <div class="order-item">
                    <div class="item-img">🌾</div>
                    <div class="item-detail">
                        <div class="item-name">Jerami Padi Premium</div>
                        <div class="item-qty">2 Ton × Rp 750.000</div>
                    </div>
                    <div class="item-price">Rp 1.500.000</div>
                </div>

                <div class="order-item">
                    <div class="item-img">🌱</div>
                    <div class="item-detail">
                        <div class="item-name">Kompos Organik</div>
                        <div class="item-qty">3 Karung × Rp 75.000</div>
                    </div>
                    <div class="item-price">Rp 225.000</div>
                </div>

                <div class="order-item">
                    <div class="item-img">🔥</div>
                    <div class="item-detail">
                        <div class="item-name">Briket Biomassa</div>
                        <div class="item-qty">1 Pack × Rp 85.000</div>
                    </div>
                    <div class="item-price">Rp 85.000</div>
                </div>
            </div>

            <div class="summary-divider"></div>

            <div class="summary-row">
                <span class="summary-label">Subtotal (6 item)</span>
                <span class="summary-value" id="subtotal">Rp 1.810.000</span>
            </div>

            <div class="summary-row">
                <span class="summary-label">Ongkos Kirim</span>
                <span class="summary-value" id="shippingCost">Rp 75.000</span>
            </div>

            <div class="summary-row" style="color: #e53e3e;">
                <span class="summary-label">Diskon</span>
                <span class="summary-value">- Rp 0</span>
            </div>

            <div class="summary-total">
                <span class="total-label">Total Pembayaran</span>
                <span class="total-value" id="totalPayment">Rp 1.885.000</span>
            </div>

            <button class="btn-pay" onclick="processPayment()">
                Bayar Sekarang
            </button>

            <div class="security-note">
                🔒 Pembayaran aman & terenkripsi<br>
                Data Anda dilindungi 100%
            </div>
        </div>
    </div>

    <script>
        let subtotal = 1810000;
        let shippingCost = 75000;
        let discount = 0;

        function selectPayment(element, type) {
            document.querySelectorAll('.payment-method').forEach(el => {
                el.classList.remove('selected');
            });
            element.classList.add('selected');
        }

        function selectBank(event, element) {
            event.stopPropagation();
            document.querySelectorAll('.bank-option').forEach(el => {
                el.classList.remove('selected');
            });
            element.classList.add('selected');
        }

        function selectShipping(element, cost) {
            document.querySelectorAll('.shipping-option').forEach(el => {
                el.classList.remove('selected');
            });
            element.classList.add('selected');
            
            shippingCost = cost;
            updateTotal();
        }

        function updateTotal() {
            const total = subtotal + shippingCost - discount;
            
            document.getElementById('shippingCost').textContent = 
                shippingCost === 0 ? 'GRATIS' : `Rp ${shippingCost.toLocaleString('id-ID')}`;
            document.getElementById('totalPayment').textContent = 
                `Rp ${total.toLocaleString('id-ID')}`;
        }

        function processPayment() {
            const selectedPayment = document.querySelector('.payment-method.selected .method-title').textContent;
            const selectedShipping = document.querySelector('.shipping-option.selected .shipping-name').textContent;
            const total = subtotal + shippingCost - discount;
            
            alert(`Pembayaran diproses!\n\nMetode: ${selectedPayment}\nPengiriman: ${selectedShipping}\nTotal: Rp ${total.toLocaleString('id-ID')}\n\nTerima kasih telah berbelanja di Sirkuler! 🌱`);
            
            // Clear cart
            localStorage.removeItem('sirkuler_cart');
            localStorage.removeItem('sirkuler_checkout');
            
            // Redirect to success page or home
            setTimeout(() => {
                window.location.href = '#beranda';
            }, 2000);
        }

        // Initialize
        updateTotal();
    </script>
</body>
</html>