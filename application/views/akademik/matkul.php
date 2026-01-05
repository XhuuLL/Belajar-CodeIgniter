<div class="main-content">
    <section class="section">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="section-title mb-0">DATA MATA KULIAH</h2>
                <p class="text-muted">Kelola daftar mata kuliah tiap program studi</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="<?= base_url('MatkulC/tambah'); ?>" class="btn btn-primary shadow-sm">
                    <i class="fas fa-plus mr-2"></i> Tambah Mata Kuliah
                </a>
            </div>
        </div>

        <div class="row">
            <?php foreach($matkul as $m): 
                $nama_low = strtolower($m->nama_prodi);
                $border_color = 'border-secondary';
                $text_color   = 'text-secondary';
                if (strpos($nama_low, 'teknik') !== false || strpos($nama_low, 'informatika') !== false) {
                    $border_color = 'border-primary'; 
                    $text_color   = 'text-primary';
                } else if (strpos($nama_low, 'sistem informasi') !== false) {
                    $border_color = 'border-success'; 
                    $text_color   = 'text-success';
                } else if (strpos($nama_low, 'manajemen') !== false || strpos($nama_low, 'akuntansi') !== false) {
                    $border_color = 'border-warning';
                    $text_color   = 'text-warning';
                } else if (strpos($nama_low, 'hukum') !== false) {
                    $border_color = 'border-danger'; 
                    $text_color   = 'text-danger';
                }
            ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 <?= $border_color ?>" style="border-top: 5px solid;">
                    <div class="card-body">
                        <h6 class="text-muted mb-1"><?= $m->kode_matkul ?></h6>
                        <h5 class="font-weight-bold <?= $text_color ?>"><?= strtoupper($m->nama_matkul) ?></h5>
                        <div class="mt-2">
                            <span class="badge badge-light border"><?= $m->sks ?> SKS</span>
                            <span class="badge badge-dark">Semester <?= $m->semester ?></span>
                        </div>
                        <p class="small text-muted mt-2 mb-0">
                            <i class="fas fa-graduation-cap"></i> <?= $m->nama_prodi ?>
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-end">
                        <a href="<?= base_url('MatkulC/edit/'.$m->id_matkul) ?>" class="btn btn-sm btn-info mr-1">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= base_url('MatkulC/hapus/'.$m->id_matkul) ?>" class="btn btn-sm btn-danger" 
                           onclick="return confirm('Hapus matkul ini?')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>