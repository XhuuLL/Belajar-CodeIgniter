<div class="main-content">
    <section class="section">
        <h2 class="h4 mb-4">Tambah Mata Kuliah</h2>
        <div class="card shadow border-0">
            <div class="card-body">
                <form action="<?= base_url('MatkulC/aksi_tambah'); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Kode Mata Kuliah</label>
                                <input type="text" name="kode_matkul" class="form-control" placeholder="Masukkan Kode" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Program Studi</label>
                                <select name="id_prodi" class="form-control" required>
                                    <option value="">-- Pilih Program Studi --</option>
                                    <?php foreach($prodi as $p): ?>
                                        <option value="<?= $p->id_prodi ?>"><?= $p->nama_prodi ?> (<?= $p->jenjang ?>)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Nama Mata Kuliah</label>
                        <input type="text" name="nama_matkul" class="form-control" placeholder="Masukkan nama mata kuliah" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">SKS</label>
                                <input type="number" name="sks" class="form-control" min="1" max="6" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Semester</label>
                                <select name="semester" class="form-control">
                                    <?php for($i=1; $i<=8; $i++): ?>
                                        <option value="<?= $i ?>">Semester <?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 border-top pt-3">
                        <a href="<?= base_url('MatkulC'); ?>" class="btn btn-secondary mr-2"><i class="fas fa-arrow-left"></i> Batal</a>
                        <button type="submit" class="btn btn-primary px-4"><i class="fas fa-save mr-1"></i> Simpan Matkul</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>