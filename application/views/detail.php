<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">           
                <h2 class="h3 mb-4 page-title">Detail Profil Mahasiswa</h2>
                
                <div class="card shadow mb-4">
                    <div class="card-body p-5 d-flex align-items-center">
                        
                        <div class="me-4">
                            <?php 
                                // Tentukan path foto sesuai konfigurasi controller
                                $path_foto = 'public/img/mhs/' . $detail->foto;
                                
                                // Cek apakah data foto ada DAN file fisiknya ada di server
                                if (!empty($detail->foto) && file_exists(FCPATH . $path_foto)) {
                                    // Tampilkan foto asli + time() untuk hindari cache
                                    $img_src = base_url($path_foto) . '?t=' . time();
                                } else {
                                    // Fallback ke Avatar Inisial jika foto tidak ada
                                    $img_src = 'https://ui-avatars.com/api/?name=' . urlencode($detail->nama) . '&background=random&color=fff&size=128';
                                }
                            ?>
                            <img src="<?php echo $img_src; ?>" alt="Foto Profil" 
                                class="rounded-circle shadow-sm" 
                                style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #fff;">
                        </div>

                        <div>
                            <h4 class="mb-1 font-weight-bold"><?php echo $detail->nama ?? 'Nama Tidak Ditemukan'; ?></h4>
                            <p class="text-muted mb-0">NIM : <?php echo $detail->nim ?? '-'; ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="circle circle-md bg-light me-3" style="width: 50px; height: 50px;">
                                    <i class="fe fe-home fe-16 text-primary"></i>
                                </div>
                                <div>
                                <h6 class="mb-1 font-weight-bold text-primary">Alamat</h6>
                                    <p class="text-muted small mb-0"><?php echo $detail->alamat ?? '-'; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="circle circle-md bg-light me-3" style="width: 50px; height: 50px;">
                                    <i class="fe fe-phone fe-16 text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 font-weight-bold text-primary">Telepon</h6>
                                    <p class="text-muted small mb-0"><?php echo $detail->telp ?? '-'; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="circle circle-md bg-light me-3" style="width: 50px; height: 50px;">
                                    <i class="fe fe-mail fe-16 text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 font-weight-bold text-primary">Email</h6>
                                    <p class="text-muted small mb-0"><?php echo $detail->email ?? '-'; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="<?php echo base_url('MahasiswaC/index'); ?>" class="btn btn-primary px-4">Kembali</a>
                    </div>
                </div>

            </div> 
        </div> 
    </div> 
</main>