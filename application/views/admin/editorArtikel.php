<?php $this->load->view('admin/template/header')?>


    <section class="content">
        <div class="container-fluid">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Editor Artikel</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                <label for="name">Judul</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="icon_name" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <button type='button' class='btn btn-sm btn-warning waves-effect' >Publish</button>
                            <button type='button' class='btn btn-sm btn-success waves-effect' >Simpan</button>
                            <button type='button' class='btn btn-sm btn-danger waves-effect' id="btnTutup" >Tutup</button>
                        </div>

                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea id="editor">

                            </textarea>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <?php $this->load->view('admin/template/script')?>


    <script type="text/javascript">


        /**
         * Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
         * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
         */

        /* exported initSample */

        //alert(CKEDITOR.config.height);

        if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
            CKEDITOR.tools.enableHtml5Elements( document );


        CKEDITOR.config.height = 150;
        CKEDITOR.config.width = 'auto';
        CKEDITOR.config.filebrowserUploadUrl = "<?php echo base_url().'artikel/uploads';?>";
        CKEDITOR.config.removePlugins = 'elementspath,save,print,preview,';

        CKEDITOR.config.removeButtons = 'Button,ImageButton,Form,Checkbox,Radio,TextField,Textarea,Select,HiddenField,Iframe,About,Anchor';

        CKEDITOR.config.removeDialogTabs = 'image:advanced;image:Link;link:advanced;link:upload;link:target;flash:advanced;';

         var editorElement = CKEDITOR.document.getById( 'editor' );

         editorElement.setHtml(
                         "<h1>Hello world!</h1><p>I&#39;m an instance of <a href='https://ckeditor.com'>CKEditor</a>.</p>"
                     );

        CKEDITOR.replace( 'editor' );

        //$('#editor').val('ted');

        //alert($('#editor').val());

        $('#btnTutup').click(function() {
            swal({
                title: "Close Confirmation",
                text: "Simpan Perubahan?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Simpan!",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
                },
                function(){
                    //action yes
                    return;
                });
        });

        $('#btnSimpan').click(function() {
            //
            alert('simpan');
        });

        $('#btnPublish').click(function() {
            swal({
                title: "Close Confirmation",
                text: "Simpan Perubahan?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Simpan!",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
                },
                function(){
                    //action yes
                    return;
                });
        });

    </script>






</body>

</html>
