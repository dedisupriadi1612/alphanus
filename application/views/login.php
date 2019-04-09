			<?php $this->load->view('templateLg/header')?>
				<form id="sign_in" action="<?php echo base_url('auth/login');?>"  method="POST">
                    <div class="msg">Sign in to start your session</div>

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
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" value="<?php echo set_value('username') ?>" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="<?php echo base_url().'auth/register';?>">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="<?php echo base_url().'auth/forgetPassword';?>">Forgot Password?</a>
                        </div>

                    </div>
                </form>

        <?php $this->load->view('templateLg/footer')?>