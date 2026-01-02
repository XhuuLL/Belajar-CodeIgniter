<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app-light.css">

    <style>
        :root {
            --primary-blue: #3b82f6;
            --dark-navy: #020617;
            --glass-bg: rgba(30, 41, 59, 0.7);
        }

        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow: hidden;
        }

        .login-wrapper {
            background: linear-gradient(rgba(2, 6, 23, 0.8), rgba(2, 6, 23, 0.85)), 
                        url('<?= base_url("public/img/muhadisetiabudi.jpg") ?>');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        /* Card Modern (Glassmorphism) */
        .login-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            text-align: center;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 4px solid rgba(59, 130, 246, 0.2);
            margin-bottom: 20px;
            object-fit: cover;
        }

        .login-card h2 {
            font-weight: 800;
            font-size: 1.5rem;
            margin-bottom: 8px;
            color: #ffffff;
        }

        .login-card p.subtitle {
            color: #94a3b8;
            font-size: 0.9rem;
            margin-bottom: 30px;
        }

        /* Input Styles */
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-control-lg {
            background: rgba(15, 23, 42, 0.6) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 12px !important;
            color: #fff !important;
            padding: 12px 15px !important;
            font-size: 0.95rem !important;
            transition: all 0.3s ease;
        }

        .form-control-lg:focus {
            border-color: var(--primary-blue) !important;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.2) !important;
            background: rgba(15, 23, 42, 0.8) !important;
        }

        /* Button Styles */
        .btn-login {
            background: var(--primary-blue);
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-weight: 700;
            font-size: 1rem;
            color: #fff;
            width: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.3);
            margin-top: 10px;
        }

        .btn-login:hover {
            background: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(59, 130, 246, 0.4);
        }

        /* Additional Links */
        .extra-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            font-size: 0.85rem;
            color: #94a3b8;
        }

        .extra-links a {
            color: var(--primary-blue);
            text-decoration: none;
            transition: color 0.3s;
        }

        .extra-links a:hover {
            color: #60a5fa;
        }

        .footer-text {
            margin-top: 40px;
            font-size: 0.75rem;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-card">
            <a href="<?= base_url() ?>">
                <img src="<?= base_url() ?>public/img/Umus.png" alt="Logo UMUS">
            </a>
            
            <h2>Login</h2>
            <p class="subtitle">Silakan masuk dengan akun Anda</p>

            <form action="<?php echo base_url('Auth/aksi_login'); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required autofocus>
                </div>
                
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                </div>

                <div class="extra-links">
                    <label class="m-0 cursor-pointer">
                        <input type="checkbox" value="remember-me" class="mr-1"> Ingat saya
                    </label>
                    <a href="<?php echo base_url('Auth/registrasi'); ?>">Belum Punya Akun?</a>
                </div>

                <button class="btn-login" type="submit">
                    Login <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </form>

            <p class="footer-text">
                © 2026 <strong>SIAKAD Ceritane</strong><br>
                Designed for Akhmad Fatkhul Arifin
            </p>
        </div>
    </div>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>