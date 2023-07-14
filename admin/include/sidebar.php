<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview" style="border-bottom: 1px solid #4f5962; margin-bottom: 4.5%;">
                    <a href="#" class="nav-link">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style="width: 2.1rem; margin-right: 1.5%;">
                        <p>
                            <?php echo $_SESSION['name']?>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="editProfile.php" class="nav-link">
                                <i class="fa fa-edit nav-icon"></i>
                                <p>Edit Profile</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="postRequest/logout.php" class="nav-link">
                                <i class="fa fa-sign-out-alt nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link">
                        <i class="nav-icon fa fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="banner.php" class="nav-link">
                        <i class="nav-icon fa fa-image"></i>
                        <p>Banners</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>