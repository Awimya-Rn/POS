<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - {{ $name }}</title>
    <style>
        :root {
            --primary-color: #c19a6b;
            --bg-light: #fdfaf5;
            --white: #ffffff;
            --text-dark: #4a4238;
            --shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background-color: var(--bg-light);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-card {
            background: var(--white);
            width: 350px;
            padding: 40px;
            border-radius: 30px;
            text-align: center;
            box-shadow: var(--shadow);
        }

        .avatar {
            width: 100px;
            height: 100px;
            background: var(--primary-color);
            color: white;
            font-size: 40px;
            line-height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px;
            font-weight: bold;
        }

        h1 { font-size: 24px; color: var(--text-dark); margin: 10px 0; }
        p { color: #888; font-size: 14px; margin-bottom: 30px; }

        .info-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 15px;
            margin-bottom: 20px;
            text-align: left;
        }

        .info-label { font-size: 12px; color: #aaa; text-transform: uppercase; }
        .info-value { font-weight: bold; color: var(--text-dark); display: block; }

        .btn-back {
            display: inline-block;
            text-decoration: none;
            background: var(--primary-color);
            color: white;
            padding: 10px 25px;
            border-radius: 12px;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-back:hover { opacity: 0.8; }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="avatar">{{ substr($name, 0, 1) }}</div>

        <h1>Profil Pengguna</h1>
        <p>Detail identitas akun sistem POS</p>

        <div class="info-box">
            <span class="info-label">ID User</span>
            <span class="info-value">#{{ $id }}</span>
        </div>

        <div class="info-box">
            <span class="info-label">Nama Lengkap</span>
            <span class="info-value">{{ $name }}</span>
        </div>

        <a href="{{ url('/') }}" class="btn-back">Kembali ke Dashboard</a>
    </div>

</body>
</html>
