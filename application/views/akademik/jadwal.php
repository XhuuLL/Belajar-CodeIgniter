<div class="main-content">
    <section class="section">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="section-title mb-0">JADWAL PERKULIAHAN</h2>
                <p class="text-muted">Manajemen waktu dan ruangan kuliah</p>
            </div>
            <div class="col-md-6 text-md-right mt-3 mt-md-0">
                <a href="<?= base_url('JadwalC/tambah'); ?>" class="btn btn-primary shadow-sm">
                    <i class="fas fa-calendar-plus mr-2"></i> Tambah Jadwal
                </a>
            </div>
        </div>

        <div class="row">
            <?php foreach($jadwal as $j): 
                $nama_low = strtolower($j->nama_prodi);
                $color = 'border-secondary';
                $text  = 'text-secondary';
                $bg_light = 'bg-light'; 

                if (strpos($nama_low, 'teknik') !== false || strpos($nama_low, 'informatika') !== false) {
                    $color = 'border-primary'; $text = 'text-primary';
                } else if (strpos($nama_low, 'sistem informasi') !== false) {
                    $color = 'border-success'; $text = 'text-success';
                } else if (strpos($nama_low, 'manajemen') !== false || strpos($nama_low, 'akuntansi') !== false) {
                    $color = 'border-warning'; $text = 'text-warning';
                } else if (strpos($nama_low, 'hukum') !== false) {
                    $color = 'border-danger'; $text = 'text-danger';
                }
            ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 <?= $color ?>" style="border-left: 5px solid;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="font-weight-bold <?= $text ?> mb-0"><?= strtoupper($j->hari) ?></h6>
                            <span class="badge badge-light border"><?= substr($j->jam_mulai,0,5) ?> - <?= substr($j->jam_selesai,0,5) ?></span>
                        </div>
                        
                        <h5 class="mt-3 mb-1 font-weight-bold <?= $text ?>"><?= strtoupper($j->nama_matkul) ?></h5>
                        <p class="small text-muted mb-2"><i class="fas fa-user-tie mr-1"></i> <?= $j->nama_dosen ?></p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                            <span class="small text-muted"><i class="fas fa-door-open mr-1 <?= $text ?>"></i> R. <?= $j->ruangan ?></span>
                            <span class="badge badge-dark"><?= $j->sks ?> SKS</span>
                        </div>
                    </div>
                    
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-end">
                        <a href="<?= base_url('JadwalC/edit/'.$j->id_jadwal) ?>" class="btn btn-sm btn-info mr-1 shadow-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= base_url('JadwalC/hapus/'.$j->id_jadwal) ?>" class="btn btn-sm btn-danger shadow-sm" 
                            onclick="return confirm('Hapus jadwal ini?')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>