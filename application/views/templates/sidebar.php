<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="<?php echo base_url('Admin'); ?>">
                
                <img src="<?php echo base_url('public/img/Umus.png'); ?>" 
                    alt="Logo" 
                    class="navbar-brand-img brand-sm"
                    style="width: 40px; height: auto;">
                <span class="h4 font-weight-bold ml-2 align-middle">SIAKAD</span>
                
            </a>
        </div>

        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="<?php echo site_url('Admin') ?>" class="nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>

        <p class="text-muted nav-heading mt-4 mb-1">
            <span>USER</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" class="nav-link">
                    <i class="fe fe-users"></i>
                    <span class="ml-3 item-text">Dosen</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="<?php echo site_url('MahasiswaC') ?>" class="nav-link">
                    <i class="fe fe-users"></i>
                    <span class="ml-3 item-text">Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#ui-elements" class="nav-link">
                    <i class="fe fe-user"></i>
                    <span class="ml-3 item-text">Dosen Wali</span>
                </a>
            </li>
        </ul>

        <p class="text-muted nav-heading mt-4 mb-1">
            <span>AKADEMIK</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" class="nav-link">
                    <i class="fe fe-book"></i>
                    <span class="ml-3 item-text">Program Studi</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#ui-elements" class="nav-link">
                    <i class="fe fe-book-open"></i>
                    <span class="ml-3 item-text">Mata Kuliah</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#ui-elements" class="nav-link">
                    <i class="fe fe-calendar"></i>
                    <span class="ml-3 item-text">Jadwal</span>
                </a>
            </li>
        </ul>

        <p class="text-muted nav-heading mt-4 mb-1">
            <span>BERITA</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" class="nav-link">
                    <i class="fe fe-folder"></i>
                    <span class="ml-3 item-text">Utama</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#ui-elements" class="nav-link">
                    <i class="fe fe-folder-minus"></i>
                    <span class="ml-3 item-text">Draft</span>
                </a>
            </li>
        </ul>

        <p class="text-muted nav-heading mt-4 mb-1">
            <span>SETTING</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" class="nav-link">
                    <i class="fe fe-lock"></i>
                    <span class="ml-3 item-text">Ganti Password</span>
                </a>
            </li>
        </ul>
        <div class="btn-box w-100 mt-4 mb-1">
            <a href="<?php echo base_url('home'); ?>" class="btn btn-secondary btn-block">
                <i class="fe fe-log-out mr-2"></i> Logout
            </a>
        </div>
    </nav>
</aside>