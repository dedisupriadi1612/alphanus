<?php $this->load->view('admin/template/header')?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Artikel</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tableIcon" class="table table-bordered table-striped table-hover dataTable js-exportable " >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Message</th>
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
                    url: "<?php echo base_url().'artikel/getData'; ?>",
                    data:{

                        }
                },
                columns: [
                    { "data": "article_id" },
                    { "data": "menu_tittle" },
                    { "data": "article_tittle" },
                    { "data": "status" },
                    { "data": "message_admin" },
                    { "data": "article_id",
                        "render": function(d, t, r) {
                            var id = r.article_id;
                            var status = r.article_status;
                            var returnString = "<button type='button' class='btn btn-sm btn-warning waves-effect' onclick='updateComfirmation("+id+","+status+")'><i class='material-icons'>mode_edit</i></button>";
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
                        text: 'Entri Baru',
                        action: function ( e, dt, node, config ) {
                            //alert( 'Button activated' );
                            var url = "<?php echo base_url('artikel/editor?id=0');?>";
                             window.location = url;
                        }
                    }
                ],
                "pageLength": 5,
                "bDestroy": true,
                "bAutoWidth": false,
                "order": [[ 0, "desc" ]]
                });
        }

        function updateComfirmation(id,status) {
            var url = "<?php echo base_url('artikel/editor?id=');?>"+id;


            if (status == 3){
                swal({
                title: "Update Confirmation",
                text: "Apakah Anda Ingin Mengubah Artikel Yang Sudah Terposting, status artikel akan berubah?",
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
            }else{
                window.location = url;
            }
        }

        function deleteConfirmation(id,status) {
                var url = "<?php echo base_url('artikel/delete?article_id=');?>"+id;
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
