<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed!important; bottom: 0;">
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2" style="position: relative; height: 100%">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="overflow-y: auto; height: 100%; flex-wrap: unset;">
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

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p> Home Page <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="section.php?id=1&section=Home About" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Home About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=2&section=Home Study" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Home Study</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p> About Us <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="section.php?id=3&section=About Us" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>About Us</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="section.php?id=4&section=About Overview" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>About Overview</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="section.php?id=5&section=Our Mission" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Our Mission</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="section.php?id=6&section=Our Vision" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Our Vision</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="section.php?id=7&section=About Last" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>About Last</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book-medical"></i>
                        <p> MBBS Abroad <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="section.php?id=8&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>MBBS Abroad About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=9&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>MBBS Abroad Study</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book-medical"></i>
                        <p> MBBS India <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="section.php?id=10&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>ABOUT US</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=11&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Free Counselling</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=12&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>MBBS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=13&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Admission Procedure</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=14&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Universities For MBBS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=15&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>BHMS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=16&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Universities For BHMS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=17&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>BAMS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=18&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Universities For BAMS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=19&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>BDS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=20&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Universities For BDS</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book-medical"></i>
                        <p> MBBS Updates<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="section.php?id=21&section=MBBS Updates" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>MBBS Updates</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="country.php" class="nav-link">
                        <i class="nav-icon fa fa-globe"></i>
                        <p>Countries</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p> Services <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="section.php?id=22&section=Service Section 1" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Section 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="section.php?id=23&section=Service Section 2" class="nav-link">
                                <i class="nav-icon fa fa-circle"></i>
                                <p>Section 2</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="office.php" class="nav-link">
                        <i class="nav-icon fa fa-building"></i>
                        <p>Corporate Offices</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="contactUs.php" class="nav-link">
                        <i class="nav-icon fa fa-phone-volume"></i>
                        <p>Contact Us</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>