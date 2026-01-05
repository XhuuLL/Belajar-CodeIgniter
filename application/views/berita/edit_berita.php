<div class="main-content">
    <section class="section">
        <h2 class="h4 mb-4">Edit Berita</h2>
        <div class="card shadow border-0" style="background-color: #2d3436;">
            <div class="card-body text-white">
                <form action="<?= base_url('BeritaC/aksi_edit'); ?>" method="post">
                    <input type="hidden" name="id_berita" value="<?= $berita->id_berita ?>">

                    <div class="form-group">
                        <label class="font-weight-bold">Judul Berita</label>
                        <input type="text" name="judul" class="form-control bg-dark text-white border-secondary" value="<?= $berita->judul ?>" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Kategori</label>
                            <select name="kategori" class="form-control bg-dark text-white border-secondary">
                                <option value="Akademik" <?= ($berita->kategori == 'Akademik') ? 'selected' : '' ?>>Akademik</option>
                                <option value="Pengumuman" <?= ($berita->kategori == 'Pengumuman') ? 'selected' : '' ?>>Pengumuman</option>
                                <option value="Beasiswa" <?= ($berita->kategori == 'Beasiswa') ? 'selected' : '' ?>>Beasiswa</option>
                                <option value="Event" <?= ($berita->kategori == 'Event') ? 'selected' : '' ?>>Event</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control bg-dark text-white border-secondary" value="<?= $berita->tanggal ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Isi Berita</label>
                        <textarea name="isi" class="form-control bg-dark text-white border-secondary" rows="10" required><?= $berita->isi ?></textarea>
                    </div>

                    <div class="mt-4 border-top pt-3 text-right">
                        <a href="<?= base_url('BeritaC'); ?>" class="btn btn-secondary mr-2">Kembali</a>
                        <button type="submit" class="btn btn-info px-4 shadow-sm">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>