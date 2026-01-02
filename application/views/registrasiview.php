<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIAKAD UMUS - Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary-blue: #3b82f6; --dark-bg: #020617; }
        body { 
            background: linear-gradient(rgba(2, 6, 23, 0.8), rgba(2, 6, 23, 0.9)), url('<?= base_url("public/img/muhadisetiabudi.jpg") ?>');
            background-size: cover; background-position: center; height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif; display: flex; align-items: center; justify-content: center; margin: 0;
        }
        .reg-card {
            background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 24px;
            padding: 40px; width: 100%; max-width: 450px; text-align: center; color: white;
        }
        .form-control {
            width: 100%; padding: 12px; margin: 10px 0; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);
            background: rgba(15, 23, 42, 0.6); color: white; box-sizing: border-box;
        }
        .btn-reg {
            background: var(--primary-blue); color: white; border: none; width: 100%;
            padding: 14px; border-radius: 12px; font-weight: 700; cursor: pointer; margin-top: 20px;
        }
        .error-msg { color: #f87171; font-size: 0.8rem; text-align: left; }
    </style>
</head>
<body>
    <div class="reg-card">
        <img src="<?= base_url('public/img/Umus.png') ?>" height="80" style="margin-bottom: 20px;">
        <h2>Buat Akun Baru</h2>
        <p style="color: #94a3b8;">Daftar untuk akses portal SIAKAD</p>

        <?php echo validation_errors('<p class="error-msg">', '</p>'); ?>

        <form action="<?= base_url('auth/aksi_registrasi') ?>" method="post">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi Password" required>
            
            <button type="submit" class="btn-reg">REGISTRASI</button>
        </form>
        
        <p style="margin-top: 20px; font-size: 0.9rem;">
            Sudah punya akun? <a href="<?= base_url('Auth') ?>" style="color: var(--primary-blue); text-decoration: none;">Masuk di sini</a>
        </p>
    </div>
</body>
</html>