<div class="main-content">
    <section class="section">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="section-title mb-0">DRAFT BERITA</h2>
                <p class="text-muted">Daftar berita yang belum dipublikasikan</p>
            </div>
        </div>

        <div class="row">
            <?php if(empty($berita)): ?>
                <div class="col-12 text-center mt-5">
                    <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
                    <p class="text-muted">Tidak ada draft berita saat ini.</p>
                </div>
            <?php endif; ?>

            <?php foreach($berita as $b): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 border-warning" style="border-left: 5px solid; background-color: #2d3436;">
                    <div class="card-body">
                        <small class="text-warning font-weight-bold">DRAFT</small>
                        <h5 class="mt-2 font-weight-bold text-white"><?= strtoupper($b->judul) ?></h5>
                        <p class="text-muted small mt-2">
                            <?= substr(strip_tags($b->isi), 0, 80) ?>...
                        </p>
                        <span class="badge badge-secondary"><?= $b->kategori ?></span>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center">
                        <a href="<?= base_url('BeritaC/publish/'.$b->id_berita) ?>" 
                           class="btn btn-sm btn-success shadow-sm" title="Publikasikan Sekarang">
                            <i class="fas fa-paper-plane mr-1"></i> Publish
                        </a>
                        <div class="aksi">
                            <a href="<?= base_url('BeritaC/edit/'.$b->id_berita) ?>" class="btn btn-sm btn-info shadow-sm mr-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            
                            <a href="<?= base_url('BeritaC/hapus/'.$b->id_berita) ?>" 
                            class="btn btn-sm btn-danger shadow-sm" 
                            onclick="return confirm('Apakah Anda yakin ingin menghapus draft ini?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>