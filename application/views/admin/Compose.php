<?php $this->load->view('admin/template/header')?>

    <?php $this->load->view('admin/template/menu')?>
	<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="mailbox-compose-area mg-tb-15">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
										<div class="hpanel responsive-mg-b-30">
											<div class="panel-body">
												<a href="mailbox_compose.html" class="btn btn-success compose-btn btn-block m-b-md">Compose</a>
												<ul class="mailbox-list">
													<li>
														<a href="#">
																<span class="pull-right">12</span>
																<i class="fa fa-envelope"></i> Inbox
															</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-paper-plane"></i> Sent</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-pencil"></i> Draft</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-trash"></i> Trash</a>
													</li>
												</ul>
												<hr>
												<ul class="mailbox-list">
													<li>
														<a href="#"><i class="fa fa-plane text-danger"></i> Travel</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-bar-chart text-warning"></i> Finance</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-users text-info"></i> Social</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-tag text-success"></i> Promos</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-flag text-primary"></i> Updates</a>
													</li>
												</ul>
												<hr>
												<ul class="mailbox-list">
													<li>
														<a href="#"><i class="fa fa-gears"></i> Settings</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-info-circle"></i> Support</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
										<div class="hpanel email-compose mg-b-15">
											<div class="panel-heading hbuilt">
												<div class="p-xs h4">
													New message
												</div>
											</div>
											<div class="panel-heading hbuilt">
												<div class="p-xs">
													<form method="get" class="form-horizontal">
														<div class="form-group">
															<label class="col-sm-1 control-label text-left">To:</label>
															<div class="col-sm-11">
																<input type="text" class="form-control input-sm" placeholder="example@email.com">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-1 control-label text-left">Cc:</label>
															<div class="col-sm-11">
																<input type="text" class="form-control input-sm">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-1 control-label text-left">Subject:</label>
															<div class="col-sm-11">
																<input type="text" class="form-control input-sm" placeholder="Enter Email subject">
															</div>
														</div>
													</form>
												</div>
											</div>
											<div class="panel-body no-padding">
												<div class="summernote6">
													<h5>Hello Jonathan! </h5>
													<p>Dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the dustrys</strong> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
														a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
														containing Lorem Ipsum passages, and more
														<br/>
														<br/>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
														a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. recently with.</p>
													<p>Mark Smith
													</p>
												</div>
											</div>

											<div class="panel-footer">
												<div class="pull-right">
													<div class="btn-group">
														<button class="btn btn-default"><i class="fa fa-edit"></i> Save</button>
														<button class="btn btn-default"><i class="fa fa-trash"></i> Discard</button>
													</div>
												</div>
												<button class="btn btn-primary ft-compse">Send email</button>
												<div class="btn-group">
													<button class="btn btn-default"><i class="fa fa-paperclip"></i> </button>
													<button class="btn btn-default"><i class="fa fa-image"></i> </button>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<?php $this->load->view('admin/template/footer')?>