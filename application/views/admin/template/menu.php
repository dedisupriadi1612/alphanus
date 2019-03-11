<!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php
                        $profil = $this->session->userdata('user_picture');

                        if (empty($profil)){
                            echo base_url().'images/profil/default.png';
                        }else{
                             echo base_url().'images/profil/'.$profil;
                        }
                       ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('user_fullname'); ?></div>
                    <div class="email"><?php echo $this->session->userdata('user_email'); ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('auth/logout') ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <?php
                         $data = getMenuAdmin();
                         for ($i=0; $i <count($data) ; $i++) :
                    ?>
                    <li class="<?php echo checkSegmentMenu($data[$i]->menu_url,$data[$i]->menu_id); ?>">
                        <a href="<?php echo getURL($data[$i]->menu_url) ?>" class="<?php echo checkTogleMenu($data[$i]->menu_id) ?>">
                            <i class="material-icons"><?php echo $data[$i]->menu_icon?></i>
                            <span><?php echo $data[$i]->menu_tittle?></span>
                        </a>

                            <?php echo checkOpenUL($data[$i]->menu_id) ?>
                            <?php
                                $details = getMenuDetailAdmin($data[$i]->menu_id);
                                for ($j=0; $j <count($details) ; $j++) :
                            ?>
                            <li class="<?php echo checkSegmentMenu($details[$j]->menu_url,$details[$j]->menu_id); ?>">
                                <a href="<?php echo getURL($details[$j]->menu_url) ?>">
                                    <i class="material-icons"></i>
                                    <span><?php echo $details[$j]->menu_tittle?></span>
                                </a>
                            </li>

                            <?php
                                endfor;
                            ?>
                            <?php echo checkCloseUL($data[$i]->menu_id) ?>
                    </li>
                    <?php
                         endfor;
                    ?>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">neeDuck</a>.
                </div>
                <!-- <div class="version">
                    <b>Version: </b> 1.0.5
                </div> -->
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>