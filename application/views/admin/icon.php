<?php $this->load->view('admin/template/header')?>


    <section class="content">
        <div class="container-fluid">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Data Icon</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tableIcon" class="table table-bordered table-striped table-hover dataTable js-exportable ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Display</th>
                                        <th>Description</th>
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

    <?php $this->load->view('admin/lov/form_icon'); ?>


    <script>

       $(function () {
            loadTable();
        });





        function loadTable(){

            $('#tableIcon').DataTable({

                ajax: {
                    type: "POST",
                    url: "<?php echo base_url().'icon/getIcon'; ?>",
                    data:{

                        }
                },
                columns: [
                    { "data": "icon_id" },
                    { "data": "icon_name" },
                    { "data": "icon_name",
                        "render": function(d, t, r) {
                            var icon_name = r.icon_name;
                            var returnString = "<i class='material-icons'>"+icon_name+"</i>";

                            return returnString;
                        }
                    },
                    { "data": "icon_description" },
                    { "data": "icon_id",
                        "render": function(d, t, r) {
                            var icon_id = r.icon_id;
                            var returnString = "<button type='button' class='btn btn-sm btn-warning waves-effect' onclick='modal_form_icon_show("+icon_id+")'><i class='material-icons'>mode_edit</i></button>";
                            returnString += "&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-sm btn-danger  waves-effect' onclick='deleteConfirmation("+icon_id+")'><i class='material-icons'>delete</i></button>"
                            return returnString;
                        }
                    },
                ],
                dom: 'Bfrtip',
                responsive: true,
                select:true,
                buttons: [
                    {
                        text: 'Tambah Icon',
                        action: function ( e, dt, node, config ) {
                            //alert( 'Button activated' );
                            modal_form_icon_show(0);
                        }
                    }
                ],
                "pageLength": 5,
                "bDestroy": true
                });
        }

        function deleteConfirmation(id) {
                var url = "<?php echo base_url('icon/delete?icon_id=');?>"+id;
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
