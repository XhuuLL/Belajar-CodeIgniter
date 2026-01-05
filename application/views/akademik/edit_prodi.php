<main role="main" class="main-content">
    <div class="container-fluid">
        <h2 class="h4 mb-4">Edit Program Studi</h2>
        <div class="card shadow">
            <div class="card-body">
                <form action="<?= base_url('ProgramStudiC/aksi_edit'); ?>" method="post">
                    <input type="hidden" name="id_prodi" value="<?= $prodi->id_prodi ?>">
                    
                    <div class="form-group">
                        <label>Kode Program Studi</label>
                        <input type="text" name="kode_prodi" class="form-control" value="<?= $prodi->kode_prodi ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Program Studi</label>
                        <input type="text" name="nama_prodi" class="form-control" value="<?= $prodi->nama_prodi ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Jenjang</label>
                        <select name="jenjang" class="form-control">
                            <option value="D3" <?= ($prodi->jenjang == 'D3') ? 'selected' : '' ?>>D3</option>
                            <option value="S1" <?= ($prodi->jenjang == 'S1') ? 'selected' : '' ?>>S1</option>
                            <option value="S2" <?= ($prodi->jenjang == 'S2') ? 'selected' : '' ?>>S2</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <a href="<?= base_url('ProgramStudiC'); ?>" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>