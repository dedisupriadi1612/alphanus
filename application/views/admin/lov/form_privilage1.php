<div id="modal_form_privilage" class="modal fade" tabindex="-1" style="overflow-y: scroll;">
    <div class="modal-dialog" style="width:700px;">
        <div class="modal-content">
            <!-- modal title -->
            <div class="modal-header no-padding">
                <h4 class="modal-title" id="defaultModalLabel">Form Privilage</h4>
            </div>

            <input type="hidden" id="privilage_id" value="" />

            <!-- modal body -->
            <div class="modal-body">
                <form class="form-horizontal">
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
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                            <label for="menu">Menu</label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-5 col-xs-4">
                            <div class="input-group">
                                <div class="form-line">
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
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                            <label for="module">Module</label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-5 col-xs-4">
                            <div class="input-group">
                                <div class="form-line">
                                    <select id="module_id" class="form-control selectpicker show-tick">
                                        <option value="">-- Please select --</option>
                                        <option value="1">Dashboard</option>
                                        <option value="2">Home</option>
                                    </select>
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

<?php $this->load->view('admin/lov/lov_privilageType'); ?>
<?php $this->load->view('admin/lov/lov_menu'); ?>

<script>

    function modal_form_privilage_show(privilage_id) {
        clearData();
        modal_form_privilage_set_field_value(privilage_id);
        $("#modal_form_privilage").modal({backdrop: 'static'});
        if(privilage_id != 0)
            getDetails(privilage_id);
    }


    function modal_form_privilage_set_field_value(privilage_id) {
         $("#privilage_id").val(privilage_id);
    }

    function modal_form_privilage_set_value(privilage_id) {
         $("#"+ $("#privilage_id").val()).val(privilage_id);
         $("#modal_form_privilage").modal("toggle");

         $("#"+ $("#privilage_id").val()).change();
    }

    $( "#findPrivilageType" ).click(function() {
        modal_lov_privilageType_show('privilage_type_id','privilage_type_name');
    });

    $( "#findMenu" ).click(function() {
        modal_lov_menu_show('menu_id','menu_tittle');
    });


    function getDetails(privilageID){
        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'privilage/getDetails'; ?>",
            data:{
                        privilage_id:privilageID
                    },
            //dataType: "json",
            success: function (data) {
                $("#privilage_id").val(data.privilage_id);
                $("#privilage_type_id").val(data.privilage_type_id);
                $("#privilage_type_name").val(data.privilage_type_name);
                $("#menu_id").val(data.menu_id);
                $("#menu_tittle").val(data.menu_tittle);
                $("#module_id").val(data.module_id);
                $('.selectpicker').selectpicker('refresh');
            },

            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    }

    function clearData(){
        $("#privilage_id").val(null);
        $("#privilage_type_id").val(null);
        $("#privilage_type_name").val(null);
        $("#menu_id").val(null);
        $("#menu_tittle").val(null);
        $("#module_id").val(null);
        $('.selectpicker').selectpicker('refresh');
    }

    function crud(){
        var action ;
        var privilage_id = $("#privilage_id").val();
        var privilage_type_id = $("#privilage_type_id").val();
        var menu_id = $("#menu_id").val();
        var module_id = $("#module_id").val();

        action = 1;//Insert
        if (privilage_id != 0){
            action = 2; // update
        }

        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'privilage/createUpdate'; ?>",
            data:{
                       action:action,
                       privilage_id:privilage_id,
                       privilage_type_id:privilage_type_id,
                       menu_id:menu_id,
                       module_id:module_id
                    },
            //dataType: "json",
            success: function (data) {
                //console.log(data);
                if(data.code == 1){
                    $("#modal_form_privilage").modal("toggle");
                    var url = "<?php echo base_url('privilage');?>";
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