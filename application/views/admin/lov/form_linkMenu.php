<div id="modal_form_linkMenu" class="modal fade" tabindex="-1" style="overflow-y: scroll;">
    <div class="modal-dialog" style="width:700px;">
        <div class="modal-content">
            <!-- modal title -->
            <div class="modal-header no-padding">
                <h4 class="modal-title" id="defaultModalLabel">Form Details Link Menu</h4>
            </div>

            <input type="hidden" id="detailLinkMenu_id" value="" />

            <!-- modal body -->
            <div class="modal-body">
                <form class="form-horizontal">
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
                            <label for="url">URL</label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-5 col-xs-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="menu_url" class="form-control" >
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

<?php $this->load->view('admin/lov/lov_menuAll'); ?>

<script>

    function modal_form_linkMenu_show(detailLinkMenu_id) {
        clearData();
        modal_form_linkMenu_set_field_value(detailLinkMenu_id);
        $("#modal_form_linkMenu").modal({backdrop: 'static'});
        if(detailLinkMenu_id != 0)
            getDetails(detailLinkMenu_id);
    }


    function modal_form_linkMenu_set_field_value(detailLinkMenu_id) {
         $("#detailLinkMenu_id").val(detailLinkMenu_id);
    }

    function modal_form_linkMenu_set_value(detailLinkMenu_id) {
         $("#"+ $("#detailLinkMenu_id").val()).val(detailLinkMenu_id);
         $("#modal_form_linkMenu").modal("toggle");

         $("#"+ $("#detailLinkMenu_id").val()).change();
    }



    $( "#findMenu" ).click(function() {
        modal_lov_menuAll_show('menu_id','menu_tittle');
    });


    function getDetails(detailLinkMenuID){
        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'linkMenu/getDetails'; ?>",
            data:{
                        detailLinkMenu_id:detailLinkMenuID
                    },
            //dataType: "json",
            success: function (data) {

                $("#detailLinkMenu_id").val(data.detailLinkMenu_id);
                $("#menu_id").val(data.menu_id);
                $("#menu_tittle").val(data.menu_tittle);
                $("#menu_url").val(data.link_menu);
                $('.selectpicker').selectpicker('refresh');
            },

            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    }

    function clearData(){
        $("#detailLinkMenu_id").val(null);
        $("#menu_id").val(null);
        $("#menu_tittle").val(null);
        $("#menu_url").val(null);
        $('.selectpicker').selectpicker('refresh');
    }

    function crud(){
        var action ;
        var detailLinkMenu_id = $("#detailLinkMenu_id").val();
        var menu_id = $("#menu_id").val();
        var menu_url = $("#menu_url").val();

        action = 1;//Insert
        if (detailLinkMenu_id != 0){
            action = 2; // update
        }

        $.ajax({
            async: true,
            type: "POST",
            url: "<?php echo base_url().'linkMenu/createUpdate'; ?>",
            data:{
                       action:action,
                       detailLinkMenu_id:detailLinkMenu_id,
                       menu_id:menu_id,
                       menu_url:menu_url
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
                    $("#modal_form_linkMenu").modal("toggle");
                    var url = "<?php echo base_url('linkMenu');?>";
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