<?php $this->load->view('admin/template/header')?>

    <?php $this->load->view('admin/template/menu')?>
	<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="code-editor-area mg-tb-15">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="code-editor-single responsive-mg-b-30">
											<h2>Code Editor Style One</h2>
											<textarea id="code1">
													<script>
														$(document).ready(function() {

															var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
																lineNumbers: true,
																matchBrackets: true,
																styleActiveLine: true,
																theme: "ambiance"
															});

															var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
																lineNumbers: true,
																matchBrackets: true,
																styleActiveLine: true
															});

														});
													</script>
												</textarea>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="code-editor-single shadow-reset">
											<h2>Code Editor Style Two</h2>
											<textarea id="code2">
													<script>
														$(document).ready(function() {

															var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
																lineNumbers: true,
																matchBrackets: true,
																styleActiveLine: true,
																theme: "ambiance"
															});

															var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
																lineNumbers: true,
																matchBrackets: true,
																styleActiveLine: true
															});

														});
													</script>
												</textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
<?php $this->load->view('admin/template/footer')?>