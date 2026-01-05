<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12 my-4">
                        <h2 class="h4 mb-1">Edit Data Mahasiswa</h2>
                        <div class="card shadow">
                            <div class="card-body">
                                <?php foreach($mahasiswa as $mhs): ?>
                                <form action="<?php echo base_url('MahasiswaC/update'); ?>" method="post" enctype="multipart/form-data">
                                    
                                    <input type="hidden" name="id" value="<?= $mhs->id ?>">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Mahasiswa</label>
                                                <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>NIM</label>
                                                <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>" readonly>
                                                <small class="text-danger">NIM tidak dapat diubah.</small>
                                            </div>

                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="jk" class="form-control" required>
                                                    <option value="L" <?= ($mhs->jk == 'L') ? 'selected' : '' ?>>Laki-laki</option>
                                                    <option value="P" <?= ($mhs->jk == 'P') ? 'selected' : '' ?>>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Program Studi</label>
                                                <select name="id_prodi" class="form-control" required>
                                                    <?php foreach($prodi as $p): ?>
                                                        <option value="<?= $p->id_prodi ?>" <?= ($p->id_prodi == $mhs->id_prodi) ? 'selected' : '' ?>>
                                                            <?= $p->nama_prodi ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Semester</label>
                                                <select name="semester" class="form-control" required>
                                                    <?php for($i=1; $i<=8; $i++): ?>
                                                        <option value="<?= $i ?>" <?= ($i == $mhs->semester) ? 'selected' : '' ?>>Semester <?= $i ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" value="<?php echo $mhs->email ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input type="text" name="telp" class="form-control" value="<?php echo $mhs->telp ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Foto Profil</label>
                                        <div class="row align-items-center mb-2">
                                            <div class="col-auto">
                                                <?php if(!empty($mhs->foto)): ?>
                                                    <img src="<?php echo base_url('public/img/mhs/' . $mhs->foto); ?>" alt="Foto Lama" width="80" class="img-thumbnail rounded">
                                                <?php else: ?>
                                                    <span class="text-muted small">Belum ada foto</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col">
                                                <input type="file" name="foto" class="form-control-file" accept="image/*">
                                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-4 border-top pt-3">
                                        <a href="<?php echo base_url('MahasiswaC/index'); ?>" class="btn btn-secondary">Batal</a>
                                        <button type="submit" class="btn btn-primary px-4 shadow">Update Data</button>
                                    </div>

                                </form>
                                <?php endforeach; ?>
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
</main>