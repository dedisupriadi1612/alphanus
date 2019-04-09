<!-- nav -->
		 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
			  <a class="navbar-brand" href="<?php echo base_url().'home'?>">
			  	<img src="<?php echo base_url().'assets/';?>images/logo.png" alt="" height="40" class="logo-small">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			  </button>

			  <div class="collapse navbar-collapse" id="ftco-nav">

				<ul class="navbar-nav ml-auto">
					<?php
								$data = getMenuPrivilage(2);
								for ($i=0; $i <count($data) ; $i++) :
					?>
					<li class="<?php echo checkSegmentMenuHome($data[$i]->menu_url,$data[$i]->menu_id); ?>">
						<a href="<?php echo getURL($data[$i]->menu_url) ?>"
								data-toggle="<?php echo checkTogle($data[$i]->menu_id) ?>"
								class="<?php echo checkDropdownA($data[$i]->menu_id) ?>">
							<?php echo $data[$i]->menu_tittle?>
						</a>
						<?php echo checkOpenDiv($data[$i]->menu_id) ?>
						<?php
								$details = getMenuDetailAdmin($data[$i]->menu_id);
								for ($j=0; $j <count($details) ; $j++) :
						?>
								<a class="<?php echo checkActiveDropdown($data[$i]->menu_url) ?>" href="<?php echo getURL($details[$j]->menu_url) ?>">
									<?php echo $details[$j]->menu_tittle?>
								</a>
						<?php
								endfor;
						?>
						<?php echo checkCloseDiv($data[$i]->menu_id) ?>
					</li>
					<?php
								endfor;
					?>
					<?php
							if (!isLogin()):
					?>
				  <li class="nav-item"><a class="nav-link" data-target="#myModal" data-toggle="modal">Login</a></li>
					<?php
						else :
					?>
					<li class="nav-item"><a href="<?php echo base_url().'dashboard' ?>" class="nav-link">Dashboard</a></li>
					<?php
						endif;
					?>
				</ul>
			  </div>
			</div>
		 </nav>
		<!-- END nav -->


		<!-- Modal HTML Login -->
		<div id="myModal" class="modal fade">
			<div class="modal-dialog modal-login">
				<div class="modal-content">
					<div class="modal-header">
						<div class="avatar">
							<img src="<?php echo base_url();?>assets/images/avatar.png" alt="Avatar">
						</div>
						<h4 class="modal-title">Member Login</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<?php if ($this->session->flashdata('error_message') != "") :?>
								<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<?php echo $this->session->flashdata('error_message')?>
								</div>
						<?php endif?>
						<form name="login" action="<?php echo base_url('auth/loginHome');?>"  method="POST" >
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" required="required">
							</div>
							<div class="form-group">
								<button type="submit"  value="Login" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
							</div>

							<div class="form-group">
								<a style="font-size: 15px;" href="<?php echo base_url().'auth/forgetPassword';?>">Forgot Password?</a>
							</div>

						</form>
					</div>
					<div class="modal-footer">
						<!-- <a href="#">Forgot Password?</a> -->
						<a href="<?php echo base_url().'auth/register';?>" >Sign Up</a>
					</div>
				</div>
			</div>
		</div>
		</div>



