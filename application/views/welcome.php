<div class="container mt-4 text-white">
    <h3 class="mb-4">Welcome to My Web Application !</h3>

    <div class="row">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm mb-4" style="background-color: #2c3034;">
                <div class="card-body">
                    <h5 class="card-title text-warning font-weight-bold">What is Lorem Ipsum?</h5>
                    <div class="row align-items-center">
                        <div class="col-md-3 text-center">
                            <img src="<?= base_url('public/img/Umus.png') ?>" class="img-fluid rounded" style="max-height: 120px;">
                        </div>
                        <div class="col-md-9">
                            <p style="font-size: 0.9rem; text-align: justify; color: #ced4da;">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                            <a href="https://umus.ac.id" target="_blank" class="btn btn-primary btn-sm">Sumber UMUS</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm" style="background-color: #2c3034;">
                <div class="card-body">
                    <h5 class="card-title text-info font-weight-bold"> <i class="fas fa-bullhorn mr-2"></i>Pengumuman</h5>
                    <p style="color: #ced4da;">Isi pengumuman terbaru Anda di sini untuk memberikan informasi penting kepada seluruh pengguna sistem.</p>
                    <a href="#" class="btn btn-outline-info btn-sm">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm mb-4" style="background-color: #2c3034;">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Pendaftaran</h5>
                    <p class="small" style="color: #ced4da;">Silahkan klik tombol di bawah untuk melakukan pendaftaran mahasiswa baru tahun akademik 2025/2026.</p>
                    <a href="<?= base_url('login'); ?>" class="btn btn-primary btn-block shadow">Daftar disini</a>
                </div>
            </div>

            <div class="card border-0 shadow-sm" style="background-color: #2c3034;">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Link Download</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="#" class="text-info text-decoration-none"> 
                                <i class="fas fa-file-pdf mr-2"></i> Download Persyaratan
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-info text-decoration-none"> 
                                <i class="fas fa-file-alt mr-2"></i> Download Pengumuman
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>