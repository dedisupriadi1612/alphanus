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
                                <label for="menu">Menu</label>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="hidden" id="article_id" value="" />
                                        <input id="menu_id" readonly type="text"  style="display:none;">
                                        <input type="text" readonly id="menu_tittle"  class="form-control" >
                                    </div>
                                    <span class="input-group-addon">
                                        <button class="btn btn-outline-secondary bg-blue btn-sm waves-effect" id="findMenu" type="button">
                                            <i class='material-icons' style="color:white">search</i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                <label for="name">Judul</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="article_tittle" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <button type='button' class='btn btn-sm btn-warning waves-effect' id="btnPublish" >Publish</button>
                            <button type='button' class='btn btn-sm btn-success waves-effect' id="btnSimpan" >Simpan</button>
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


        </div>
    </section>


    <?php $this->load->view('admin/template/script')?>
    <?php $this->load->view('admin/lov/lov_menuBlog'); ?>


    <script type="text/javascript">
        var x   = location.href;
        var url = new URL(x);
        var id   = url.searchParams.get("id");

        $('#article_id').val(id);

        if (id!==0)
            getDetails(id);


        if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
            CKEDITOR.tools.enableHtml5Elements( document );


        CKEDITOR.config.height = 150;
        CKEDITOR.config.width = 'auto';
        CKEDITOR.config.filebrowserUploadUrl = "<?php echo base_url().'artikel/uploads';?>";
        CKEDITOR.config.removePlugins = 'elementspath,save,print,preview,';

        CKEDITOR.config.removeButtons = 'Button,ImageButton,Form,Checkbox,Radio,TextField,Textarea,Select,HiddenField,Iframe,About,Anchor';

        CKEDITOR.config.removeDialogTabs = 'image:advanced;image:Link;link:advanced;link:upload;link:target;flash:advanced;';

        // var editorElement = CKEDITOR.document.getById( 'editor' );

        // editorElement.setHtml(
                      //   "<h1>Hello world!</h1>"
                  //   );

        CKEDITOR.replace( 'editor' );


        $('#btnTutup').click(function() {
            swal({
                title: "Close Confirmation",
                text: "Simpan Perubahan?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Simpan!",
                cancelButtonText: "Tidak",
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
                showLoaderOnCancel: true
                },
                function(){
                     var url = "<?php echo base_url('artikel');?>";
                        window.location = url;
                    return;
                });
        });

        $('#btnSimpan').click(function() {
            //
            crud(1);
        });

        $('#btnPublish').click(function() {
            swal({
                title: "Publish Confirmation",
                text: "Simpan Perubahan?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Publish!",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
                },
                function(){
                    crud(2);
                });
        });

        $( "#findMenu" ).click(function() {
            modal_lov_menuBlog_show('menu_id','menu_tittle');
        });

        function getDetails(id){
            $.ajax({
                async: true,
                type: "POST",
                url: "<?php echo base_url().'artikel/getDetails'; ?>",
                data:{
                            article_id:id
                        },
                //dataType: "json",
                success: function (data) {

                    $("#article_id").val(data.article_id);
                    $("#article_tittle").val(data.article_tittle);
                    $("#menu_id").val(data.blog_type);
                    $("#menu_tittle").val(data.menu_tittle);
                    $("#editor").val(data.article_text);

                },

                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });
        }

        function crud(status){
            var action ;
            var article_id = $('#article_id').val();
            var article_tittle = $("#article_tittle").val();
            var menu_id = $("#menu_id").val();
            //var editor = $("#editor").val();
            var editor = CKEDITOR.instances.editor.getData();

            //alert(data);
           // return;

            action = 1;//Insert
            if (article_id != 0){
                action = 2;
            }

            $.ajax({
                async: true,
                type: "POST",
                url: "<?php echo base_url().'artikel/createUpdate'; ?>",
                data:{
                        action:action,
                        article_id:article_id,
                        blog_type:menu_id,
                        article_tittle:article_tittle,
                        article_text:editor,
                        article_status:status,
                        message_admin:"",
                        },
                //dataType: "json",
                success: function (data) {
                    if(!data.surl){
                        var url = "<?php echo base_url('auth/notFound') ?>";
                        if(data.surl_code==-1){
                            url = "<?php echo base_url('auth/logout') ?>";
                        }
                        window.location = url;
                        return;
                    }
                    //console.log(data);
                    if(data.code == 1){
                        //var url = "<?php echo base_url('artikel/editor?id=');?>"+data.id;
                        //window.location = url;
                    }else{
                        swal({
                            title: "ERROR !!!",
                            text: data.msg,
                            type: "error"
                            })
                    }
                },

                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });
        }

    </script>






</body>

</html>
