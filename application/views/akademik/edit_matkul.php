<div class="main-content">
    <section class="section">
        <h2 class="h4 mb-4">Edit Mata Kuliah</h2>
        <div class="card shadow border-0">
            <div class="card-body">
                <form action="<?= base_url('MatkulC/aksi_edit'); ?>" method="post">
                    <input type="hidden" name="id_matkul" value="<?= $matkul->id_matkul ?>">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Kode Mata Kuliah</label>
                                <input type="text" name="kode_matkul" class="form-control" value="<?= $matkul->kode_matkul ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Program Studi</label>
                                <select name="id_prodi" class="form-control" required>
                                    <?php foreach($prodi as $p): ?>
                                        <option value="<?= $p->id_prodi ?>" <?= ($p->id_prodi == $matkul->id_prodi) ? 'selected' : '' ?>>
                                            <?= $p->nama_prodi ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Nama Mata Kuliah</label>
                        <input type="text" name="nama_matkul" class="form-control" value="<?= $matkul->nama_matkul ?>" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">SKS</label>
                                <input type="number" name="sks" class="form-control" value="<?= $matkul->sks ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Semester</label>
                                <select name="semester" class="form-control">
                                    <?php for($i=1; $i<=8; $i++): ?>
                                        <option value="<?= $i ?>" <?= ($i == $matkul->semester) ? 'selected' : '' ?>>Semester <?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 border-top pt-3">
                        <a href="<?= base_url('MatkulC'); ?>" class="btn btn-secondary mr-2"><i class="fas fa-arrow-left"></i> Batal</a>
                        <button type="submit" class="btn btn-primary px-4"><i class="fas fa-save mr-1"></i> Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>