<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Transaksi</title>
    <style>
        :root {
            --primary: #4a90e2;
            --secondary: #f5f7fa;   
            --accent: #2ecc71;
            --text-dark: #2c3e50;
            --text-muted: #95a5a6;
            --white: #ffffff;
            --danger: #e74c3c;
            --shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: var(--secondary);
            color: var(--text-dark);
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background: var(--white);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .logo { font-weight: bold; font-size: 20px; color: var(--primary); }

        main {
            display: flex;
            flex: 1;
            overflow: hidden;
            gap: 20px;
            padding: 20px;
        }

        .product-section {
            flex: 2;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .search-bar {
            background: var(--white);
            padding: 15px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            display: flex;
            gap: 10px;
        }

        .search-bar input {
            flex: 1;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            outline: none;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 15px;
            overflow-y: auto;
            padding-bottom: 20px;
        }

        .product-card {
            background: var(--white);
            padding: 15px;
            border-radius: 15px;
            text-align: center;
            box-shadow: var(--shadow);
            cursor: pointer;
            transition: 0.2s;
            border: 2px solid transparent;
        }

        .product-card:hover {
            border-color: var(--primary);
            transform: translateY(-3px);
        }

        .product-icon { font-size: 40px; margin-bottom: 10px; display: block; }

        .cart-section {
            flex: 1;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .cart-header {
            padding: 20px;
            border-bottom: 1px solid #eee;
            background: var(--white);
        }

        .cart-items {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #eee;
        }

        .cart-footer {
            padding: 20px;
            background: #fcfcfc;
            border-top: 1px solid #eee;
        }

        .summary-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .total {
            font-size: 20px;
            font-weight: bold;
            color: var(--primary);
            margin-top: 10px;
            border-top: 2px solid #eee;
            padding-top: 10px;
        }

        .btn-checkout {
            width: 100%;
            background: var(--primary);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
        }

        .btn-checkout:hover { background: #357abd; }

        .qty-control {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .qty-btn {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            border: 1px solid #ddd;
            background: white;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">🚀 SmartPOS System</div>
        <div class="user-info">
            <span>Cashier: <strong>Admin</strong></span>
        </div>
    </nav>

    <main>
        <section class="product-section">
            <div class="search-bar">
                <input type="text" placeholder="Scan barcode atau cari nama produk...">
                <button style="background: var(--primary); color: white; border: none; padding: 0 20px; border-radius: 8px;">Cari</button>
            </div>

            <div class="product-grid">
                <div class="product-card">
                    <span class="product-icon">🍔</span>
                    <strong>Beef Burger</strong>
                    <div style="color: var(--accent); font-weight: bold;">Rp 35.000</div>
                </div>
                <div class="product-card">
                    <span class="product-icon">🍟</span>
                    <strong>French Fries</strong>
                    <div style="color: var(--accent); font-weight: bold;">Rp 15.000</div>
                </div>
                <div class="product-card">
                    <span class="product-icon">🥤</span>
                    <strong>Cola Ice</strong>
                    <div style="color: var(--accent); font-weight: bold;">Rp 10.000</div>
                </div>
                <div class="product-card">
                    <span class="product-icon">🧴</span>
                    <strong>Face Wash</strong>
                    <div style="color: var(--accent); font-weight: bold;">Rp 25.000</div>
                </div>
                <div class="product-card">
                    <span class="product-icon">🧸</span>
                    <strong>Teddy Bear</strong>
                    <div style="color: var(--accent); font-weight: bold;">Rp 55.000</div>
                </div>
                <div class="product-card">
                    <span class="product-icon">☕</span>
                    <strong>Hot Latte</strong>
                    <div style="color: var(--accent); font-weight: bold;">Rp 22.000</div>
                </div>
            </div>
        </section>

        <section class="cart-section">
            <div class="cart-header">
                <h3>Current Order #8821</h3>
                <span style="font-size: 12px; color: var(--text-muted);">Senin, 16 Februari 2026</span>
            </div>

            <div class="cart-items">
                <div class="cart-item">
                    <div>
                        <strong>Beef Burger</strong><br>
                        <small>Rp 35.000</small>
                    </div>
                    <div class="qty-control">
                        <button class="qty-btn">-</button>
                        <span>1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <strong>Rp 35.000</strong>
                </div>

                <div class="cart-item">
                    <div>
                        <strong>Cola Ice</strong><br>
                        <small>Rp 10.000</small>
                    </div>
                    <div class="qty-control">
                        <button class="qty-btn">-</button>
                        <span>2</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <strong>Rp 20.000</strong>
                </div>
            </div>

            <div class="cart-footer">
                <div class="summary-line">
                    <span>Subtotal</span>
                    <span>Rp 55.000</span>
                </div>
                <div class="summary-line">
                    <span>Pajak (10%)</span>
                    <span>Rp 5.500</span>
                </div>
                <div class="total summary-line">
                    <span>TOTAL</span>
                    <span>Rp 60.500</span>
                </div>

                <button class="btn-checkout">PROSES PEMBAYARAN</button>
                <button style="width: 100%; background: none; border: 1px solid var(--danger); color: var(--danger); padding: 10px; border-radius: 10px; margin-top: 10px; cursor: pointer;">Batalkan Pesanan</button>
            </div>
        </section>
    </main>

</body>
</html>
