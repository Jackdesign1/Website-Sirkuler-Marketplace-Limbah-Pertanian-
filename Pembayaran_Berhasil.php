<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil - Sirkuler</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            color: #1a202c;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .success-container {
            max-width: 700px;
            width: 100%;
            background: white;
            border-radius: 25px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            padding: 60px 50px;
            text-align: center;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-icon {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: scaleIn 0.5s ease-out 0.2s both;
            box-shadow: 0 10px 30px rgba(39, 174, 96, 0.3);
        }

        @keyframes scaleIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }

        .checkmark {
            font-size: 64px;
            animation: checkmark 0.4s ease-out 0.6s both;
        }

        @keyframes checkmark {
            0% {
                transform: scale(0) rotate(-45deg);
            }
            50% {
                transform: scale(1.2) rotate(0deg);
            }
            100% {
                transform: scale(1) rotate(0deg);
            }
        }

        .success-title {
            font-size: 32px;
            font-weight: 800;
            color: #27ae60;
            margin-bottom: 15px;
        }

        .success-message {
            font-size: 16px;
            color: #718096;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .order-info {
            background: #f7fafc;
            padding: 30px;
            border-radius: 16px;
            margin-bottom: 30px;
            text-align: left;
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
            margin-bottom: 20px;
        }

        .order-id {
            font-size: 14px;
            color: #718096;
        }

        .order-id strong {
            color: #1a202c;
            font-size: 18px;
        }

        .order-status {
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
        }

        .order-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            font-size: 15px;
        }

        .order-label {
            color: #718096;
        }

        .order-value {
            font-weight: 700;
            color: #1a202c;
        }

        .order-total {
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

        .payment-instructions {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: left;
        }

        .instruction-title {
            font-size: 16px;
            font-weight: 700;
            color: #92400e;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .instruction-list {
            list-style: none;
            padding-left: 0;
        }

        .instruction-list li {
            padding: 8px 0;
            color: #78350f;
            font-size: 14px;
            line-height: 1.6;
            display: flex;
            align-items: start;
            gap: 10px;
        }

        .instruction-list li::before {
            content: '✓';
            color: #f59e0b;
            font-weight: 700;
            flex-shrink: 0;
        }

        .va-number {
            background: white;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
            border: 2px dashed #f59e0b;
        }

        .va-label {
            font-size: 12px;
            color: #92400e;
            margin-bottom: 5px;
        }

        .va-value {
            font-size: 24px;
            font-weight: 800;
            color: #1a202c;
            letter-spacing: 2px;
        }

        .copy-btn {
            background: #f59e0b;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s;
        }

        .copy-btn:hover {
            background: #d97706;
        }

        .action-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .btn {
            padding: 16px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(39, 174, 96, 0.3);
        }

        .btn-secondary {
            background: white;
            color: #27ae60;
            border: 2px solid #27ae60;
        }

        .btn-secondary:hover {
            background: #f0fdf4;
        }

        .support-note {
            margin-top: 30px;
            font-size: 13px;
            color: #718096;
        }

        .support-note a {
            color: #27ae60;
            text-decoration: none;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .success-container {
                padding: 40px 30px;
            }

            .success-title {
                font-size: 26px;
            }

            .action-buttons {
                grid-template-columns: 1fr;
            }

            .order-header {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>



    <div class="success-container">
        <!-- Success Icon -->
        <div class="success-icon">
            <span class="checkmark">✓</span>
        </div>

        <!-- Success Message -->
        <h1 class="success-title">Pembayaran Berhasil Dibuat!</h1>
        <p class="success-message">
            Terima kasih telah berbelanja di Sirkuler. Pesanan Anda telah kami terima dan sedang diproses.
        </p>

        <!-- Order Info -->
        <div class="order-info">
            <div class="order-header">
                <div class="order-id">
                    ID Pesanan<br>
                    <strong>INV-2025-004</strong>
                </div>
                <div class="order-status">✓ Menunggu Pembayaran</div>
            </div>

            <div class="order-row">
                <span class="order-label">Tanggal Pemesanan</span>
                <span class="order-value">01 Desember 2025, 14:30</span>
            </div>

            <div class="order-row">
                <span class="order-label">Metode Pembayaran</span>
                <span class="order-value">Transfer Bank BRI</span>
            </div>

            <div class="order-row">
                <span class="order-label">Metode Pengiriman</span>
                <span class="order-value">JNE Reguler (3-4 hari)</span>
            </div>

            <div class="order-row">
                <span class="order-label">Subtotal (3 item)</span>
                <span class="order-value">Rp 1.810.000</span>
            </div>

            <div class="order-row">
                <span class="order-label">Ongkos Kirim</span>
                <span class="order-value">Rp 75.000</span>
            </div>

            <div class="order-total">
                <span class="total-label">Total Pembayaran</span>
                <span class="total-value">Rp 1.885.000</span>
            </div>
        </div>

        <!-- Payment Instructions -->
        <div class="payment-instructions">
            <div class="instruction-title">
                📋 Instruksi Pembayaran
            </div>
            <ul class="instruction-list">
                <li>Salin nomor Virtual Account di bawah ini</li>
                <li>Lakukan pembayaran melalui ATM, mobile banking, atau internet banking</li>
                <li>Selesaikan pembayaran dalam 24 jam</li>
                <li>Konfirmasi otomatis akan dikirim setelah pembayaran berhasil</li>
            </ul>

            <div class="va-number">
                <div class="va-label">Nomor Virtual Account BRI</div>
                <div class="va-value">8810 1234 5678 9012</div>
                <button class="copy-btn" onclick="copyVA()">📋 Salin Nomor</button>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <button class="btn btn-primary" onclick="window.location.href='#akun'">
                📦 Lihat Pesanan
            </button>
            <button class="btn btn-secondary" onclick="window.location.href='#beranda'">
                🏠 Kembali ke Beranda
            </button>
        </div>

        <!-- Support Note -->
        <p class="support-note">
            Butuh bantuan? Hubungi <a href="#">Customer Service</a> kami<br>
            Email pesanan akan dikirim ke <strong>john.doe@email.com</strong>
        </p>
    </div>

    <script>
        function copyVA() {
            const vaNumber = '8810123456789012';
            navigator.clipboard.writeText(vaNumber).then(() => {
                alert('Nomor Virtual Account berhasil disalin!');
            }).catch(() => {
                alert('Gagal menyalin. Silakan salin manual: ' + vaNumber);
            });
        }

        // Auto redirect after 30 seconds (optional)
        setTimeout(() => {
            console.log('Auto redirect available');
        }, 30000);
    </script>
</body>
</html>