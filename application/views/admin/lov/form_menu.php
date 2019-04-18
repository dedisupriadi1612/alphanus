<div id="modal_form_menu" class="modal fade" tabindex="-1" style="overflow-y: scroll;">
    <div class="modal-dialog" style="width:700px;">
        <div class="modal-content">
            <!-- modal title -->
            <div class="modal-header no-padding">
                <h4 class="modal-title" id="defaultModalLabel">Form Menu</h4>
            </div>

            <input type="hidden" id="menu_id" value="" />
            <input type="hidden" id="menu_parent" value="" />

            <!-- modal body -->
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="tittle">Tittle</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="menu_tittle" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="url">URL</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="menu_url" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="icon">ICON</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="input-group">
                                <div class="form-line">
                                    <input id="menu_icon_id" readonly type="text"  style="display:none;">
                                    <input type="text" readonly id="menu_icon"  class="form-control" >
                                </div>
                                <span class="input-group-addon">
                                    <button class="btn btn-outline-secondary bg-blue btn-sm waves-effect" id="findIcon" type="button">
                                        <i class='material-icons' style="color:white">search</i>
                                    </button>
                                </span>
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
                                    <textarea rows="2" id="menu_description" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="order">ORDER</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" id="menu_order" class="form-control" >
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

    function modal_form_menu_show(menu_id,menu_parent) {
        clearData();
        modal_form_menu_set_field_value(menu_id,menu_parent);
        $("#modal_form_menu").modal({backdrop: 'static'});
        if(menu_id != 0)
            getDetails(menu_id);
    }


    function modal_form_menu_set_field_value(menu_id,menu_parent) {
         $("#menu_id").val(menu_id);
         $("#menu_parent").val(menu_parent);
    }

    function modal_form_menu_set_value(menu_id,menu_parent) {
         $("#"+ $("#menu_id").val()).val(menu_id);
         $("#"+ $("#menu_parent").val()).val(menu_parent);
         $("#modal_form_menu").modal("toggle");

         $("#"+ $("#menu_id").val()).change();
         $("#"+ $("#menu_parent").val()).change();
    }

    $( "#findIcon" ).click(function() {

        modal_lov_icon_show('menu_icon_id','menu_icon');
    });

    function getDetails(menuID){
        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'menu/getMenuDetails'; ?>",
            data:{
                        menu_id:menuID
                    },
            //dataType: "json",
            success: function (data) {

                $("#menu_id").val(data.menu_id);
                $("#menu_parent").val(data.menu_parent);
                $("#menu_tittle").val(data.menu_tittle);
                $("#menu_url").val(data.menu_url);
                $("#menu_icon").val(data.menu_icon);
                $("#menu_description").val(data.menu_description);
                $("#menu_order").val(data.menu_order);
            },

            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    }

    function clearData(){
        $("#menu_id").val(null);
        $("#menu_parent").val(null);
        $("#menu_tittle").val(null);
        $("#menu_url").val(null);
        $("#menu_icon").val(null);
        $("#menu_description").val(null);
        $("#menu_order").val(null);

    }

    function crud(){
        var action ;
        var menu_id = $("#menu_id").val();
        var menu_parent = $("#menu_parent").val();
        var menu_tittle = $("#menu_tittle").val();
        var menu_url = $("#menu_url").val();
        var menu_icon = $("#menu_icon").val();
        var menu_description = $("#menu_description").val();
        var menu_order = $("#menu_order").val();

        action = 1;//Insert
        if (menu_id != 0){
            action = 2;
        }

        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'menu/createUpdate'; ?>",
            data:{
                       action:action,
                       menu_id:menu_id,
                       menu_parent:menu_parent,
                       menu_tittle:menu_tittle,
                       menu_url:menu_url,
                       menu_icon:menu_icon,
                       menu_description:menu_description,
                       menu_order:menu_order
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
                    $("#modal_form_menu").modal("toggle");
                    var url = "<?php echo base_url('menu');?>";
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