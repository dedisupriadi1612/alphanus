<?php $this->load->view('admin/template/header')?>

    <?php $this->load->view('admin/template/menu')?>
	<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <div class="pdf-viewer-area mg-tb-15">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									</div>
									<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
										<div class="pdf-single-pro">
											<a class="media" href="<?php echo base_url();?>assets/admin/pdf/mamunur.pdf"></a>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									</div>
								</div>
							</div>
						</div>
<?php $this->load->view('admin/template/footer')?>