<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Care</title>
    <style>
        :root {
            --primary-blue: #4a90e2;
            --soft-mint: #e8f6f3;
            --white: #ffffff;
            --text-navy: #2c3e50;
            --accent-green: #2ecc71;
            --gray-light: #f4f7f6;
            --shadow-clean: 0 10px 25px rgba(74, 144, 226, 0.1);
        }

        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            margin: 0;
            background-color: var(--soft-mint);
            color: var(--text-navy);
        }

        nav {
            background: var(--white);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .logo { font-weight: 800; font-size: 22px; color: var(--primary-blue); }
        .nav-links a { text-decoration: none; color: var(--text-navy); margin: 0 15px; font-weight: 500; font-size: 14px; }

        .header-box {
            margin: 30px 5%;
            background: linear-gradient(135deg, #ffffff 0%, #d6eaf8 100%);
            padding: 35px;
            border-radius: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: var(--shadow-clean);
        }

        .header-info h1 { margin: 0; font-size: 28px; color: var(--primary-blue); }
        .header-info p { margin: 8px 0 0; opacity: 0.8; }

        .search-container {
            position: relative;
            width: 350px;
        }

        .search-container input {
            width: 100%;
            padding: 12px 20px;
            border-radius: 50px;
            border: 1px solid #d6eaf8;
            outline: none;
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.02);
        }

        .category-scroll {
            margin: 20px 5%;
            display: flex;
            gap: 15px;
            overflow-x: auto;
            padding-bottom: 5px;
        }

        .btn-cat {
            background: var(--white);
            padding: 10px 25px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 13px;
            border: 2px solid transparent;
            transition: 0.3s;
            box-shadow: 0 4px 6px rgba(0,0,0,0.03);
        }

        .btn-cat:hover, .btn-cat.active {
            border-color: var(--primary-blue);
            color: var(--primary-blue);
            font-weight: bold;
        }

        .inventory-grid {
            margin: 20px 5% 50px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
            gap: 25px;
        }

        .item-card {
            background: var(--white);
            border-radius: 25px;
            padding: 20px;
            text-align: center;
            transition: 0.3s;
            border: 1px solid #edf2f7;
        }

        .item-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-clean);
        }

        .icon-circle {
            width: 110px;
            height: 110px;
            background: var(--gray-light);
            border-radius: 40px;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 45px;
            transform: rotate(-5deg);
        }

        .item-card h3 { font-size: 16px; margin: 10px 0 5px; }
        .item-card .sub-text { font-size: 12px; color: #95a5a6; margin-bottom: 15px; }

        .price-tag {
            background: #ebf5fb;
            color: var(--primary-blue);
            padding: 5px 12px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 14px;
        }

        .action-row {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stock-info { font-size: 11px; color: var(--accent-green); font-weight: bold; }

        .buy-btn {
            background: var(--primary-blue);
            color: white;
            border: none;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
</head>
<body>

    <nav>
        <div class="logo">🏠 HOME CARE</div>
        <div class="nav-links">
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/category/food-beverage')}}">Food & Beverage</a>
            <a href="{{url('/category/beauty-health')}}">Beauty & Health</a>
            <a href="{{url('/category/home-care')}}">Home Care</a>
            <a href="{{url('/category/baby-kid')}}">Baby Kid</a>
        </div>
        <div style="color: #95a5a6; font-size: 14px;">Terminal: #01-A</div>
    </nav>

    <div class="header-box">
        <div class="header-info">
            <h1>Home Care Solutions</h1>
            <p>Kelola stok pembersih dan perlengkapan rumah tangga Anda.</p>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Cari deterjen, tisu, atau alat pel...">
        </div>
    </div>

    <div class="category-scroll">
        <div class="btn-cat active">Semua Produk</div>
        <div class="btn-cat">Pembersih Lantai</div>
        <div class="btn-cat">Laundry</div>
        <div class="btn-cat">Kitchen Care</div>
        <div class="btn-cat">Air Freshener</div>
        <div class="btn-cat">Tools</div>
    </div>

    <div class="inventory-grid">
        <div class="item-card">
            <div class="icon-circle">🧼</div>
            <h3>Dishwashing Liquid</h3>
            <p class="sub-text">Lime Fresh - 800ml</p>
            <span class="price-tag">Rp 15.500</span>
            <div class="action-row">
                <span class="stock-info">Stock: 45 pcs</span>
                <button class="buy-btn">+</button>
            </div>
        </div>

        <div class="item-card">
            <div class="icon-circle">🧺</div>
            <h3>Fabric Softener</h3>
            <p class="sub-text">Morning Dew - 1L</p>
            <span class="price-tag">Rp 24.000</span>
            <div class="action-row">
                <span class="stock-info">Stock: 12 pcs</span>
                <button class="buy-btn">+</button>
            </div>
        </div>

        <div class="item-card">
            <div class="icon-circle">🧹</div>
            <h3>Microfiber Broom</h3>
            <p class="sub-text">High Quality Fiber</p>
            <span class="price-tag">Rp 55.000</span>
            <div class="action-row">
                <span class="stock-info">Stock: 8 pcs</span>
                <button class="buy-btn">+</button>
            </div>
        </div>

        <div class="item-card">
            <div class="icon-circle">🧴</div>
            <h3>Floor Cleaner</h3>
            <p class="sub-text">Lavender Relax - 750ml</p>
            <span class="price-tag">Rp 12.000</span>
            <div class="action-row">
                <span class="stock-info">Stock: 30 pcs</span>
                <button class="buy-btn">+</button>
            </div>
        </div>

        <div class="item-card">
            <div class="icon-circle">🌫️</div>
            <h3>Automatic Spray</h3>
            <p class="sub-text">Spring Garden Kit</p>
            <span class="price-tag">Rp 85.000</span>
            <div class="action-row">
                <span class="stock-info">Stock: 5 pcs</span>
                <button class="buy-btn">+</button>
            </div>
        </div>

        <div class="item-card">
            <div class="icon-circle">🧻</div>
            <h3>Premium Tissue</h3>
            <p class="sub-text">Soft 2-Ply - 250 Sheets</p>
            <span class="price-tag">Rp 18.000</span>
            <div class="action-row">
                <span class="stock-info">Stock: 100+ pcs</span>
                <button class="buy-btn">+</button>
            </div>
        </div>
    </div>

</body>
</html>
