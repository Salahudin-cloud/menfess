<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() . 'assets/backend/dist/img/user2-160x160.jpg' ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item ">
                    <a href="<?php echo site_url('dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <!-- User Management -->
                <li class="nav-item ">
                    <a href="<?php echo site_url('user_management') ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User Management
                        </p>
                    </a>
                </li>
                <!-- category -->
                <li class="nav-item ">
                    <a href="<?php echo site_url('category') ?>" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>