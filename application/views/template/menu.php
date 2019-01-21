        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!-- <a href="index.html" class="logo">
                            <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                            <span class="logo-large"><i class="mdi mdi-radar"></i> Highdmin</span>
                        </a> -->
                        <!-- Image Logo -->
                        <a href="<?php echo base_url() ?>" class="logo">
                            <img src="<?php echo base_url().'assets/';?>images/logo.png" alt="" height="40" class="logo-small">
                            <img src="<?php echo base_url().'assets/';?>images/logo.png" alt="" height="55" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url().'assets/';?>images/users/avatar-1.jpg" alt="user" class="rounded-circle"> 
                                    <span class="ml-1 pro-user-name">User <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    

                                    <?php 
                                        if (!isLogin()):
                                    ?>
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Join With Us</h6>
                                    </div>
                                    <!-- item-->
                                    <a href="<?php echo base_url().'auth' ?>" class="dropdown-item notify-item">
                                        <i class="mdi mdi-login-variant"></i> <span>Login</span>
                                    </a>

                                    <!-- item-->
                                    <a href="<?php echo base_url().'register' ?>" class="dropdown-item notify-item">
                                        <i class="dripicons-user"></i> <span>Register</span>
                                    </a>
                                    <?php
                                        else :
                                    ?>
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>
                                    <?php
                                        endif;
                                    ?>

                                </div>
                            </li>
							
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="<?php echo base_url().'home' ?>"><i class="dripicons-home"></i>Home</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-monitor"></i>Interactive</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url().'interactive?lang=html' ?>">HTML</a></li>
                                    <li><a href="<?php echo base_url().'interactive?lang=js' ?>">JavaScript</a></li>
                                    <li><a href="<?php echo base_url().'interactive?lang=php' ?>">PHP</a></li>
                                    <li><a href="<?php echo base_url().'interactive?lang=py' ?>">Python</a></li>
                                    <li><a href="<?php echo base_url().'interactive?lang=java' ?>">Java</a></li>
                                </ul>
                            </li>

                            <?php 
                                if (isLogin()) 
                                {
                            ?>
                                <li class="has-submenu">
                                    <a href="<?php echo base_url().'dashboard' ?>"><i class="icon-speedometer"></i>Dashboard</a>
                                </li>
                            <?php
                                }
                            ?>
                            
                            

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->