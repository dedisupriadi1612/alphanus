<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Alphanus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <?php $this->load->view('template/style')?>

    </head>

    
    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?php echo base_url().'assets/';?><?php echo base_url();?>assets/images/bg-4.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="<?php echo base_url() ?>" class="text-success">
                                    <span><img src="<?php echo base_url().'assets/';?><?php echo base_url();?>assets/images/logo.png" alt="" height="80"></span>
                                </a>
                            </h2>

                            <form class="form-horizontal" action="#">

                                <div class="form-group row m-b-10">
                                    <div class="col-12">
                                        <label for="username">Full Name</label>
                                        <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                                    </div>
                                </div>

                                <div class="form-group row m-b-10">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                    </div>
                                </div>

                                <div class="form-group row m-b-10">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row m-b-10">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                I accept <a href="#" class="text-custom">Terms and Conditions</a>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-3">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign Up Free</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-20">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account?  <a href="<?php echo base_url().'login' ?>" class="text-dark m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2019 © Alphanus</p>
            </div>

        </div>

		<!-- Modal -->
  <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_name" placeholder="Your Full Name">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="email" class="form-control" id="emailaddress" placeholder="Your Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="password" class="form-control" id="password" placeholder="Your password">
                </div>    
              </div>
             
            </div>

            <div class="form-group">
              <input type="submit" value="Sing UP" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>

        <?php $this->load->view('template/script')?>

    </body>
</html>

            