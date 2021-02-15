<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PORTFOLIO</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= url_is('admin') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manage Data
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?= url_is('admin/users') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/users') ?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Data Users</span></a>
    </li>

    <li class="nav-item <?= url_is('admin/headers') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/headers') ?>">
            <i class="fas fa-fw fa-circle"></i>
            <span>Data Headers</span></a>
    </li>

    <li class="nav-item <?= url_is('admin/about') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/about') ?>">
            <i class="fas fa-fw fa-circle"></i>
            <span>Data About</span></a>
    </li>

    <li class="nav-item <?= url_is('admin/portfolio') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/portfolio') ?>">
            <i class="fas fa-fw fa-circle"></i>
            <span>Data Portfolio</span></a>
    </li>

    <li class="nav-item <?= url_is('admin/footers') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/footers') ?>">
            <i class="fas fa-fw fa-circle"></i>
            <span>Data Footers</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manage Layout
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?= url_is('admin/layout/header') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/layout/header') ?>">
            <i class="fas fa-fw fa-circle"></i>
            <span>Header</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item <?= url_is('admin/layout/about') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/layout/about') ?>">
            <i class="fas fa-fw fa-circle"></i>
            <span>About</span></a>
    </li>

    <li class="nav-item <?= url_is('admin/layout/footer') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/layout/footer') ?>">
            <i class="fas fa-fw fa-circle"></i>
            <span>Footer</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengaturan
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?= url_is('admin/profile') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/profile') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item <?= url_is('admin/change-password') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/change-password') ?>">
            <i class="fas fa-fw fa-key"></i>
            <span>Ubah Password</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>