<div id="modal_form_icon" class="modal fade" tabindex="-1" style="overflow-y: scroll;">
    <div class="modal-dialog" style="width:700px;">
        <div class="modal-content">
            <!-- modal title -->
            <div class="modal-header no-padding">
                <h4 class="modal-title" id="defaultModalLabel">Form Icon</h4>
            </div>

            <input type="hidden" id="icon_id" value="" />

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
                                    <input type="text" id="icon_name" class="form-control" >
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
                                    <textarea rows="2" id="icon_description" class="form-control no-resize"></textarea>
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

    function modal_form_icon_show(icon_id) {
        clearData();
        modal_form_icon_set_field_value(icon_id);
        $("#modal_form_icon").modal({backdrop: 'static'});
        if(icon_id != 0)
            getDetails(icon_id);
    }


    function modal_form_icon_set_field_value(icon_id) {
         $("#icon_id").val(icon_id);
    }

    function modal_form_icon_set_value(icon_id) {
         $("#"+ $("#icon_id").val()).val(icon_id);
         $("#modal_form_icon").modal("toggle");

         $("#"+ $("#icon_id").val()).change();
    }



    function getDetails(iconID){
        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'icon/getIconDetails'; ?>",
            data:{
                        icon_id:iconID
                    },
            //dataType: "json",
            success: function (data) {
                $("#icon_id").val(data.icon_id);
                $("#icon_name").val(data.icon_name);
                $("#icon_description").val(data.icon_description);
            },

            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    }

    function clearData(){
        $("#icon_id").val(null);
        $("#icon_name").val(null);
        $("#icon_description").val(null);
    }

    function crud(){
        var action ;
        var icon_id = $("#icon_id").val();
        var icon_name = $("#icon_name").val();
        var icon_description = $("#icon_description").val();

        action = 1;//Insert
        if (icon_id != 0){
            action = 2;
        }

        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'icon/createUpdate'; ?>",
            data:{
                       action:action,
                       icon_id:icon_id,
                       icon_name:icon_name,
                       icon_description:icon_description
                    },
            //dataType: "json",
            success: function (data) {
                //console.log(data);
                if(data.code == 1){
                    $("#modal_form_icon").modal("toggle");
                    var url = "<?php echo base_url('icon');?>";
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