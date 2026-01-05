<div class="main-content">
    <section class="section">
        <h2 class="h4 mb-4">Tambah Jadwal Kuliah</h2>
        <div class="card shadow border-0">
            <div class="card-body">
                <form action="<?= base_url('JadwalC/aksi_tambah'); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Mata Kuliah</label>
                            <select name="id_matkul" class="form-control" required>
                                <option value="">-- Pilih Mata Kuliah --</option>
                                <?php foreach($matkul as $m): ?>
                                    <option value="<?= $m->id_matkul ?>"><?= $m->nama_matkul ?> (<?= $m->nama_prodi ?>)</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Dosen Pengampu</label>
                            <select name="nidn" class="form-control" required>
                                <option value="">-- Pilih Dosen --</option>
                                <?php foreach($dosen as $d): ?>
                                    <option value="<?= $d->nidn ?>"><?= $d->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label class="font-weight-bold">Hari</label>
                            <select name="hari" class="form-control">
                                <option value="Senin">Senin</option><option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option><option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option><option value="Sabtu">Sabtu</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="font-weight-bold">Jam Mulai</label>
                            <input type="time" name="jam_mulai" class="form-control" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="font-weight-bold">Jam Selesai</label>
                            <input type="time" name="jam_selesai" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Ruangan</label>
                        <input type="text" name="ruangan" class="form-control" placeholder="" required>
                    </div>
                    <div class="mt-4 border-top pt-3">
                        <a href="<?= base_url('JadwalC'); ?>" class="btn btn-secondary mr-2">Batal</a>
                        <button type="submit" class="btn btn-primary px-4">Simpan Jadwal</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>