<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        :root {
            --primary: #c19a6b;
            --bg-light: #fdfaf5;
            --white: #ffffff;
            --text-dark: #4a4238;
            --accent-orange: #ff8c00;
            --shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            background-color: var(--bg-light);
            color: var(--text-dark);
        }

        nav {
            background: var(--white);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-weight: bold;
            font-size: 24px;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .user-profile {
            background: #eeece7;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
        }

        .hero-banner {
            margin: 20px 5%;
            background: linear-gradient(135deg, #eaddca 0%, #f4eee5 100%);
            border-radius: 25px;
            padding: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content h1 {
            font-size: 32px;
            margin: 0;
            color: var(--text-dark);
        }

        .hero-content p {
            max-width: 450px;
            opacity: 0.8;
        }

        .btn-main {
            background: var(--primary);
            color: white;
            padding: 10px 25px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            margin-top: 15px;
        }

        .main-container {
            display: grid;
            gap: 25px;
            padding: 0 5% 40px;
        }

        .section-title {
            margin-bottom: 20px;
            font-size: 20px;
            border-left: 5px solid var(--primary);
            padding-left: 15px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: var(--white);
            border-radius: 20px;
            padding: 15px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: 0.3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-img {
            width: 100px;
            height: 100px;
            background: #f0f0f0;
            border-radius: 50%;
            margin: 0 auto 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
        }

        .product-name {
            font-weight: bold;
            margin: 10px 0 5px;
        }

        .product-price {
            color: var(--accent-orange);
            font-weight: bold;
        }

        .cart-panel {
            background: var(--white);
            border-radius: 25px;
            padding: 25px;
            box-shadow: var(--shadow);
            height: fit-content;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .total-section {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px dashed var(--primary);
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn-checkout {
            width: 100%;
            background: var(--accent-orange);
            color: white;
            padding: 15px;
            border-radius: 15px;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        @media (max-width: 900px) {
            .main-container { grid-template-columns: 1fr; }
            .hero-banner { flex-direction: column; text-align: center; }
        }
    </style>

</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <nav>
        <div class="logo">
            <span>🛒</span> POS System
        </div>
        <div class="nav-links">
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/category/food-beverage')}}">Food & Beverage</a>
            <a href="{{url('/category/beauty-health')}}">Beauty & Health</a>
            <a href="{{url('/category/home-care')}}">Home Care</a>
            <a href="{{url('/category/baby-kid')}}">Baby Kid</a>
        </div>
        <div class="user-profile">
            @admin.pos
        </div>
    </nav>

    <div class="hero-banner">
        <div class="hero-content">
            <h1>Halo, Selamat Bekerja!</h1>
            <p>Kelola penjualan hari ini dengan mudah. Temukan produk dengan cepat atau gunakan scanner barcode untuk memulai transaksi baru.</p>
            <button class="btn-main">Buka Shift Baru</button>
        </div>
        <div style="font-size: 100px;">📋</div>
    </div>

    <div class="main-container">
        <section>
            <h2 class="section-title">Katalog Produk Terpopuler</h2>
            <div class="product-grid">
                <div class="product-card">
                    <div class="product-img">🍔</div>
                    <div class="product-name">Cheese Burger</div>
                    <div class="product-price">Rp 35.000</div>
                </div>
                <div class="product-card">
                    <div class="product-img">🍕</div>
                    <div class="product-name">Italian Pizza</div>
                    <div class="product-price">Rp 85.000</div>
                </div>
                <div class="product-card">
                    <div class="product-img">☕</div>
                    <div class="product-name">Hot Cappuccino</div>
                    <div class="product-price">Rp 22.000</div>
                </div>
                <div class="product-card">
                    <div class="product-img">🥗</div>
                    <div class="product-name">Tomato Salad</div>
                    <div class="product-price">Rp 25.000</div>
                </div>
                <div class="product-card">
                    <div class="product-img">🍩</div>
                    <div class="product-name">Choco Donut</div>
                    <div class="product-price">Rp 12.000</div>
                </div>
                <div class="product-card">
                    <div class="product-img">🍗</div>
                    <div class="product-name">Fried Chicken</div>
                    <div class="product-price">Rp 18.000</div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
