<div id="modal_lov_icon" class="modal fade" tabindex="-1" style="overflow-y: scroll;">
    <div class="modal-dialog" style="width:700px;">
        <div class="modal-content">
            <!-- modal title -->
            <div class="modal-header no-padding">
                <div class="table-header">
                    <span class="form-add-edit-title"> Data Icon</span>
                </div>
            </div>
            <input type="hidden" id="modal_lov_icon_id_val" value="" />
            <input type="hidden" id="modal_lov_icon_code_val" value="" />

            <!-- modal body -->
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="tableListIcon" class="table table-bordered table-striped table-hover dataTable js-exportable " style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Options</th>
                                <th>Display</th>
                                <th>Code</th>
                                <th>Description</th>
                            </tr>
                        </thead>

                    </table>
                </div>
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

<script>
    function blank(){
        $("#"+ $("#modal_lov_icon_id_val").val()).val("");
        $("#"+ $("#modal_lov_icon_code_val").val()).val("");
        $("#modal_lov_icon").modal("toggle");
    }

    function modal_lov_icon_show(the_id_field, the_code_field) {
        modal_lov_icon_set_field_value(the_id_field, the_code_field);
        $("#modal_lov_icon").modal({backdrop: 'static'});
        modal_lov_icon_prepare_table();
    }


    function modal_lov_icon_set_field_value(the_id_field, the_code_field) {
         $("#modal_lov_icon_id_val").val(the_id_field);
         $("#modal_lov_icon_code_val").val(the_code_field);
    }

    function modal_lov_icon_set_value(the_id_val, the_code_val) {
         $("#"+ $("#modal_lov_icon_id_val").val()).val(the_id_val);
         $("#"+ $("#modal_lov_icon_code_val").val()).val(the_code_val);
         $("#modal_lov_icon").modal("toggle");

         $("#"+ $("#modal_lov_icon_id_val").val()).change();
         $("#"+ $("#modal_lov_icon_code_val").val()).change();
    }

    function modal_lov_icon_prepare_table() {
        $('#tableListIcon').DataTable({

                ajax: {
                    type: "POST",
                    url: "<?php echo base_url().'icon/getIcon'; ?>",
                    data:{
                        }
                },
                columns: [
                    { "data": "icon_id" },
                    { "data": "icon_id",
                        "render": function(d, t, r) {
                            var icon_id = r.icon_id;
                            var returnString = '<button type="button" onclick="modal_lov_icon_set_value(\''+ r.icon_id +'\', \''+ r.icon_name +'\')" class="btn btn-sm bg-green waves-effect"><i class="material-icons" style="color:white">mode_edit</i></button>';
                            return returnString;
                        }
                    },
                    { "data": "icon_name",
                        "render": function(d, t, r) {
                            var icon_name = r.icon_name;
                            var returnString = "<i class='material-icons'>"+icon_name+"</i>";

                            return returnString;
                        }
                    },
                    { "data": "icon_name" },
                    { "data": "icon_description" }
                ],
                dom: 'Bfrtip',
                responsive: true,
                select:false,
                buttons: [
                    {
                        text: 'BLANK',
                        action: function ( e, dt, node, config ) {
                            blank();
                        }
                    }
                ],
                "pageLength": 5,
                "bDestroy": true
                });
    }
</script>