<div id="modal_form_privilageUser" class="modal fade" tabindex="-1" style="overflow-y: scroll;">
    <div class="modal-dialog" style="width:700px;">
        <div class="modal-content">
            <!-- modal title -->
            <div class="modal-header no-padding">
                <h4 class="modal-title" id="defaultModalLabel">Form Privilage User</h4>
            </div>

            <input type="hidden" id="privilage_user_id" value="" />

            <!-- modal body -->
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                            <label for="user">User</label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-5 col-xs-4">
                            <div class="input-group">
                                <div class="form-line">
                                    <input id="user_id" readonly type="text"  style="display:none;">
                                    <input type="text" readonly id="user_name"  class="form-control" >
                                </div>
                                <span class="input-group-addon">
                                    <button class="btn btn-outline-secondary bg-blue btn-sm waves-effect" id="findUser" type="button">
                                        <i class='material-icons' style="color:white">search</i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                            <label for="privilage_type">Privilage Type</label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-5 col-xs-4">
                            <div class="input-group">
                                <div class="form-line">
                                    <input id="privilage_type_id" readonly type="text"  style="display:none;">
                                    <input type="text" readonly id="privilage_type_name"  class="form-control" >
                                </div>
                                <span class="input-group-addon">
                                    <button class="btn btn-outline-secondary bg-blue btn-sm waves-effect" id="findPrivilageType" type="button">
                                        <i class='material-icons' style="color:white">search</i>
                                    </button>
                                </span>
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

<?php $this->load->view('admin/lov/lov_privilageType'); ?>
<?php $this->load->view('admin/lov/lov_user'); ?>

<script>

    function modal_form_privilageUser_show(privilage_user_id) {
        clearData();
        modal_form_privilageUser_set_field_value(privilage_user_id);
        $("#modal_form_privilageUser").modal({backdrop: 'static'});
        if(privilage_user_id != 0)
            getDetails(privilage_user_id);
    }


    function modal_form_privilageUser_set_field_value(privilage_user_id) {
         $("#privilage_user_id").val(privilage_user_id);
    }

    function modal_form_privilageUser_set_value(privilage_user_id) {
         $("#"+ $("#privilage_user_id").val()).val(privilage_user_id);
         $("#modal_form_privilageUser").modal("toggle");

         $("#"+ $("#privilage_user_id").val()).change();
    }

    $( "#findPrivilageType" ).click(function() {
        modal_lov_privilageType_show('privilage_type_id','privilage_type_name');
    });

    $( "#findUser" ).click(function() {
        modal_lov_user_show('user_id','user_name');
    });


    function getDetails(id){
        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'privilageUser/getDetails'; ?>",
            data:{
                        privilage_user_id:id
                    },
            //dataType: "json",
            success: function (data) {
                $("#privilage_user_id").val(data.privilage_user_id);
                $("#privilage_type_id").val(data.privilage_type_id);
                $("#privilage_type_name").val(data.privilage_type_name);
                $("#user_id").val(data.user_id);
                $("#user_name").val(data.user_name);
            },

            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    }

    function clearData(){
        $("#privilage_user_id").val(null);
        $("#privilage_type_id").val(null);
        $("#privilage_type_name").val(null);
        $("#user_id").val(null);
        $("#user_name").val(null);
    }

    function crud(){
        var action ;
        var privilage_user_id = $("#privilage_user_id").val();
        var privilage_type_id = $("#privilage_type_id").val();
        var user_id = $("#user_id").val();

        action = 1;//Insert
        if (privilage_user_id != 0){
            action = 2; // update
        }

        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'privilageUser/createUpdate'; ?>",
            data:{
                       action:action,
                       privilage_user_id:privilage_user_id,
                       privilage_type_id:privilage_type_id,
                       user_id:user_id
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
                    $("#modal_form_privilageUser").modal("toggle");
                    var url = "<?php echo base_url('privilageUser');?>";
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