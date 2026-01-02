<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    :root {
        --primary-blue: #3b82f6; 
        --dark-bg: #020617; 
        --card-bg: rgba(30, 41, 59, 0.7);
        --footer-bg: #0f172a;
        --container-padding: 0 4%; 
    }

    body {
        background-color: var(--dark-bg);
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #ffffff;
        margin: 0;
        overflow-x: hidden;
    }

    .navbar-siakad {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        padding: 25px 0;
        background: linear-gradient(to bottom, rgba(2, 6, 23, 0.9), transparent);
        backdrop-filter: blur(10px);
    }

    .nav-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: var(--container-padding);
    }

    .nav-brand-wrapper {
        display: flex;
        align-items: center;
        gap: 15px;
        text-decoration: none;
    }

    .nav-brand-text {
        color: #ffffff;
        font-weight: 700;
        font-size: 1.1rem;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .nav-brand-text span {
        color: var(--primary-blue);
    }

    .nav-links {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 35px;
    }

    .nav-links li a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        transition: 0.3s;
    }

    .nav-links li a:hover, .nav-links li a.active {
        color: var(--primary-blue);
    }

    .nav-badge {
        background: var(--primary-blue);
        font-size: 0.65rem;
        padding: 2px 8px;
        border-radius: 4px;
        color: white;
        margin-left: 5px;
        font-weight: 700;
    }

    /* --- TOMBOL DAFTAR DI NAVBAR --- */
    .btn-nav-register {
        background-color: var(--primary-blue);
        color: #ffffff !important;
        padding: 10px 24px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        border: 1px solid var(--primary-blue);
        display: inline-flex;
        align-items: center;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }

    .btn-nav-register:hover {
        background-color: transparent;
        color: var(--primary-blue) !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(59, 130, 246, 0.4);
    }

    /* --- HERO SECTION --- */
    .hero-container {
        position: relative;
        min-height: 100vh;
        background: linear-gradient(rgba(2, 6, 23, 0.75), rgba(2, 6, 23, 0.9)), 
                    url('<?= base_url("public/img/muhadisetiabudi.jpg") ?>'); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 0 20px;
    }

    .badge-modern {
        background: rgba(59, 130, 246, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(59, 130, 246, 0.3);
        padding: 10px 25px;
        border-radius: 50px;
        font-size: 0.85rem;
        margin-bottom: 30px;
        color: var(--primary-blue);
        font-weight: 600;
    }

    .hero-title {
        font-size: 4.5rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 25px;
        letter-spacing: -2px;
    }

    .hero-title span {
        color: var(--primary-blue);
        text-shadow: 0 0 30px rgba(59, 130, 246, 0.4);
    }

    .hero-subtitle {
        font-size: 1.2rem;
        color: #94a3b8;
        max-width: 850px;
        margin-bottom: 40px;
        line-height: 1.6;
    }

    .btn-group-custom {
        display: flex;
        gap: 20px;
    }

    .btn-main {
        background: var(--primary-blue);
        color: #fff;
        padding: 16px 40px;
        border-radius: 14px;
        font-weight: 700;
        transition: 0.4s ease;
        border: none;
        box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
        text-decoration: none;
    }

    .btn-main:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(59, 130, 246, 0.4);
        background: #2563eb;
    }

    .btn-outline-white {
        border: 1px solid rgba(255, 255, 255, 0.15);
        background: rgba(255, 255, 255, 0.03);
        color: #fff;
        padding: 16px 40px;
        border-radius: 14px;
        transition: 0.3s;
        backdrop-filter: blur(5px);
        text-decoration: none;
        font-weight: 600;
    }

    .btn-outline-white:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: #fff;
    }

    .features-wrapper {
        padding: 100px 4%;
    }

    .glass-card {
        background: var(--card-bg);
        border: 1px solid rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(20px);
        padding: 50px;
        border-radius: 30px;
        height: 100%;
        transition: 0.4s ease;
    }

    .glass-card:hover {
        border-color: var(--primary-blue);
        transform: translateY(-10px);
        background: rgba(30, 41, 59, 0.9);
    }

    .icon-circle {
        width: 70px;
        height: 70px;
        background: rgba(59, 130, 246, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
        color: var(--primary-blue);
        font-size: 1.8rem;
    }

    /* --- FOOTER --- */
    footer {
        background-color: var(--footer-bg);
        padding: 100px 4% 40px;
        border-top: 1px solid rgba(59, 130, 246, 0.1);
    }

    .social-link {
        width: 48px;
        height: 48px;
        background: rgba(255, 255, 255, 0.03);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 14px;
        margin-right: 15px;
        color: #94a3b8;
        transition: 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .social-link:hover {
        background: var(--primary-blue);
        color: #fff;
        transform: rotate(10deg);
    }

    @media (max-width: 992px) {
        .nav-links, .btn-nav-register { display: none; }
        .hero-title { font-size: 3rem; }
        .btn-group-custom { flex-direction: column; width: 100%; }
        .btn-outline-white { margin-left: 0; }
    }
</style>

<nav class="navbar-siakad">
    <div class="container-fluid nav-content">
        <a href="#" class="nav-brand-wrapper">
            <img src="<?= base_url('public/img/Umus.png') ?>" height="40">
            <div class="nav-brand-text">Sistem Informasi <span>Akademik</span></div>
        </a>
        <ul class="nav-links">
            <li><a href="<?= base_url('Admin') ?>" class="active">Beranda</a></li>
            <li><a href="https://pmb.umus.ac.id/">Berita <span class="nav-badge">New</span></a></li>
            <li><a href="https://pmb.umus.ac.id/fakultas/">Fakultas</a></li>
            <li><a href="https://pmb.umus.ac.id/rincian-biaya/">Biaya</a></li>
            <li><a href="https://umus.ac.id/umus-fest-2025/">UMUS FEST 2025</a></li>
        </ul>
        <div class="nav-right-actions">
            <a href="<?= base_url('Auth/registrasi') ?>" class="btn-nav-register">
                <i class=""></i> Registrasi
            </a>
        </div>
    </div>
</nav>

<div class="hero-container">
    <div class="badge-modern">
        <i class="fas fa-shield-alt mr-2"></i> Sistem Terintegrasi & Akurat
    </div>
    <h1 class="hero-title">
        Portal Akademik <br> <span>SIAKAD</span> Digital
    </h1>
    <p class="hero-subtitle">
        Optimalkan manajemen perkuliahan dengan platform yang <span>transparan</span>, 
        <span>aman</span>, dan <span>efisien</span>. Terhubung secara langsung dengan seluruh layanan kampus dalam satu genggaman.
    </p>
    <div class="btn-group-custom">
        <a href="<?= base_url('Auth') ?>" class="btn btn-main">
            <i class="fas fa-door-open mr-2"></i> Masuk Akun
        </a>
        <a href="https://umus.ac.id/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-white">
            Sumber Informasi
        </a>
    </div>

    <div class="container-fluid mt-5 pt-5">
        <div class="row text-center" style="padding: 0 5%;">
            <div class="col-4">
                <h3 class="font-weight-bold mb-0" style="color: var(--primary-blue);">100%</h3>
                <p class="small text-muted text-uppercase tracking-widest">Keamanan Data</p>
            </div>
            <div class="col-4">
                <h3 class="font-weight-bold mb-0" style="color: var(--primary-blue);">24/7</h3>
                <p class="small text-muted text-uppercase tracking-widest">Layanan Online</p>
            </div>
            <div class="col-4">
                <h3 class="font-weight-bold mb-0" style="color: var(--primary-blue);">Real-time</h3>
                <p class="small text-muted text-uppercase tracking-widest">Sinkronisasi</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid features-wrapper">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="glass-card">
                <div class="icon-circle"><i class="fas fa-book-reader"></i></div>
                <h4 class="font-weight-bold mb-3">KRS Online</h4>
                <p class="text-muted">Pengisian rencana studi lebih cepat dengan sistem pemilihan jadwal yang cerdas dan teratur bagi seluruh mahasiswa.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="glass-card">
                <div class="icon-circle"><i class="fas fa-wallet"></i></div>
                <h4 class="font-weight-bold mb-3">Keuangan</h4>
                <p class="text-muted">Pantau status tagihan UKT dan riwayat pembayaran Anda secara transparan dan detail melalui sistem billing otomatis.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="glass-card">
                <div class="icon-circle"><i class="fas fa-award"></i></div>
                <h4 class="font-weight-bold mb-3">Hasil Studi</h4>
                <p class="text-muted">Lihat transkrip nilai dan KHS setiap semester lengkap dengan analisis grafik perkembangan IPK Anda.</p>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="footer-logo mb-4">
                    <img src="<?= base_url('public/img/Umus.png') ?>" height="50">
                    <span class="ml-2">SIAKAD <span>UMUS</span></span>
                </div>
                <p style="color: #94a3b8; line-height: 1.8; font-size: 1.05rem;" class="pr-lg-5">
                    Mewujudkan ekosistem digital akademik yang inovatif bagi seluruh civitas akademika UMUS Brebes. Mengedepankan kemudahan akses dan akurasi data informasi.
                </p>
                <div class="mt-4">
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h6 class="font-weight-bold text-uppercase mb-4" style="letter-spacing: 2px;">Layanan</h6>
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="https://umus.ac.id/visi-dan-misi-universitas-muhadi-setiabudi/" class="text-muted text-decoration-none">Visi & Misi Kampus</a></li>
                    <li class="mb-3"><a href="https://umus.ac.id/pimpinan-universitas/" class="text-muted text-decoration-none">Struktur Pimpinan</a></li>
                    <li class="mb-3"><a href="https://umus.ac.id/informasi/" class="text-muted text-decoration-none">Pusat Informasi Publik</a></li>
                    <li class="mb-3"><a href="https://umus.ac.id/brosur-pendaftaran/" class="text-muted text-decoration-none">Pendaftaran Mahasiswa</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <h6 class="font-weight-bold text-uppercase mb-4" style="letter-spacing: 2px;">Hubungi Kami</h6>
                <ul class="list-unstyled">
                    <li class="d-flex mb-4">
                        <i class="fas fa-map-marker-alt mr-3 mt-1" style="font-size: 1.2rem; color: var(--primary-blue);"></i> 
                        <span class="text-muted">Jl. Pangeran Diponegoro, KM2 Pesantunan, Brebes, Jawa Tengah, Indonesia.</span>
                    </li>
                    <li class="d-flex mb-4">
                        <i class="fas fa-envelope mr-3" style="font-size: 1.2rem; color: var(--primary-blue);"></i> 
                        <span class="text-muted">umus@umus.ac.id</span>
                    </li>
                    <li class="d-flex">
                        <i class="fas fa-phone-alt mr-3" style="font-size: 1.2rem; color: var(--primary-blue);"></i> 
                        <span class="text-muted">+62 283 123 456</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mt-5 pt-4" style="border-top: 1px solid rgba(255,255,255,0.05);">
            <div class="col-md-6 text-md-left text-center">
                <p class="small text-muted">© 2026 <strong>SIAKAD UMUS CERITANE</strong>. Designed for Akhmad Fatkhul Arifin.</p>
            </div>
            <div class="col-md-6 text-md-right text-center">
                <a href="#" class="small text-muted mx-3 text-decoration-none">Kebijakan Privasi</a>
                <a href="#" class="small text-muted mx-3 text-decoration-none">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>