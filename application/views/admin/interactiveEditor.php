<?php $this->load->view('admin/template/header')?>


    <section class="content">
        <div class="container-fluid">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>Editor <?php echo ucfirst($lang);?></h2>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <textarea class="form-control"   id="code" name="code"></textarea>
                        </div><br>
                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-outline-success btn-rounded waves-light waves-effect" id="btnexecute" name="btnexecute" type="button">Running</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>Priview <?php echo ucfirst($lang);?></h2>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <iframe frameborder="0" width="100%" height="370"  id="preview" name="preview">

                            </iframe>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>



    <?php $this->load->view('admin/template/script')?>

    <script>
            document.addEventListener('contextmenu', event => event.preventDefault());
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

            var   csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

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
                        // csrfHash = response.csrfHash;
                        var $iframe = $('#preview');

                        // alert(response.output);

                        // $iframe.ready(function() {

                            $iframe.contents().find("body").html(response.output);
                        // });

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


</body>

</html>
