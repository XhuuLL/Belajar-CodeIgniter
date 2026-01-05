<div class="main-content">
    <section class="section">
        <h2 class="h4 mb-4">Tambah Program Studi</h2>
        
        <div class="card shadow border-0">
            <div class="card-body">
                <form action="<?= base_url('ProgramStudiC/aksi_tambah'); ?>" method="post">
                    
                    <div class="form-group">
                        <label class="font-weight-bold">Kode Program Studi</label>
                        <input type="text" name="kode_prodi" class="form-control" placeholder="Masukkan Kode" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Nama Program Studi</label>
                        <input type="text" name="nama_prodi" class="form-control" placeholder="Masukkan nama prodi" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Jenjang</label>
                        <select name="jenjang" class="form-control">
                            <option value="D3">D3</option>
                            <option value="S1" selected>S1</option>
                            <option value="S2">S2</option>
                        </select>
                    </div>

                    <div class="mt-4 border-top pt-3">
                        <a href="<?= base_url('ProgramStudiC'); ?>" class="btn btn-secondary mr-2">
                            <i class="fas fa-arrow-left"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save mr-1"></i> Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>