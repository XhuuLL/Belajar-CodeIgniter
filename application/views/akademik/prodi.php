<div class="main-content">
    <section class="section">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="section-title mb-0">DATA PROGRAM STUDI</h2>
                <p class="text-muted">Daftar jurusan aktif di sistem akademik</p>
            </div>
            <div class="col-md-6 text-md-right mt-3 mt-md-0">
                <a href="<?= base_url('ProgramStudiC/tambah'); ?>" class="btn btn-primary shadow-sm">
                    <i class="fas fa-plus mr-2"></i> Tambah Prodi
                </a>
            </div>
        </div>

        <div class="row">
            <?php foreach($prodi as $p): 
                $nama_low = strtolower($p->nama_prodi);
                $border_color = 'border-secondary';
                $text_color = 'text-secondary';

                if (strpos($nama_low, 'teknik') !== false || strpos($nama_low, 'informatika') !== false) {
                    $border_color = 'border-primary';
                    $text_color = 'text-primary';
                } else if (strpos($nama_low, 'sistem informasi') !== false) {
                    $border_color = 'border-success';
                    $text_color = 'text-success';
                } else if (strpos($nama_low, 'manajemen') !== false || strpos($nama_low, 'akuntansi') !== false) {
                    $border_color = 'border-warning';
                    $text_color = 'text-warning';
                } else if (strpos($nama_low, 'hukum') !== false) {
                    $border_color = 'border-danger';
                    $text_color = 'text-danger';
                }
            ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 <?= $border_color ?>" style="border-left: 5px solid;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h6 class="text-muted mb-1"><?= $p->kode_prodi ?></h6>
                                <h5 class="font-weight-bold <?= $text_color ?>"><?= strtoupper($p->nama_prodi) ?></h5>
                                <span class="badge badge-dark"><?= $p->jenjang ?></span>
                            </div>
                            <div class="col-4 text-right">
                                <i class="fas fa-university fa-2x opacity-25" style="color: #e3e3e3;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center">
                        <div class="status-prodi">
                            <span class="badge badge-pill badge-success">
                                <i class="fas fa-check-circle mr-1"></i> Aktif
                            </span>
                        </div>
                        <div class="aksi">
                            <a href="<?= base_url('ProgramStudiC/edit/'.$p->id_prodi) ?>" 
                            class="btn btn-sm btn-info shadow-sm mr-1" 
                            title="Edit Program Studi">
                                <i class="fas fa-edit"></i>
                            </a>
                            
                            <a href="<?= base_url('ProgramStudiC/hapus/'.$p->id_prodi) ?>" 
                            class="btn btn-sm btn-danger shadow-sm" 
                            onclick="return confirm('Apakah Anda yakin ingin menghapus prodi ini?')" 
                            title="Hapus Program Studi">
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

<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Program Studi</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form action="<?= base_url('ProgramStudiC/aksi_tambah') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kode Prodi</label>
                        <input type="text" name="kode_prodi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Prodi</label>
                        <input type="text" name="nama_prodi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jenjang</label>
                        <select name="jenjang" class="form-control">
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>