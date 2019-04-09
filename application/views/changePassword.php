			<?php $this->load->view('templateLg/header')?>
                <form id="changePassword" action="<?php echo base_url('auth/changePassword');?>" method="POST">
                    <div class="msg">Change Password</div>

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
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="hidden" class="form-control" name="action"  id="action" placeholder="action" value="7" required autofocus>
                            <input type="hidden" class="form-control" name="user_id"  id="user_id" placeholder="user_id" value="0" required autofocus>
                            <input type="hidden" class="form-control" name="user_token"  id="user_token" placeholder="user_token" value="<?php echo $user_token ?>" required autofocus>
                            <input type="password" class="form-control" name="user_password"  id="user_password" minlength="6" placeholder="Password" required>
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

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Change Password</button>


				</form>
                <?php $this->load->view('templateLg/footer')?>