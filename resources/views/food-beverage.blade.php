<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food & Beverage</title>

    <style>
        :root {
            --primary: #c19a6b;
            --bg-light: #fdfaf5;
            --white: #ffffff;
            --text-dark: #4a4238;
            --accent-orange: #ff8c00;
            --soft-gray: #eeece7;
            --shadow: 0 8px 20px rgba(193, 154, 107, 0.15);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        }

        .logo { font-weight: bold; font-size: 24px; color: var(--primary); }
        .nav-links { display: flex; gap: 20px; }
        .nav-links a { text-decoration: none; color: var(--text-dark); font-weight: 500; }
        .active { color: var(--primary) !important; border-bottom: 2px solid var(--primary); }

        .page-header {
            margin: 30px 5%;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .header-title h1 { margin: 0; font-size: 28px; }
        .header-title p { margin: 5px 0 0; opacity: 0.7; }

        .search-bar {
            background: var(--white);
            padding: 10px 20px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            width: 300px;
        }

        .search-bar input {
            border: none;
            outline: none;
            width: 100%;
            margin-left: 10px;
            background: transparent;
        }

        .categories {
            margin: 0 5%;
            display: flex;
            gap: 15px;
            overflow-x: auto;
            padding-bottom: 10px;
        }

        .cat-pill {
            background: var(--white);
            padding: 8px 20px;
            border-radius: 20px;
            white-space: nowrap;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: 0.3s;
            border: 1px solid transparent;
        }

        .cat-pill.active-cat {
            background: var(--primary);
            color: white;
        }

        .cat-pill:hover { border-color: var(--primary); }

        .menu-container {
            margin: 30px 5%;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 25px;
        }

        .menu-card {
            background: var(--white);
            border-radius: 25px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s;
            position: relative;
        }

        .menu-card:hover { transform: translateY(-8px); }

        .image-box {
            height: 180px;
            background: var(--soft-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .image-box span { font-size: 70px; }

        .badge-type {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255,255,255,0.9);
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
            color: var(--primary);
        }

        .content-box { padding: 20px; }
        .content-box h3 { margin: 0 0 5px; font-size: 18px; }
        .content-box .desc { font-size: 13px; color: #888; margin-bottom: 15px; height: 36px; overflow: hidden; }

        .price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price { font-weight: bold; font-size: 18px; color: var(--accent-orange); }

        .add-btn {
            background: var(--soft-gray);
            width: 35px;
            height: 35px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .add-btn:hover { background: var(--primary); color: white; }

        .splash {
            position: fixed;
            z-index: -1;
            opacity: 0.4;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">🍱 Food Beverage</div>
        <div class="nav-links">
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/category/food-beverage')}}">Food & Beverage</a>
            <a href="{{url('/category/beauty-health')}}">Beauty & Health</a>
            <a href="{{url('/category/home-care')}}">Home Care</a>
            <a href="{{url('/category/baby-kid')}}">Baby Kid</a>
        </div>
        <div style="background: var(--primary); color: white; padding: 5px 15px; border-radius: 15px; font-size: 13px;">
            Open Table: 12
        </div>
    </nav>

    <header class="page-header">
        <div class="header-title">
            <h1>Menu Gallery</h1>
            <p>Kelola dan pilih menu terbaik untuk pelanggan Anda.</p>
        </div>
        <div class="search-bar">
            <span>🔍</span>
            <input type="text" placeholder="Cari makanan atau minuman...">
        </div>
    </header>

    <div class="categories">
        <div class="cat-pill active-cat">Semua Menu</div>
        <div class="cat-pill">Main Course</div>
        <div class="cat-pill">Appetizer</div>
        <div class="cat-pill">Coffee & Latte</div>
        <div class="cat-pill">Fresh Juice</div>
        <div class="cat-pill">Dessert</div>
    </div>

    <div class="menu-container">
        <div class="menu-card">
            <div class="image-box">
                <div class="badge-type">Top Seller</div>
                <span>🍜</span>
            </div>
            <div class="content-box">
                <h3>Spicy Ramen</h3>
                <p class="desc">Ramen kuah pedas dengan topping telur dan daging sapi premium.</p>
                <div class="price-row">
                    <span class="price">Rp 45.000</span>
                    <div class="add-btn">+</div>
                </div>
            </div>
        </div>

        <div class="menu-card">
            <div class="image-box">
                <span>🍹</span>
            </div>
            <div class="content-box">
                <h3>Tropical Mojito</h3>
                <p class="desc">Minuman segar campuran daun mint, jeruk nipis, dan soda.</p>
                <div class="price-row">
                    <span class="price">Rp 28.000</span>
                    <div class="add-btn">+</div>
                </div>
            </div>
        </div>

        <div class="menu-card">
            <div class="image-box">
                <div class="badge-type">Chef Pick</div>
                <span>🥩</span>
            </div>
            <div class="content-box">
                <h3>Wagyu Steak</h3>
                <p class="desc">Daging Wagyu A5 panggang dengan saus jamur truffle.</p>
                <div class="price-row">
                    <span class="price">Rp 150.000</span>
                    <div class="add-btn">+</div>
                </div>
            </div>
        </div>

        <div class="menu-card">
            <div class="image-box">
                <span>☕</span>
            </div>
            <div class="content-box">
                <h3>Iced Caramel Latte</h3>
                <p class="desc">Kopi espresso dengan susu segar dan sirup karamel manis.</p>
                <div class="price-row">
                    <span class="price">Rp 32.000</span>
                    <div class="add-btn">+</div>
                </div>
            </div>
        </div>

        <div class="menu-card">
            <div class="image-box">
                <span>🍰</span>
            </div>
            <div class="content-box">
                <h3>Cheese Cake</h3>
                <p class="desc">Kue keju lembut dengan selai strawberry di atasnya.</p>
                <div class="price-row">
                    <span class="price">Rp 35.000</span>
                    <div class="add-btn">+</div>
                </div>
            </div>
        </div>

        <div class="menu-card">
            <div class="image-box">
                <span>🌮</span>
            </div>
            <div class="content-box">
                <h3>Beef Tacos</h3>
                <p class="desc">Tiga lapis taco renyah isi daging sapi dan salsa segar.</p>
                <div class="price-row">
                    <span class="price">Rp 40.000</span>
                    <div class="add-btn">+</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
