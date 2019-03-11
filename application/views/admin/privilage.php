<?php $this->load->view('admin/template/header')?>


    <section class="content">
        <div class="container-fluid">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Privilage</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tablePrivilage" class="table table-bordered table-striped table-hover dataTable js-exportable ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type Name</th>
                                        <th>Menu Name</th>
                                        <th>Module Name</th>
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

    <?php $this->load->view('admin/lov/form_privilage'); ?>

    <script>

       $(function () {
            loadTable();
        });





        function loadTable(){

            $('#tablePrivilage').DataTable({

                ajax: {
                    type: "POST",
                    url: "<?php echo base_url().'privilage/getData'; ?>",
                    data:{

                        }
                },
                columns: [
                    { "data": "privilage_id" },
                    { "data": "privilage_type_name" },
                    { "data": "menu_tittle" },
                    { "data": "module_name" },
                    { "data": "privilage_id",
                        "render": function(d, t, r) {
                            var id = r.privilage_id;
                            var returnString = "<button type='button' class='btn btn-sm btn-warning waves-effect' onclick='modal_form_privilage_show("+id+")'><i class='material-icons'>mode_edit</i></button>";
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
                        text: 'Tambah Privilage',
                        action: function ( e, dt, node, config ) {
                            //alert( 'Button activated' );
                            modal_form_privilage_show(0);
                        }
                    }
                ],
                "pageLength": 5,
                "bDestroy": true,
                "order": [[ 0, "desc" ]]
                });
        }

        function deleteConfirmation(id) {
                var url = "<?php echo base_url('PrivilageType/delete?Privilage_type_id=');?>"+id;
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
