<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty & Health</title>
    <style>
        :root {
            --primary-soft: #d4a373;
            --accent-pink: #e29578;
            --bg-beauty: #faf3f0;
            --white: #ffffff;
            --text-main: #5e503f;
            --shadow-soft: 0 10px 30px rgba(226, 149, 120, 0.12);
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            background-color: var(--bg-beauty);
            color: var(--text-main);
        }

        nav {
            background: var(--white);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 15px rgba(0,0,0,0.03);
        }

        .logo { font-weight: bold; font-size: 22px; color: var(--accent-pink); letter-spacing: 1px; }
        .nav-links a { text-decoration: none; color: var(--text-main); margin: 0 15px; font-size: 14px; font-weight: 500; }

        .header-section {
            padding: 40px 5% 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .welcome-text h1 { margin: 0; font-size: 26px; font-weight: 600; }
        .welcome-text p { margin: 5px 0 0; opacity: 0.6; font-size: 14px; }

        .search-box {
            background: var(--white);
            border-radius: 50px;
            padding: 10px 25px;
            display: flex;
            align-items: center;
            box-shadow: var(--shadow-soft);
            width: 320px;
        }

        .search-box input { border: none; outline: none; margin-left: 10px; width: 100%; font-size: 14px; }

        .category-row {
            padding: 10px 5%;
            display: flex;
            gap: 12px;
            overflow-x: auto;
        }

        .cat-item {
            background: var(--white);
            padding: 10px 22px;
            border-radius: 12px;
            font-size: 13px;
            cursor: pointer;
            transition: 0.3s;
            border: 1px solid transparent;
            white-space: nowrap;
        }

        .cat-item:hover, .cat-item.active {
            background: var(--accent-pink);
            color: white;
            box-shadow: 0 5px 15px rgba(226, 149, 120, 0.3);
        }

        .product-grid {
            padding: 30px 5%;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 25px;
        }

        .beauty-card {
            background: var(--white);
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            box-shadow: var(--shadow-soft);
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            border: 1px solid rgba(255,255,255,0.5);
        }

        .beauty-card:hover { transform: scale(1.03); }

        .img-container {
            width: 120px;
            height: 120px;
            background: #fdf8f5;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
        }

        .status-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 10px;
            background: #f0eae4;
            padding: 3px 10px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .beauty-card h3 { font-size: 16px; margin: 10px 0 5px; color: var(--text-main); }
        .beauty-card .brand { font-size: 12px; color: #a5a5a5; margin-bottom: 15px; }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .price { font-weight: bold; color: var(--accent-pink); font-size: 15px; }

        .btn-add {
            background: var(--text-main);
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-add:hover { background: var(--accent-pink); }
    </style>
</head>
<body>

    <nav>
        <div class="logo">BEAUTY POS</div>
        <div class="nav-links">
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/category/food-beverage')}}">Food & Beverage</a>
            <a href="{{url('/category/beauty-health')}}">Beauty & Health</a>
            <a href="{{url('/category/home-care')}}">Home Care</a>
            <a href="{{url('/category/baby-kid')}}">Baby Kid</a>
        </div>
        <div style="font-size: 18px;">🌸</div>
    </nav>

    <div class="header-section">
        <div class="welcome-text">
            <h1>Beauty & Health Catalog</h1>
            <p>Pilih produk perawatan terbaik untuk memancarkan kecantikan alami.</p>
        </div>
        <div class="search-box">
            <span>🔍</span>
            <input type="text" placeholder="Cari skincare, makeup, atau vitamin...">
        </div>
    </div>

    <div class="category-row">
        <div class="cat-item active">All Items</div>
        <div class="cat-item">Skincare</div>
        <div class="cat-item">Makeup</div>
        <div class="cat-item">Hair Care</div>
        <div class="cat-item">Supplements</div>
        <div class="cat-item">Body Care</div>
    </div>

    <div class="product-grid">
        <div class="beauty-card">
            <span class="status-tag">In Stock</span>
            <div class="img-container">🧴</div>
            <h3>Moisturizing Cream</h3>
            <p class="brand">Glow Rituals</p>
            <div class="card-footer">
                <span class="price">Rp 125.000</span>
                <div class="btn-add">+</div>
            </div>
        </div>

        <div class="beauty-card">
            <span class="status-tag" style="color: #d4a373;">Limited</span>
            <div class="img-container">💄</div>
            <h3>Velvet Lipstick</h3>
            <p class="brand">Matte Co.</p>
            <div class="card-footer">
                <span class="price">Rp 89.000</span>
                <div class="btn-add">+</div>
            </div>
        </div>

        <div class="beauty-card">
            <span class="status-tag">Best Seller</span>
            <div class="img-container">✨</div>
            <h3>Face Serum Vitamin C</h3>
            <p class="brand">Pure Essence</p>
            <div class="card-footer">
                <span class="price">Rp 210.000</span>
                <div class="btn-add">+</div>
            </div>
        </div>

        <div class="beauty-card">
            <span class="status-tag">New</span>
            <div class="img-container">☀️</div>
            <h3>Sunscreen SPF 50++</h3>
            <p class="brand">Shield Pro</p>
            <div class="card-footer">
                <span class="price">Rp 145.000</span>
                <div class="btn-add">+</div>
            </div>
        </div>

        <div class="beauty-card">
            <span class="status-tag">In Stock</span>
            <div class="img-container">💊</div>
            <h3>Collagen Tablets</h3>
            <p class="brand">Health Glow</p>
            <div class="card-footer">
                <span class="price">Rp 350.000</span>
                <div class="btn-add">+</div>
            </div>
        </div>

        <div class="beauty-card">
            <span class="status-tag">In Stock</span>
            <div class="img-container">🧼</div>
            <h3>Organic Body Wash</h3>
            <p class="brand">Earthly Touch</p>
            <div class="card-footer">
                <span class="price">Rp 75.000</span>
                <div class="btn-add">+</div>
            </div>
        </div>
    </div>

</body>
</html>
