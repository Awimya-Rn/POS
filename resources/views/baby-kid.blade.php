<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby & Kid Care</title>
    <style>
        :root {
            --primary-yellow: #ffdf6b;
            --soft-blue: #a2d2ff;
            --soft-pink: #ffafcc;
            --bg-nursery: #fffcf2;
            --text-brown: #6d4c41;
            --white: #ffffff;
            --shadow-bouncy: 0 8px 0px rgba(255, 223, 107, 0.2);
        }

        body {
            font-family: 'Quicksand', 'Segoe UI', sans-serif;
            margin: 0;
            background-color: var(--bg-nursery);
            color: var(--text-brown);
        }

        nav {
            background: var(--white);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 4px dashed var(--primary-yellow);
        }

        .logo { font-weight: 900; font-size: 24px; color: var(--soft-blue); text-transform: uppercase; }
        .logo span { color: var(--soft-pink); }

        .nav-links a { text-decoration: none; color: var(--text-brown); margin: 0 15px; font-weight: 600; font-size: 14px; }

        .baby-header {
            margin: 30px 5%;
            background: var(--white);
            border: 3px solid var(--soft-blue);
            border-radius: 40px;
            padding: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .baby-header::before {
            content: "☁️"; position: absolute; top: 10px; right: 20%; font-size: 40px; opacity: 0.3;
        }

        .header-text h1 { margin: 0; font-size: 30px; color: var(--text-brown); }
        .header-text p { margin: 10px 0 0; color: #8d6e63; font-size: 15px; }

        .search-circle {
            background: var(--bg-nursery);
            border-radius: 30px;
            padding: 12px 25px;
            display: flex;
            align-items: center;
            width: 300px;
            border: 2px solid var(--soft-blue);
        }

        .search-circle input { border: none; background: none; outline: none; width: 100%; margin-left: 10px; }

        .category-wrapper {
            margin: 20px 5%;
            display: flex;
            gap: 15px;
            overflow-x: auto;
        }

        .cat-card {
            background: var(--white);
            min-width: 100px;
            padding: 15px;
            border-radius: 25px;
            text-align: center;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 4px 0px #eee;
        }

        .cat-card:hover, .cat-card.active {
            background: var(--soft-blue);
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 8px 0px #8cc2f2;
        }

        .cat-card i { display: block; font-size: 24px; margin-bottom: 5px; }

        .product-grid {
            margin: 30px 5%;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 25px;
        }

        .toy-card {
            background: var(--white);
            border-radius: 35px;
            padding: 25px;
            text-align: center;
            position: relative;
            transition: 0.3s;
            border: 2px solid transparent;
        }

        .toy-card:hover {
            border-color: var(--soft-pink);
            transform: rotate(2deg);
        }

        .toy-img-circle {
            width: 130px;
            height: 130px;
            background: var(--bg-nursery);
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            border: 5px solid var(--white);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .toy-card h3 { font-size: 18px; margin: 10px 0; }
        .age-badge {
            display: inline-block;
            background: var(--soft-pink);
            color: white;
            font-size: 11px;
            padding: 3px 12px;
            border-radius: 15px;
            margin-bottom: 10px;
        }

        .price-box {
            font-size: 20px;
            font-weight: 800;
            color: var(--text-brown);
            margin-top: 10px;
        }

        .add-toy-btn {
            margin-top: 15px;
            background: var(--primary-yellow);
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 20px;
            font-weight: bold;
            color: var(--text-brown);
            cursor: pointer;
            transition: 0.2s;
        }

        .add-toy-btn:hover { background: var(--soft-blue); color: white; }
    </style>
</head>
<body>

    <nav>
        <div class="logo">Little<span>Joy</span> POS</div>
        <div class="nav-links">
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/category/food-beverage')}}">Food & Beverage</a>
            <a href="{{url('/category/beauty-health')}}">Beauty & Health</a>
            <a href="{{url('/category/home-care')}}">Home Care</a>
            <a href="{{url('/category/baby-kid')}}">Baby Kid</a>
        </div>
        <div style="font-size: 20px;">🧸</div>
    </nav>

    <div class="baby-header">
        <div class="header-text">
            <h1>Dunia Si Kecil</h1>
            <p>Kelola stok mainan, pakaian, dan kebutuhan nutrisi anak dengan ceria.</p>
        </div>
        <div class="search-circle">
            <span>🔍</span>
            <input type="text" placeholder="Cari mainan atau susu...">
        </div>
    </div>

    <div class="category-wrapper">
        <div class="cat-card active">
            <i>🍼</i> Nutrisi
        </div>
        <div class="cat-card">
            <i>🧸</i> Mainan
        </div>
        <div class="cat-card">
            <i>👕</i> Pakaian
        </div>
        <div class="cat-card">
            <i>🧼</i> Mandi
        </div>
        <div class="cat-card">
            <i>🛏️</i> Kamar Tidur
        </div>
        <div class="cat-card">
            <i>📚</i> Buku
        </div>
    </div>

    <div class="product-grid">
        <div class="toy-card">
            <div class="toy-img-circle">🥛</div>
            <span class="age-badge">0-6 Bulan</span>
            <h3>Susu Formula Gold</h3>
            <div class="price-box">Rp 215.000</div>
            <button class="add-toy-btn">Tambah ke Keranjang</button>
        </div>

        <div class="toy-card">
            <div class="toy-img-circle">🦖</div>
            <span class="age-badge">3+ Tahun</span>
            <h3>Mainan Dinosaurus</h3>
            <div class="price-box">Rp 45.000</div>
            <button class="add-toy-btn">Tambah ke Keranjang</button>
        </div>

        <div class="toy-card">
            <div class="toy-img-circle">👶</div>
            <span class="age-badge">Semua Umur</span>
            <h3>Pampers Ultra Soft</h3>
            <div class="price-box">Rp 85.000</div>
            <button class="add-toy-btn">Tambah ke Keranjang</button>
        </div>

        <div class="toy-card">
            <div class="toy-img-circle">🧱</div>
            <span class="age-badge">5+ Tahun</span>
            <h3>Block Creative Set</h3>
            <div class="price-box">Rp 120.000</div>
            <button class="add-toy-btn">Tambah ke Keranjang</button>
        </div>

        <div class="toy-card">
            <div class="toy-img-circle">🧴</div>
            <span class="age-badge">0+ Bulan</span>
            <h3>Baby Oil Lavender</h3>
            <div class="price-box">Rp 32.000</div>
            <button class="add-toy-btn">Tambah ke Keranjang</button>
        </div>

        <div class="toy-card">
            <div class="toy-img-circle">👟</div>
            <span class="age-badge">1-2 Tahun</span>
            <h3>Sepatu Bunyi Cit</h3>
            <div class="price-box">Rp 65.000</div>
            <button class="add-toy-btn">Tambah ke Keranjang</button>
        </div>
    </div>

</body>
</html>
