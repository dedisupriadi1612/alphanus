<div id="modal_form_kelasInteractive" class="modal fade" tabindex="-1" style="overflow-y: scroll;">
    <div class="modal-dialog" style="width:700px;">
        <div class="modal-content">
            <!-- modal title -->
            <div class="modal-header no-padding">
                <h4 class="modal-title" id="defaultModalLabel">Form Kelas Interactive</h4>
            </div>



            <!-- modal body -->
            <div class="modal-body">
                <form class="form-horizontal" role="form" id="form_legal" name="form_legal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                    <input type="hidden" id="interactive_id" name="interactive_id" value="" />
                    <input type="hidden" id="action" name="action" value="" />
                    <input type="hidden" id="flagChangeImage" name="flagChangeImage" value="" />
                    <input type="hidden" id="tempNameImage" name="tempNameImage" value="" />
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="lang">Languange</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="interactive_lang"
                                    name="interactive_lang" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="code">Code</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="interactive_code"
                                    name="interactive_code"
                                    class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="mode">Mode</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="interactive_mode"
                                    name="interactive_mode" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="exec">Execute</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="interactive_execute"
                                    name="interactive_execute" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="img">Image</label>
                        </div>
                        <div id = "inputGambar" class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file"  class="col-lg-7"name="interactive_image" id="interactive_image">
                                    <div id="deleteGambar">
                                        <label id="nameImage" name="nameImage" >Image</label>
                                        <input type="checkbox" id="cbChangeImage" class="chk-col-red" /> Change
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- <div id="deleteGambar" class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <button type='button' class='btn btn-sm btn-danger  waves-effect' onclick='deleteConfimation()'><i class='material-icons'>delete</i></button>
                                <label id="nameImage">Image</label>
                            </div>
                        </div> -->
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="description">Description</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="2" id="interactive_desc"
                                    name="interactive_desc" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- modal footer -->
            <div class="modal-footer no-margin-top">
                <div class="bootstrap-dialog-footer">
                    <div class="bootstrap-dialog-footer-buttons">
                        <button class="btn btn-danger btn-sm radius-4" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.end modal -->

<?php $this->load->view('admin/lov/lov_icon'); ?>

<script>

     //$("#test1").attr("visibility", "visible");
     // hidden visible



    function modal_form_kelasInteractive_show(interactive_id) {
        clearData();
        modal_form_kelasInteractive_set_field_value(interactive_id);
        $("#modal_form_kelasInteractive").modal({backdrop: 'static'});

        $( "#inputGambar" ).show();
        $( "#deleteGambar" ).hide();
        if(interactive_id != 0){
            // $( "#inputGambar" ).hide();
            $( "#deleteGambar" ).show();
            getDetails(interactive_id);
        }

    }


    function modal_form_kelasInteractive_set_field_value(interactive_id) {
         $("#interactive_id").val(interactive_id);
    }



    function modal_form_kelasInteractive_set_value(interactive_id) {
         $("#"+ $("#interactive_id").val()).val(interactive_id);
         $("#modal_form_kelasInteractive").modal("toggle");

         $("#"+ $("#interactive_id").val()).change();
    }



    function getDetails(kelasInteractiveId){
        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'kelasInteractive/getDetails'; ?>",
            data:{
                        interactive_id:kelasInteractiveId
                    },
            //dataType: "json",
            success: function (data) {
                $("#interactive_id").val(data.interactive_id);
                $("#interactive_lang").val(data.interactive_lang);
                $("#interactive_code").val(data.interactive_code);
                $("#interactive_mode").val(data.interactive_mode);
                $("#interactive_execute").val(data.interactive_execute);
                $("#nameImage").text(data.interactive_image);
                $("#interactive_desc").val(data.interactive_desc);
                $("#tempNameImage").val(data.interactive_image);

                $( "#deleteGambar" ).show();
            },

            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    }

    function clearData(){
        $("#interactive_id").val(null);
        $("#interactive_lang").val(null);
        $("#interactive_code").val(null);
        $("#interactive_mode").val(null);
        $("#interactive_execute").val(null);
        $("#interactive_image").val(null);
        $("#interactive_desc").val(null);
    }

    $(function() {
        /* submit */
        $("#form_legal").on('submit', (function (e) {
            var action ;
            var interactive_id = $("#interactive_id").val();
            var interactive_lang = $("#interactive_lang").val();
            var interactive_code = $("#interactive_code").val();
            var interactive_mode = $("#interactive_mode").val();
            var interactive_execute = $("#interactive_execute").val();
            var interactive_desc = $("#interactive_desc").val();
            var interactive_image = $("#interactive_image").val();
            var flagChangeImage;

            action = 1;//Insert
            $("#action").val('1');
            if (interactive_id != 0){
                $("#action").val('2');
            }

            $("#flagChangeImage").val('f');
            if ($("#cbChangeImage").is(":checked")){
                $("#flagChangeImage").val('t');
            }



            var data = new FormData(this);




            $.ajax({
                async: true,
                type: "POST",
                url: "<?php echo base_url().'kelasInteractive/createUpdate'; ?>",
                data: data,
                timeout: 10000,
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData: false,
               // dataType: "json",
                success: function (data) {
                    //console.log(data);
                    if(data.code == 1){
                        $("#modal_form_kelasInteractive").modal("toggle");
                        var url = "<?php echo base_url('kelasInteractive');?>";
                        window.location = url;
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
            return false;
        }));

    });




</script>