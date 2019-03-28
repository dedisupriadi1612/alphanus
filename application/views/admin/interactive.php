<?php $this->load->view('admin/template/header')?>


    <section class="content">
        <div class="container-fluid">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Interactive</h2>
                    </div>
                    <div class="body">
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                        </p>
                        <p>
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                        </p>
                        <p>
                            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
                        </p>

                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                <a class="containerImage" href="<?php   echo base_url().'interactive?lang=html'; ?>" data-sub-html="Demo Description">
                                    <img style="border: 1px solid #ddd;
                                                    border-radius: 8px;
                                                    padding: 5px;" class="img-responsive thumbnail" src="<?php   echo base_url().'assets/images/html.png'; ?>">
                                    <div class="overlayImage">
                                        <div class="text">HTML</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                <a class="containerImage" href="<?php   echo base_url().'interactive?lang=js'; ?>" data-sub-html="Demo Description">
                                    <img  style="border: 1px solid #ddd;
                                                    border-radius: 8px;
                                                    padding: 5px;" class="img-responsive thumbnail" src="<?php   echo base_url().'assets/images/js.png'; ?>">
                                    <div class="overlayImage">
                                        <div class="text">Javascript</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                <a class="containerImage" href="<?php   echo base_url().'interactive?lang=php'; ?>" data-sub-html="Demo Description">
                                    <img style="border: 1px solid #ddd;
                                                    border-radius: 8px;
                                                    padding: 5px;"  class="img-responsive thumbnail" src="<?php   echo base_url().'assets/images/php.png'; ?>">
                                    <div class="overlayImage">
                                        <div class="text">PHP</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                <a class="containerImage" href="<?php   echo base_url().'interactive?lang=java'; ?>" data-sub-html="Demo Description">
                                    <img style="border: 1px solid #ddd;
                                                    border-radius: 8px;
                                                    padding: 5px;"  class="img-responsive thumbnail" src="<?php   echo base_url().'assets/images/java.png'; ?>">
                                    <div class="overlayImage">
                                        <div class="text">Java</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                <a class="containerImage" href="<?php   echo base_url().'interactive?lang=py'; ?>" data-sub-html="Demo Description">
                                    <img style="border: 1px solid #ddd;
                                                    border-radius: 8px;
                                                    padding: 5px;"  class="img-responsive thumbnail" src="<?php   echo base_url().'assets/images/python.png'; ?>">
                                    <div class="overlayImage">
                                        <div class="text">Python</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>



    <?php $this->load->view('admin/template/script')?>


</body>

</html>
