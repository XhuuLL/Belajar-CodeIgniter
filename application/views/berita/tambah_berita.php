<div class="main-content">
    <section class="section">
        <h2 class="h4 mb-4">Tambah Berita Utama</h2>
        <div class="card shadow border-0" style="background-color: #2d3436;">
            <div class="card-body text-white">
                <form action="<?= base_url('BeritaC/aksi_tambah'); ?>" method="post">
                    <div class="form-group">
                        <label class="font-weight-bold">Judul Berita</label>
                        <input type="text" name="judul" class="form-control bg-dark text-white border-secondary" placeholder="Masukkan judul berita" required>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Kategori</label>
                            <select name="kategori" class="form-control bg-dark text-white border-secondary">
                                <option value="Akademik">Akademik</option>
                                <option value="Pengumuman">Pengumuman</option>
                                <option value="Beasiswa">Beasiswa</option>
                                <option value="Event">Event</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control bg-dark text-white border-secondary" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Isi Berita</label>
                        <textarea name="isi" class="form-control bg-dark text-white border-secondary" rows="10" placeholder="Tuliskan detail berita di sini..." required></textarea>
                    </div>

                    <div class="mt-4 border-top pt-3 text-right">
                        <a href="<?= base_url('BeritaC'); ?>" class="btn btn-secondary mr-2">Batal</a>
                        
                        <button type="submit" name="status" value="draft" class="btn btn-warning mr-1 shadow-sm">
                            <i class="fas fa-save mr-1"></i> Simpan Draft
                        </button>
                        
                        <button type="submit" name="status" value="publish" class="btn btn-primary px-4 shadow-sm">
                            <i class="fas fa-paper-plane mr-1"></i> Terbitkan Berita
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>