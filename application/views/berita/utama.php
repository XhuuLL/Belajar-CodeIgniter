<div class="main-content">
    <section class="section">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="section-title mb-0">BERITA UTAMA</h2>
                <p class="text-muted">Informasi terbaru seputar kampus</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="<?= base_url('BeritaC/tambah'); ?>" class="btn btn-primary shadow-sm">
                    <i class="fas fa-plus mr-2"></i> Tambah Berita
                </a>
            </div>
        </div>

        <div class="row">
            <?php foreach($berita as $b): 
                // Logika warna border berdasarkan kategori
                $color = 'border-secondary';
                if($b->kategori == 'Akademik') $color = 'border-primary';
                else if($b->kategori == 'Pengumuman') $color = 'border-danger';
                else if($b->kategori == 'Beasiswa') $color = 'border-success';
            ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 <?= $color ?>" style="border-left: 5px solid; background-color: #2d3436;">
                    <div class="card-body">
                        <small class="text-info"><?= date('d M Y', strtotime($b->tanggal)) ?></small>
                        <h5 class="mt-2 font-weight-bold text-white"><?= strtoupper($b->judul) ?></h5>
                        <p class="text-muted small mt-2">
                            <?= substr(strip_tags($b->isi), 0, 100) ?>...
                        </p>
                        <span class="badge badge-light"><?= $b->kategori ?></span>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-end">
                        <a href="<?= base_url('BeritaC/edit/'.$b->id_berita) ?>" class="btn btn-sm btn-info mr-1 shadow-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('BeritaC/hapus/'.$b->id_berita) ?>" class="btn btn-sm btn-danger shadow-sm" onclick="return confirm('Hapus berita ini?')"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>