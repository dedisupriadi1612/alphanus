<?php $this->load->view('admin/template/header')?>


    <section class="content">
        <div class="container-fluid">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Kelas Interactive</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tableData" class="table table-bordered table-striped table-hover dataTable js-exportable ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Code</th>
                                        <th>Language</th>
                                        <th>Mode</th>
                                        <th>Execute</th>
                                        <th>Image</th>
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

    <?php $this->load->view('admin/lov/form_kelasInteractive'); ?>


    <script>

       $(function () {
            loadTable();
        });





        function loadTable(){

            $('#tableData').DataTable({

                ajax: {
                    type: "POST",
                    url: "<?php echo base_url().'kelasInteractive/getData'; ?>",
                    data:{

                        }
                },
                columns: [
                    { "data": "interactive_id" },
                    { "data": "interactive_code" },
                    { "data": "interactive_lang" },
                    { "data": "interactive_mode" },
                    { "data": "interactive_execute" },
                    { "data": "interactive_image" },
                    { "data": "interactive_desc" },
                    { "data": "interactive_id",
                        "render": function(d, t, r) {
                            var id = r.interactive_id;
                            var returnString = "<button type='button' class='btn btn-sm btn-warning waves-effect' onclick='modal_form_kelasInteractive_show("+id+")'><i class='material-icons'>mode_edit</i></button>";
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
                        text: 'Tambah Kelas',
                        action: function ( e, dt, node, config ) {
                            //alert( 'Button activated' );
                            modal_form_kelasInteractive_show(0);
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
                var url = "<?php echo base_url('kelasInteractive/delete?interactive_id=');?>"+id;
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
