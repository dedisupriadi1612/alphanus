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
				  <li class="nav-item active"><a href="<?php echo base_url().'Home' ?>" class="nav-link">Home</a></li>
				  <li class="nav-item"><a href="<?php echo base_url().'About' ?>" class="nav-link">About</a></li>
				  <li class="nav-item"><a href="#myModal" class="nav-link" data-toggle="modal">Login</a></li>
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
						<form name="login">
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" required="required">
							</div>
							<div class="form-group">
								<button type="submit" onclick="check(this.form)" value="Login" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
							</div>

							<div class="form-group">
								<a style="font-size: 15px;" href="#">Forgot Password?</a>
							</div>

						</form>
					</div>
					<div class="modal-footer">
						<!-- <a href="#">Forgot Password?</a> -->
						<a href="<?php echo base_url().'register';?>" >Sign Up</a>
					</div>
				</div>
			</div>
		</div>
		</div>

		<!-- Modal HTML Register -->
		<div id="myRegister" class="modal fade">
			<div class="modal-dialog modal-login">
				<div class="modal-content">
					<div class="modal-header">
						<div class="avatar">
							<img src="<?php echo base_url();?>assets/<?php echo base_url();?>assets/admin/images/avatar.png" alt="Avatar">
						</div>
						<h4 class="modal-title">Member Register</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<form name="login">
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="username" placeholder="Email" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" required="required">
							</div>
							<div class="form-group">
								<button type="submit" onclick="check(this.form)" value="Sign Up" class="btn btn-primary btn-lg btn-block login-btn">Sign Up</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>

		<!-- Modal HTML Register -->
		<div id="myRegister" class="modal fade">
			<div class="modal-dialog modal-login">
				<div class="modal-content">
					<div class="modal-header">
						<div class="avatar">
							<img src="<?php echo base_url();?>assets/images/avatar.png" alt="Avatar">
						</div>
						<h4 class="modal-title">Member Register</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<form name="login">
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="username" placeholder="Email" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" required="required">
							</div>
								<button type="submit" onclick="check(this.form)" value="Sign Up" class="btn btn-primary btn-lg btn-block login-btn">Sign Up</button>
							<div class="form-group">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
