        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-thin fa-certificate"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Certificate Generator</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dashboard/index'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('sertifikat/generate_sertifikat'); ?>">
                    <i class="fas fa-fw fa-solid fa-plus"></i>
                    <span>Generate Certificate</span></a>

                <!-- Nav Item - profil -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/index'); ?>">
                    <i class="fas fa-fw fa-regular fa-user"></i>
                    <span>My Profile</span></a>

                <!-- Nav Item - Tutor -->
            <li class="nav-item">
                <a class="nav-link" href="tutor/index">
                    <i class="fas fa-fw fa-solid fa-question"></i>
                    <span>Tutorial</span></a>

                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle  border-0" id="sidebarToggle"></button>
                </div>

        </ul>
        <!-- End of Sidebar -->