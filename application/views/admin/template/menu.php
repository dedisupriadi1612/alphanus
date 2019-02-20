<!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url();?>assets/admin/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                           <a class="js-arrow" href="<?php echo base_url().'Dashboard' ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						<li>
							<a class="js-arrow" href="#">
                                <i class="fa big-icon fa-pie-chart icon-wrap"></i>Miscellaneous</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a title="File Manager" href="<?php echo base_url().'Filemanager' ?>"><i class="fa fa-folder sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">File Manager</span></a></li>
                                <li><a title="Blog" href="<?php echo base_url().'BlogAdmin' ?>"><i class="fa fa-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Blog</span></a></li>
                                <li><a title="Blog Details" href="<?php echo base_url().'Blogdetails' ?>"><i class="fa fa-tags sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Blog Details</span></a></li>
                                </ul>
                        </li>
						
						<li>
							<a class="js-arrow" href="#">
                                <i class="fa big-icon fa-envelope icon-wrap"></i>Mailbox</a>
                           <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a title="Inbox" href="<?php echo base_url().'Mailbox' ?>"><i class="fa fa-inbox sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="<?php echo base_url().'View' ?>"><i class="fa fa-television sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="<?php echo base_url().'Compose' ?>"><i class="fa fa-paper-plane sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul>
                        </li>
                        
						<li>
							<a class="js-arrow" href="#">
                                <i class="fa big-icon fa-flask icon-wrap"></i>Interface</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a title="Google Map" href="<?php echo base_url().'GoogleMap' ?>"><i class="fa fa-map-marker sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Google Map</span></a></li>
                                <li><a title="Data Maps" href="<?php echo base_url().'DataMaps' ?>"><i class="fa fa-map-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Maps</span></a></li>
                                <li><a title="Pdf Viewer" href="<?php echo base_url().'PdfViewer' ?>"><i class="fa fa-file-pdf-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Pdf Viewer</span></a></li>
                                <li><a title="X-Editable" href="<?php echo base_url().'Xeditable' ?>"><i class="fa fa-fighter-jet sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">X-Editable</span></a></li>
                                <li><a title="Code Editor" href="<?php echo base_url().'CodeEditor' ?>"><i class="fa fa-code sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Code Editor</span></a></li>
                                <li><a title="Tree View" href="<?php echo base_url().'Tree' ?>"><i class="fa fa-frown-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tree View</span></a></li>
                                <li><a title="Preloader" href="<?php echo base_url().'Preloader' ?>"><i class="fa fa-circle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Preloader</span></a></li>
                                <li><a title="Images Cropper" href="<?php echo base_url().'ImagesCropper' ?>"><i class="fa fa-file-image-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Images Cropper</span></a></li>
                            </ul>
                        </li>
                        <li>
							<a href="<?php echo base_url().'Chart' ?>" class="nav-link"><i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Dashboard' ?>">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Dashboard' ?>">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Dashboard' ?>">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo base_url().'Dashboard' ?>">Login</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'Dashboard' ?>">Register</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'Dashboard' ?>">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url();?>assets/admin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?php echo base_url().'Dashboard' ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						<li>
							<a class="js-arrow" href="#">
                                <i class="fa big-icon fa-pie-chart icon-wrap"></i>Miscellaneous</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a title="File Manager" href="<?php echo base_url().'Filemanager' ?>"><i class="fa fa-folder sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">File Manager</span></a></li>
                                <li><a title="Blog" href="<?php echo base_url().'BlogAdmin' ?>"><i class="fa fa-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Blog</span></a></li>
                                <li><a title="Blog Details" href="<?php echo base_url().'Blogdetails' ?>"><i class="fa fa-tags sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Blog Details</span></a></li>
                                </ul>
                        </li>
						
						<li>
							<a class="js-arrow" href="#">
                                <i class="fa big-icon fa-envelope icon-wrap"></i>Mailbox</a>
                           <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a title="Inbox" href="<?php echo base_url().'Mailbox' ?>"><i class="fa fa-inbox sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="<?php echo base_url().'View' ?>"><i class="fa fa-television sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="<?php echo base_url().'Compose' ?>"><i class="fa fa-paper-plane sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul>
                        </li>
                        
						<li>
							<a class="js-arrow" href="#">
                                <i class="fa big-icon fa-flask icon-wrap"></i>Interface</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a title="Google Map" href="<?php echo base_url().'GoogleMap' ?>"><i class="fa fa-map-marker sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Google Map</span></a></li>
                                <li><a title="Data Maps" href="<?php echo base_url().'DataMaps' ?>"><i class="fa fa-map-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Maps</span></a></li>
                                <li><a title="Pdf Viewer" href="<?php echo base_url().'PdfViewer' ?>"><i class="fa fa-file-pdf-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Pdf Viewer</span></a></li>
                                <li><a title="X-Editable" href="<?php echo base_url().'Xeditable' ?>"><i class="fa fa-fighter-jet sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">X-Editable</span></a></li>
                                <li><a title="Code Editor" href="<?php echo base_url().'CodeEditor' ?>"><i class="fa fa-code sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Code Editor</span></a></li>
                                <li><a title="Tree View" href="<?php echo base_url().'Tree' ?>"><i class="fa fa-frown-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tree View</span></a></li>
                                <li><a title="Preloader" href="<?php echo base_url().'Preloader' ?>"><i class="fa fa-circle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Preloader</span></a></li>
                                <li><a title="Images Cropper" href="<?php echo base_url().'ImagesCropper' ?>"><i class="fa fa-file-image-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Images Cropper</span></a></li>
                            </ul>
                        </li>
						
                        <li>
                            <a href="<?php echo base_url().'Chart' ?>" class="nav-link"><i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Table' ?>">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Form' ?>">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Map' ?>">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url().'Login' ?>">Login</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'RegisterAdmin' ?>">Register</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'forget' ?>">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
		<!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url();?>assets/admin/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url();?>assets/admin/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url();?>assets/admin/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url();?>assets/admin/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url();?>assets/admin/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url();?>assets/admin/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url();?>assets/admin/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->