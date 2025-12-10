<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Saya - Sirkuler</title>
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

        /* Main Container */
        .main-container {
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 30px;
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 30px;
        }

        /* Sidebar */
        .sidebar {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .profile-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
            margin-bottom: 20px;
        }

        .profile-avatar-large {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 32px;
            margin: 0 auto 15px;
        }

        .profile-name {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 5px;
        }

        .profile-email {
            font-size: 13px;
            color: #718096;
        }

        .menu-section {
            margin-bottom: 25px;
        }

        .menu-title {
            font-size: 12px;
            font-weight: 700;
            color: #718096;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }

        .menu-item {
            padding: 12px 15px;
            border-radius: 10px;
            margin-bottom: 5px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 600;
            color: #4a5568;
        }

        .menu-item:hover,
        .menu-item.active {
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            color: #27ae60;
        }

        .menu-icon {
            font-size: 18px;
        }

        .logout-btn {
            width: 100%;
            padding: 12px;
            background: #fee;
            color: #dc2626;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 20px;
        }

        .logout-btn:hover {
            background: #fecaca;
        }

        /* Content Area */
        .content-area {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        }

        .page-title {
            font-size: 28px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 25px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .info-card {
            background: #f7fafc;
            padding: 20px;
            border-radius: 12px;
            border-left: 4px solid #27ae60;
        }

        .info-label {
            font-size: 12px;
            color: #718096;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .info-value {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            padding: 25px;
            border-radius: 12px;
            text-align: center;
        }

        .stat-icon {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .stat-value {
            font-size: 28px;
            font-weight: 800;
            color: #27ae60;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 13px;
            color: #065f46;
            font-weight: 600;
        }

        .section-title {
            font-size: 20px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .transaction-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .transaction-item {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px;
            transition: all 0.3s;
        }

        .transaction-item:hover {
            border-color: #27ae60;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .transaction-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .transaction-id {
            font-size: 14px;
            font-weight: 700;
            color: #1a202c;
        }

        .transaction-status {
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 700;
        }

        .status-success {
            background: #d1fae5;
            color: #065f46;
        }

        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }

        .transaction-details {
            font-size: 13px;
            color: #718096;
            margin-bottom: 10px;
        }

        .transaction-total {
            font-size: 18px;
            font-weight: 800;
            color: #27ae60;
        }

        .btn-edit {
            background: linear-gradient(135deg, #27ae60 0%, #52d68a 100%);
            color: white;
            padding: 12px 24px;
            border-radius: 10px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 20px;
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(39, 174, 96, 0.3);
        }

        @media (max-width: 1024px) {
            .main-container {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: static;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
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
            <div class="nav-menu">
                <a href="#beranda" class="nav-link">Beranda</a>
                <a href="#limbah-pertanian" class="nav-link">Limbah Pertanian</a>
                <a href="#produk-olahan" class="nav-link">Produk Olahan</a>
                <a href="#transaksi" class="nav-link">Transaksi</a>
                <a href="#akun" class="nav-link active">Akun</a>
            </div>
            <div class="nav-actions">
                <div class="cart-icon" onclick="window.location.href='#transaksi'">
                    🛒
                    <span class="cart-badge">0</span>
                </div>
                <div class="notification-bell">
                    🔔
                    <span class="notification-badge">3</span>
                </div>
                <div class="profile-avatar">JD</div>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-header">
                <div class="profile-avatar-large">JD</div>
                <div class="profile-name">John Doe</div>
                <div class="profile-email">john.doe@email.com</div>
            </div>

            <div class="menu-section">
                <div class="menu-title">Akun</div>
                <div class="menu-item active" onclick="showSection('profil')">
                    <span class="menu-icon">👤</span>
                    <span>Profil Saya</span>
                </div>
                <div class="menu-item" onclick="showSection('transaksi')">
                    <span class="menu-icon">📦</span>
                    <span>Riwayat Transaksi</span>
                </div>
                <div class="menu-item" onclick="showSection('pengaturan')">
                    <span class="menu-icon">⚙️</span>
                    <span>Pengaturan</span>
                </div>
            </div>

            <div class="menu-section">
                <div class="menu-title">Lainnya</div>
                <div class="menu-item">
                    <span class="menu-icon">❓</span>
                    <span>Bantuan</span>
                </div>
                <div class="menu-item">
                    <span class="menu-icon">📄</span>
                    <span>Syarat & Ketentuan</span>
                </div>
            </div>

            <button class="logout-btn" onclick="logout()">🚪 Keluar</button>
        </aside>

        <!-- Content Area -->
        <div class="content-area" id="contentArea">
            <h2 class="page-title">👤 Profil Saya</h2>

            <!-- Stats -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">🛒</div>
                    <div class="stat-value">24</div>
                    <div class="stat-label">Total Transaksi</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">✅</div>
                    <div class="stat-value">22</div>
                    <div class="stat-label">Selesai</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">⏳</div>
                    <div class="stat-value">2</div>
                    <div class="stat-label">Dalam Proses</div>
                </div>
            </div>

            <!-- Info Grid -->
            <h3 class="section-title">📝 Informasi Pribadi</h3>
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-label">Nama Lengkap</div>
                    <div class="info-value">John Doe</div>
                </div>
                <div class="info-card">
                    <div class="info-label">Email</div>
                    <div class="info-value">john.doe@email.com</div>
                </div>
                <div class="info-card">
                    <div class="info-label">No. Telepon</div>
                    <div class="info-value">+62 812-3456-7890</div>
                </div>
                <div class="info-card">
                    <div class="info-label">Role</div>
                    <div class="info-value">Industri</div>
                </div>
                <div class="info-card">
                    <div class="info-label">Perusahaan</div>
                    <div class="info-value">PT. Industri Hijau</div>
                </div>
                <div class="info-card">
                    <div class="info-label">Alamat</div>
                    <div class="info-value">Jakarta Selatan, DKI Jakarta</div>
                </div>
            </div>

            <button class="btn-edit" onclick="alert('Fitur edit profil akan segera hadir!')">
                ✏️ Edit Profil
            </button>

            <!-- Recent Transactions -->
            <h3 class="section-title" style="margin-top: 40px;">📦 Transaksi Terbaru</h3>
            <div class="transaction-list">
                <div class="transaction-item">
                    <div class="transaction-header">
                        <span class="transaction-id">INV-2025-001</span>
                        <span class="transaction-status status-success">✓ Selesai</span>
                    </div>
                    <div class="transaction-details">
                        28 Nov 2025 • Jerami Padi Premium (2 Ton) + 2 item lainnya
                    </div>
                    <div class="transaction-total">Total: Rp 1.885.000</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-header">
                        <span class="transaction-id">INV-2025-002</span>
                        <span class="transaction-status status-pending">⏳ Dalam Pengiriman</span>
                    </div>
                    <div class="transaction-details">
                        25 Nov 2025 • Kompos Organik (5 Karung)
                    </div>
                    <div class="transaction-total">Total: Rp 375.000</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-header">
                        <span class="transaction-id">INV-2025-003</span>
                        <span class="transaction-status status-success">✓ Selesai</span>
                    </div>
                    <div class="transaction-details">
                        20 Nov 2025 • Briket Biomassa (3 Pack)
                    </div>
                    <div class="transaction-total">Total: Rp 255.000</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showSection(section) {
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(item => item.classList.remove('active'));
            event.currentTarget.classList.add('active');

            if (section === 'transaksi') {
                alert('Menampilkan halaman Riwayat Transaksi lengkap...');
            } else if (section === 'pengaturan') {
                alert('Menampilkan halaman Pengaturan...');
            }
        }

        function logout() {
            if (confirm('Apakah Anda yakin ingin keluar?')) {
                localStorage.clear();
                alert('Anda telah keluar dari akun Sirkuler.');
                window.location.href = '#login';
            }
        }
    </script>
</body>
</html>