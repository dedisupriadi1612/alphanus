<?php $this->load->view('template/header')?>
        <div class="wrapper">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Alphanus</a></li>
                                    <li class="breadcrumb-item"><a href="#">Interactive</a></li>
                                    <li class="breadcrumb-item active"><?php echo ucfirst($lang);?></li>
                                </ol>
                            </div>
                            <h4 class="page-title"><?php echo ucfirst($lang);?></h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card-box">
                            <h4 class="header-title">Editor</h4>                            
                                <div class="col-12">
                                    <textarea class="form-control"   id="code" name="code"></textarea>
                                </div><br>
                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-outline-success btn-rounded waves-light waves-effect" id="btnexecute" name="btnexecute" type="button">Running</button>
                                </div>
                                
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card-box">
                            <h4 class="header-title">Preview</h4>

                            <div class="col-12">
                                 <iframe frameborder="0" width="100%" height="370"  id="preview" name="preview">
                                 
                                </iframe>  

                                
                                
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        <script>
            var lang = "<?php echo $lang;?>";
            var codelang = "<?php echo $code;?>";
            var dft = '<?php echo $default;?>';
            var delay;
            //$("#code").val(dft);
            // Initialize CodeMirror editor with a nice html5 canvas demo.
            var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
                <?php echo $mode;?>
                theme:"monokai",
                lineNumbers: true,
                styleActiveLine: true,
                matchBrackets: true
                
            });

            editor.setValue(dft);
            
            $( "#btnexecute" ).click(function() {
                if(codelang == "html"){
                    updatePreview();
                }else{
                    var codeEditor = editor.getValue();
                    
                    $.ajax({
                        method: "POST",
                        url: "<?php echo base_url().'interactive/compile' ?>",
                        data: { code: codelang, editor:codeEditor }
                    })
                    .done(function( response ) {

                        var $iframe = $('#preview');
                        $iframe.ready(function() {
                            $iframe.contents().find("body").html(response.output);
                        });

                    });

                }
            });
            
            
            function updatePreview() {
                var previewFrame = document.getElementById('preview');
                var preview =  previewFrame.contentDocument ||  previewFrame.contentWindow.document;
                preview.open();
                preview.write(editor.getValue());
                preview.close();
            }

        </script>
        
<?php $this->load->view('template/footer')?>

