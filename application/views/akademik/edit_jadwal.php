<div class="main-content">
    <section class="section">
        <h2 class="h4 mb-4">Edit Jadwal Kuliah</h2>
        
        <div class="card shadow border-0">
            <div class="card-body">
                <form action="<?= base_url('JadwalC/aksi_edit'); ?>" method="post">
                    
                    <input type="hidden" name="id_jadwal" value="<?= $jadwal->id_jadwal ?>">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Mata Kuliah</label>
                            <select name="id_matkul" class="form-control" required>
                                <?php foreach($matkul as $m): ?>
                                    <option value="<?= $m->id_matkul ?>" <?= ($m->id_matkul == $jadwal->id_matkul) ? 'selected' : '' ?>>
                                        <?= $m->nama_matkul ?> (<?= $m->nama_prodi ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Dosen Pengampu</label>
                            <select name="nidn" class="form-control" required>
                                <?php foreach($dosen as $d): ?>
                                    <option value="<?= $d->nidn ?>" <?= ($d->nidn == $jadwal->nidn) ? 'selected' : '' ?>>
                                        <?= $d->nama ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label class="font-weight-bold">Hari</label>
                            <select name="hari" class="form-control">
                                <?php 
                                $hari_list = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                foreach($hari_list as $h): ?>
                                    <option value="<?= $h ?>" <?= ($h == $jadwal->hari) ? 'selected' : '' ?>><?= $h ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="font-weight-bold">Jam Mulai</label>
                            <input type="time" name="jam_mulai" class="form-control" 
                                   value="<?= substr($jadwal->jam_mulai, 0, 5) ?>" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="font-weight-bold">Jam Selesai</label>
                            <input type="time" name="jam_selesai" class="form-control" 
                                   value="<?= substr($jadwal->jam_selesai, 0, 5) ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Ruangan</label>
                        <input type="text" name="ruangan" class="form-control" 
                               value="<?= $jadwal->ruangan ?>" required>
                    </div>

                    <div class="mt-4 border-top pt-3">
                        <a href="<?= base_url('JadwalC'); ?>" class="btn btn-secondary mr-2">
                            <i class="fas fa-arrow-left"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary px-4 shadow-sm">
                            <i class="fas fa-save mr-1"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>