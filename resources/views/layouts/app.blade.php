<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | LaporBanjir BPBD Bandung</title>
   <style>
    :root {
        --primary-red: #c2252b;
        --bg-body: #f4f5f7;
        --surface: #ffffff;
        --text-dark: #1e293b;
        --text-muted: #64748b;
        
        --waspada-bg: #eab308;
        --siaga-bg: #f97316;
        --awas-bg: #ef4444;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        background-color: var(--bg-body);
        color: var(--text-dark);
        line-height: 1.6;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    header {
        background-color: var(--primary-red);
        color: white;
        padding: 28px 20px 20px 20px;
        text-align: center;
    }

    .brand-logo {
        font-size: 1.8rem;
        font-weight: 800;
        letter-spacing: -0.5px;
    }

    .brand-desc {
        font-size: 0.85rem;
        opacity: 0.95;
        margin-top: 4px;
    }

    /* Navigasi Hitam */
    nav {
        background-color: #111111;
        display: flex;
        justify-content: center;
        gap: 24px;
        padding: 12px 0;
    }

    nav a {
        color: #ffffff;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.88rem;
        transition: opacity 0.2s ease;
    }

    nav a:hover {
        opacity: 0.8;
    }

    /* Area Utama */
    main {
        width: 100%;
        max-width: 900px;
        margin: 32px auto;
        padding: 0 20px;
        flex: 1;
    }

    h2 {
        font-size: 1.3rem;
        font-weight: 800;
        color: #000000;
        margin-bottom: 20px;
    }

    /* Layout Kartu Menurun (1 Kolom) */
    .laporan-grid {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Desain Kartu dengan Border Kiri Merah */
    .card {
        background: var(--surface);
        border: none;
        border-left: 5px solid var(--primary-red);
        border-radius: 12px;
        padding: 24px 28px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    }

    .card h3, .card .lokasi-title {
        color: var(--primary-red);
        font-size: 1.25rem;
        font-weight: 800;
        margin-bottom: 12px;
    }

    .card-info {
        display: flex;
        flex-direction: column;
        gap: 6px;
        font-size: 0.92rem;
        color: #000000;
    }

    .card-info span {
        font-weight: 700;
    }

    .waktu-lapor {
        font-size: 0.78rem;
        color: #94a3b8;
        margin-top: 6px;
    }

    /* Badge Status */
    .badge {
        padding: 3px 10px;
        border-radius: 12px;
        font-weight: 800;
        font-size: 0.72rem;
        color: #ffffff;
        display: inline-block;
        margin-left: 6px;
        text-transform: uppercase;
    }

    .bg-waspada { background-color: var(--waspada-bg); }
    .bg-siaga { background-color: var(--siaga-bg); }
    .bg-awas { background-color: var(--awas-bg); }

    /* Form Styling */
    .form-card {
        background: var(--surface);
        border-left: 5px solid var(--primary-red);
        border-radius: 12px;
        padding: 28px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-group label {
        display: block;
        margin-bottom: 6px;
        font-weight: 700;
        font-size: 0.88rem;
        color: #334155;
    }

    .form-group input {
        width: 100%;
        padding: 12px 16px;
        font-family: inherit;
        font-size: 0.9rem;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        background: #f8fafc;
        outline: none;
    }

    .form-group input:focus {
        border-color: var(--primary-red);
        background: #ffffff;
    }

    /* Tombol Pendek di Kiri */
    .btn {
        width: auto;
        display: inline-block;
        background: var(--primary-red);
        color: white;
        font-family: inherit;
        font-weight: 700;
        font-size: 0.9rem;
        padding: 10px 24px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 8px;
    }

    .btn:hover {
        opacity: 0.9;
    }

    /* Footer Hitam */
    footer {
        background-color: #111111;
        text-align: center;
        padding: 16px;
        font-size: 0.8rem;
        color: #94a3b8;
        margin-top: 40px;
    }
</style>

</head>
<body>

    <header>
        <h1>Sistem Pelaporan Banjir "LaporBanjir"</h1>
        <p>BPBD Kabupaten Bandung</p>
    </header>

    <nav>
        <a href="{{ route('lapor.create') }}">Buat Laporan</a>
        <a href="{{ route('lapor.index') }}">Daftar Laporan</a>
    </nav>
<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2026 BPBD Kabupaten Bandung - Sistem Pelaporan Banjir </p>
</footer>

</body>
</html>