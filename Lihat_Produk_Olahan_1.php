<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Olahan - Sirkuler</title>
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

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
            padding: 40px 30px;
            color: white;
        }

        .page-header-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .page-title {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .page-subtitle {
            font-size: 16px;
            opacity: 0.95;
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

        /* Sidebar Filter */
        .sidebar {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .filter-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #1a202c;
        }

        .filter-section {
            margin-bottom: 25px;
        }

        .filter-section-title {
            font-size: 14px;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .filter-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 0;
            cursor: pointer;
        }

        .filter-option input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #10b981;
        }

        .filter-option label {
            font-size: 14px;
            color: #2d3748;
            cursor: pointer;
            flex: 1;
        }

        /* Products Section */
        .products-section {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            color: #1a202c;
        }

        .sort-dropdown {
            padding: 10px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 14px;
            cursor: pointer;
            background: white;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
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
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            border-color: #10b981;
        }

        .product-image {
            width: 100%;
            height: 180px;
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            position: relative;
        }

        .eco-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: #10b981;
            color: white;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .certified-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: #f59e0b;
            color: white;
            padding: 6px 10px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 700;
        }

        .product-info {
            padding: 20px;
        }

        .product-category {
            font-size: 12px;
            color: #10b981;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .product-name {
            font-size: 16px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 8px;
        }

        .product-seller {
            font-size: 13px;
            color: #718096;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .product-specs {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 15px;
        }

        .spec-item {
            background: #f7fafc;
            padding: 10px;
            border-radius: 8px;
        }

        .spec-label {
            font-size: 11px;
            color: #718096;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .spec-value {
            font-size: 15px;
            font-weight: 700;
            color: #2d3748;
        }

        .product-price {
            font-size: 22px;
            font-weight: 800;
            color: #10b981;
            margin-bottom: 15px;
        }

        .price-unit {
            font-size: 14px;
            color: #718096;
            font-weight: 500;
        }

        .product-actions {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 10px;
        }

        .btn-add-cart {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
            color: white;
            padding: 12px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-add-cart:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
        }

        .btn-detail {
            background: white;
            color: #10b981;
            border: 2px solid #10b981;
            padding: 12px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-detail:hover {
            background: #10b981;
            color: white;
        }

        @media (max-width: 1024px) {
            .main-container {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: static;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .page-title {
                font-size: 28px;
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
                <a href="#produk-olahan" class="nav-link active">Produk Olahan</a>
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

    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-container">
            <h1 class="page-title">♻️ Produk Olahan Limbah Pertanian</h1>
            <p class="page-subtitle">Produk berkualitas hasil olahan limbah pertanian dari UMKM dan industri terpercaya</p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Sidebar Filter -->
        <aside class="sidebar">
            <h3 class="filter-title">Filter</h3>
            
            <div class="filter-section">
                <div class="filter-section-title">Kategori Produk</div>
                <div class="filter-option">
                    <input type="checkbox" id="kompos">
                    <label for="kompos">Kompos & Pupuk</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="briket">
                    <label for="briket">Briket Biomassa</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="pakan">
                    <label for="pakan">Pakan Ternak</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="bioplastik">
                    <label for="bioplastik">Bioplastik</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="bioenergi">
                    <label for="bioenergi">Bioenergi</label>
                </div>
            </div>

            <div class="filter-section">
                <div class="filter-section-title">Sertifikasi</div>
                <div class="filter-option">
                    <input type="checkbox" id="organik">
                    <label for="organik">Organik ✓</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="sni">
                    <label for="sni">SNI</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="halal">
                    <label for="halal">Halal</label>
                </div>
            </div>

            <div class="filter-section">
                <div class="filter-section-title">Lokasi Seller</div>
                <div class="filter-option">
                    <input type="checkbox" id="jawa">
                    <label for="jawa">Jawa</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="sumatra">
                    <label for="sumatra">Sumatra</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="kalimantan">
                    <label for="kalimantan">Kalimantan</label>
                </div>
            </div>

            <div class="filter-section">
                <div class="filter-section-title">Rating</div>
                <div class="filter-option">
                    <input type="checkbox" id="5star">
                    <label for="5star">⭐⭐⭐⭐⭐ (5.0)</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="4star">
                    <label for="4star">⭐⭐⭐⭐ (4.0+)</label>
                </div>
                <div class="filter-option">
                    <input type="checkbox" id="3star">
                    <label for="3star">⭐⭐⭐ (3.0+)</label>
                </div>
            </div>
        </aside>

        <!-- Products Section -->
        <section class="products-section">
            <div class="section-header">
                <h2 class="section-title">Produk Olahan Tersedia</h2>
                <select class="sort-dropdown">
                    <option>Urutkan: Terbaru</option>
                    <option>Harga Terendah</option>
                    <option>Harga Tertinggi</option>
                    <option>Rating Tertinggi</option>
                    <option>Terlaris</option>
                </select>
            </div>

            <div class="products-grid" id="productsGrid"></div>
        </section>
    </div>

    <script>
        let cart = [];

        const products = [
            {
                id: 101,
                name: 'Kompos Organik Premium',
                category: 'Pupuk & Kompos',
                type: '🌱',
                seller: 'CV. Hijau Lestari',
                location: 'Malang, Jawa Timur',
                stock: '200 Karung',
                weight: '25 kg/karung',
                price: 75000,
                certified: 'Organik',
                rating: '4.9'
            },
            {
                id: 102,
                name: 'Briket Biomassa Grade A',
                category: 'Bioenergi',
                type: '🔥',
                seller: 'PT. Energi Biomassa',
                location: 'Lampung',
                stock: '500 Pack',
                weight: '10 kg/pack',
                price: 85000,
                certified: 'SNI',
                rating: '4.8'
            },
            {
                id: 103,
                name: 'Pakan Fermentasi Ternak',
                category: 'Pakan Ternak',
                type: '🐄',
                seller: 'UMKM Ternak Maju',
                location: 'Boyolali, Jawa Tengah',
                stock: '150 Ton',
                weight: '50 kg/sak',
                price: 180000,
                certified: 'Halal',
                rating: '5.0'
            },
            {
                id: 104,
                name: 'Pupuk Cair Organik',
                category: 'Pupuk & Kompos',
                type: '💧',
                seller: 'CV. Tani Organik',
                location: 'Bandung, Jawa Barat',
                stock: '300 Botol',
                weight: '1 liter/botol',
                price: 45000,
                certified: 'Organik',
                rating: '4.7'
            },
            {
                id: 105,
                name: 'Biopelet Premium',
                category: 'Bioenergi',
                type: '⚡',
                seller: 'PT. Bio Energi Nusantara',
                location: 'Bekasi, Jawa Barat',
                stock: '1000 Kg',
                weight: '25 kg/sak',
                price: 95000,
                certified: 'SNI',
                rating: '4.9'
            },
            {
                id: 106,
                name: 'Media Tanam Organik',
                category: 'Pupuk & Kompos',
                type: '🪴',
                seller: 'UMKM Berkebun Hijau',
                location: 'Bogor, Jawa Barat',
                stock: '400 Karung',
                weight: '15 kg/karung',
                price: 35000,
                certified: 'Organik',
                rating: '4.8'
            }
        ];

        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ ...product, quantity: 1 });
            }
            
            updateCartCount();
            alert(`${product.name} ditambahkan ke keranjang!`);
            
            // Save to localStorage
            localStorage.setItem('sirkuler_cart', JSON.stringify(cart));
        }

        function updateCartCount() {
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            document.getElementById('cartCount').textContent = totalItems;
        }

        function renderProducts() {
            const grid = document.getElementById('productsGrid');
            grid.innerHTML = products.map(product => `
                <div class="product-card">
                    <div class="product-image">
                        ${product.type}
                        <div class="certified-badge">${product.certified}</div>
                        <div class="eco-badge">Eco Friendly</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">${product.category}</div>
                        <h3 class="product-name">${product.name}</h3>
                        <div class="product-seller">🏭 ${product.seller}</div>
                        
                        <div class="product-specs">
                            <div class="spec-item">
                                <div class="spec-label">Stok</div>
                                <div class="spec-value">${product.stock}</div>
                            </div>
                            <div class="spec-item">
                                <div class="spec-label">Kemasan</div>
                                <div class="spec-value">${product.weight}</div>
                            </div>
                        </div>

                        <div style="margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                            <span style="color: #f59e0b; font-size: 16px;">⭐ ${product.rating}</span>
                            <span style="color: #718096; font-size: 13px;">• ${product.location}</span>
                        </div>

                        <div class="product-price">
                            Rp ${product.price.toLocaleString('id-ID')}
                            <span class="price-unit">/unit</span>
                        </div>

                        <div class="product-actions">
                            <button class="btn-add-cart" onclick="addToCart(${product.id})">+ Keranjang</button>
                            <button class="btn-detail">Detail</button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Load cart from localStorage
        const savedCart = localStorage.getItem('sirkuler_cart');
        if (savedCart) {
            cart = JSON.parse(savedCart);
            updateCartCount();
        }

        renderProducts();
    </script>
</body>
</html>