<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | LaporBanjir BPBD</title>
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f8fafc;
            color: #0f172a;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .navbar-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand-logo {
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand-text-main {
            font-size: 1.15rem;
            font-weight: bold;
            color: #0284c7;
            line-height: 1.2;
        }

        .brand-text-sub {
            font-size: 0.75rem;
            color: #64748b;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        nav {
            display: flex;
            gap: 8px;
        }

        nav a {
            text-decoration: none;
            color: #475569;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        nav a:hover {
            color: #0284c7;
            background-color: #f1f5f9;
        }

        nav a.active {
            color: #0284c7;
            background-color: #e0f2fe;
        }

        main {
            max-width: 900px;
            width: 100%;
            margin: 30px auto;
            padding: 28px;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
            flex: 1;
        }

        .card {
            border: 1px solid #e2e8f0;
            padding: 18px;
            margin-bottom: 16px;
            border-radius: 10px;
            background-color: #ffffff;
        }

        .status {
            font-weight: bold;
            padding: 3px 10px;
            border-radius: 6px;
            font-size: 0.85rem;
            display: inline-block;
        }

        .bg-waspada { background-color: #fef3c7; color: #92400e; border: 1px solid #fde68a; }
        .bg-siaga { background-color: #ffedd5; color: #c2410c; border: 1px solid #fed7aa; }
        .bg-awas { background-color: #fee2e2; color: #991b1b; border: 1px solid #fecaca; }

        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; margin-bottom: 6px; font-weight: bold; font-size: 0.9rem; color: #334155; }
        .form-group input { width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; outline: none; }
        .form-group input:focus { border-color: #0284c7; }

        .btn { background: #0284c7; color: white; padding: 10px 20px; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; text-decoration: none; display: inline-block; font-size: 0.9rem; }
        .btn:hover { background: #0369a1; }

        footer {
            text-align: center;
            padding: 18px;
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
            color: #64748b;
            font-size: 0.85rem;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar-container">
            <a href="{{ route('lapor.index') }}" class="brand-logo">
                <div>
                    <div class="brand-text-main">LaporBanjir</div>
                    <div class="brand-text-sub">BPBD Kabupaten Bandung</div>
                </div>
            </a>

            <nav>
                <a href="{{ route('lapor.index') }}" class="{{ request()->routeIs('lapor.index') ? 'active' : '' }}">
                    Daftar Laporan
                </a>
                <a href="{{ route('lapor.create') }}" class="{{ request()->routeIs('lapor.create') ? 'active' : '' }}">
                    Buat Laporan
                </a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 BPBD Kabupaten Bandung — Portal Respon Cepat Bencana Banjir</p>
    </footer>

</body>
</html>