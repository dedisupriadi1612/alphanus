<div id="modal_form_kelasInteractive" class="modal fade" tabindex="-1" style="overflow-y: scroll;">
    <div class="modal-dialog" style="width:700px;">
        <div class="modal-content">
            <!-- modal title -->
            <div class="modal-header no-padding">
                <h4 class="modal-title" id="defaultModalLabel">Form Kelas Interactive</h4>
            </div>

            <input type="hidden" id="privilage_type_id" value="" />

            <!-- modal body -->
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="privilage_type_name" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="description">Description</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="2" id="privilage_type_description" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="button" onClick="crud();" class="btn btn-primary m-t-15 waves-effect">Save</button>
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

    function modal_form_kelasInteractive_show(privilage_type_id) {
        clearData();
        modal_form_kelasInteractive_set_field_value(privilage_type_id);
        $("#modal_form_kelasInteractive").modal({backdrop: 'static'});
        if(privilage_type_id != 0)
            getDetails(privilage_type_id);
    }


    function modal_form_kelasInteractive_set_field_value(privilage_type_id) {
         $("#privilage_type_id").val(privilage_type_id);
    }

    function modal_form_kelasInteractive_set_value(privilage_type_id) {
         $("#"+ $("#privilage_type_id").val()).val(privilage_type_id);
         $("#modal_form_kelasInteractive").modal("toggle");

         $("#"+ $("#privilage_type_id").val()).change();
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
                $("#privilage_type_id").val(data.privilage_type_id);
                $("#privilage_type_name").val(data.privilage_type_name);
                $("#privilage_type_description").val(data.privilage_type_description);
            },

            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    }

    function clearData(){
        $("#privilage_type_id").val(null);
        $("#privilage_type_name").val(null);
        $("#icon_description").val(null);
    }

    function crud(){
        var action ;
        var privilage_type_id = $("#privilage_type_id").val();
        var privilage_type_name = $("#privilage_type_name").val();
        var privilage_type_description = $("#privilage_type_description").val();

        action = 1;//Insert
        if (privilage_type_id != 0){
            action = 2;
        }

        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'kelasInteractive/createUpdate'; ?>",
            data:{
                       action:action,
                       privilage_type_id:privilage_type_id,
                       privilage_type_name:privilage_type_name,
                       privilage_type_description:privilage_type_description
                    },
            //dataType: "json",
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
    }



</script>