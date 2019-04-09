			<?php $this->load->view('templateLg/header')?>
				<form id="forgot_password" action="<?php echo base_url('auth/createOTP');?>" method="POST">
                    <div class="msg">
                        Enter your email address that you used to register. We'll send you an email with your username and a
                        link to get verification your Account.
                    </div>

                    <?php if(!empty($error_messages)):?>
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $error_messages; ?>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty($sukses_messages)):?>
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $sukses_messages; ?>
                    </div>
                    <?php endif; ?>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="hidden" class="form-control" name="type"  id="type" placeholder="type" value="verify" required autofocus>
                            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email" value="<?php echo set_value('user_email') ?>" required autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Send Email</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="<?php echo base_url().'auth';?>">Sign In!</a>
                    </div>
                </form>

        	<?php $this->load->view('templateLg/footer')?>