<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <div class="row align-items-center mb-4">
                    <div class="col">
                        <h2 class="h3 page-title">Selamat Datang, <?= $this->session->userdata('nama'); ?>!</h2>
                        <p class="text-muted">Ringkasan data akademik sistem SIAKAD hari ini.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow bg-primary text-white border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary-light">
                                            <i class="fe fe-16 fe-users text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-white mb-0">Total Mahasiswa</p>
                                        <span class="h3 mb-0 text-white"><?= number_format($total_mhs) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary">
                                            <i class="fe fe-16 fe-user-check text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-muted mb-0">Total Dosen</p>
                                        <span class="h3 mb-0"><?= number_format($total_dosen) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-success">
                                            <i class="fe fe-16 fe-grid text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-muted mb-0">Program Studi</p>
                                        <span class="h3 mb-0"><?= number_format($total_prodi) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-info">
                                            <i class="fe fe-16 fe-book-open text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-muted mb-0">Mata Kuliah</p>
                                        <span class="h3 mb-0"><?= number_format($total_matkul) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                
                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <strong class="card-title">Grafik Mahasiswa per Program Studi</strong>
                            </div>
                            <div class="card-body">
                                <div id="barChartProdi"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="card-title">
                                    <strong>Mahasiswa Baru Terdaftar</strong>
                                    <a class="float-right small text-muted" href="<?= base_url('MahasiswaC'); ?>">Lihat Semua</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th>NIM</th>
                                                <th>Nama Lengkap</th>
                                                <th>Prodi</th>
                                                <th>Semester</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($mhs_terbaru as $m): ?>
                                            <tr>
                                                <td><strong><?= $m->nim ?></strong></td>
                                                <td><?= $m->nama ?></td>
                                                <td><?= !empty($m->nama_prodi) ? $m->nama_prodi : '<span class="text-danger">Belum Set</span>' ?></td>
                                                <td>Semester <?= $m->semester ?></td>
                                                <td><?= ($m->jk == 'L') ? 'Laki-laki' : 'Perempuan' ?></td>
                                                <td>
                                                    <a href="<?= base_url('MahasiswaC/Detail/'.$m->id) ?>" class="btn btn-sm btn-outline-primary">Profil</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
</main>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        series: [{
            name: 'Jumlah Mahasiswa',
            data: [<?php foreach($chart_data as $cd) { echo $cd->total.','; } ?>]
        }],
        chart: {
            type: 'area',
            height: 350,
            background: 'transparent',
            toolbar: { show: false },
            zoom: { enabled: false }
        },
        colors: ['#1b68ff'], 
        dataLabels: { enabled: false },
        stroke: {
            curve: 'smooth', 
            width: 3
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.6,
                opacityTo: 0.1,
                stops: [0, 90, 100]
            }
        },
        markers: {
            size: 5, 
            colors: ['#1b68ff'],
            strokeColors: '#fff',
            strokeWidth: 2,
            hover: { size: 7 }
        },
        xaxis: {
            categories: [<?php foreach($chart_data as $cd) { echo '"'.$cd->nama_prodi.'",'; } ?>],
            labels: { style: { colors: '#adb5bd' } },
            axisBorder: { show: false },
            axisTicks: { show: false }
        },
        yaxis: {
            labels: { style: { colors: '#adb5bd' } },
            min: 0
        },
        grid: {
            borderColor: '#333',
            strokeDashArray: 4,
            xaxis: { lines: { show: true } }
        },
        tooltip: {
            theme: 'dark', 
            x: { show: true }
        }
    };

    var chart = new ApexCharts(document.querySelector("#barChartProdi"), options);
    chart.render();
</script>