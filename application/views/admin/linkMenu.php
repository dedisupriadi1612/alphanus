<?php $this->load->view('admin/template/header')?>


    <section class="content">
        <div class="container-fluid">

            <div class="block-header">
                <h2></h2>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Link Menu</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tablePrivilage" class="table table-bordered table-striped table-hover dataTable js-exportable ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Menu Name</th>
                                        <th>URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <?php $this->load->view('admin/lov/form_linkMenu'); ?>

    <script>

       $(function () {
            loadTable();
        });


        function loadTable(){

            $('#tablePrivilage').DataTable({

                ajax: {
                    type: "POST",
                    url: "<?php echo base_url().'linkMenu/getData'; ?>",
                    data:{
                        }
                },
                columns: [
                    { "data": "detailLinkMenu_id" },
                    { "data": "menu_tittle" },
                    { "data": "link_menu" },
                    { "data": "detailLinkMenu_id",
                        "render": function(d, t, r) {
                            var id = r.detailLinkMenu_id;
                            var returnString = "<button type='button' class='btn btn-sm btn-warning waves-effect' onclick='modal_form_linkMenu_show("+id+")'><i class='material-icons'>mode_edit</i></button>";
                            returnString += "&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-sm btn-danger  waves-effect' onclick='deleteConfirmation("+id+")'><i class='material-icons'>delete</i></button>"
                            return returnString;
                        }
                    },
                ],
                dom: 'Bfrtip',
                responsive: true,
                select:true,
                buttons: [
                    {
                        text: 'Tambah Link Menu',
                        action: function ( e, dt, node, config ) {
                            //alert( 'Button activated' );
                            modal_form_linkMenu_show(0);
                        }
                    }
                ],
                "pageLength": 5,
                "bDestroy": true,
                "bAutoWidth": false,
                "order": [[ 0, "desc" ]]
                });
        }

        function deleteConfirmation(id) {
                var url = "<?php echo base_url('linkMenu/delete?detailLinkMenu_id=');?>"+id;
                swal({
                title: "Delete Confirmation",
                text: "Are You sure to delete selected record?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
                },
                function(){
                    window.location = url;
                });
            }


    </script>

    <?php $this->load->view('admin/template/script')?>


</body>

</html>
