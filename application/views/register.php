			<?php $this->load->view('templateLg/header')?>
                <form id="sign_up" action="<?php echo base_url('auth/signUp');?>" method="POST">
                    <div class="msg">Register a new membership</div>
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
                            <input type="hidden" class="form-control" name="action"  id="action" placeholder="action" value="1" required autofocus>
                            <input type="hidden" class="form-control" name="user_id"  id="user_id" placeholder="user_id" value="0" required autofocus>
                            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Username" value="<?php echo set_value('user_name') ?>" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email Address" value="<?php echo set_value('user_email') ?>" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="user_password" id="user_password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password_komfir" id="password_komfir" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?php echo base_url().'auth';?>">You already have a membership?</a>
                    </div>
				</form>
                <?php $this->load->view('templateLg/footer')?>