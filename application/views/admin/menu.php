<?php $this->load->view('admin/template/header')?>


    <section class="content">
        <div class="container-fluid">

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>List Menu</h2>
                    </div>
                    <div class="body">
                        <div class="sparkline10-graph">
                            <div class="adminpro-content">
                                <div id="listMenu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>Data Menu</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tableMenu" class="table table-bordered table-striped table-hover dataTable js-exportable ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tittle</th>
                                        <th>URL</th>
                                        <th>Icon</th>
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

    <?php $this->load->view('admin/lov/form_menu'); ?>



    <script>

       $(function () {
            getUrlTree();

            loadTable();
        });

        function getUrlTree(){
            $.ajax({
                async: true,
                type: "GET",
                url: "<?php echo base_url().'menu/getMenu'; ?>",
                dataType: "json",
                success: function (json) {
                    createJSTree(json);
                },

                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });
        }

        function createJSTree(jsondata) {
            $('#listMenu').jstree({
                'core': {
                    'data': jsondata
                }
            });
        }

        var parent_id = 0;

        $('#listMenu').on(
                                "select_node.jstree",
                                function (e, data) {
                                    parent_id = data.node.id;
                                    loadTable();
                                });

        function loadTable(){

            $('#tableMenu').DataTable({

                ajax: {
                    type: "POST",
                    url: "<?php echo base_url().'menu/getMenuByParent'; ?>",
                    data:{
                            menu_parent:parent_id
                        }
                },
                columns: [
                    { "data": "menu_id" },
                    { "data": "menu_tittle" },
                    { "data": "menu_url" },
                    { "data": "menu_icon",
                        "render": function(d, t, r) {
                            var menu_icon = r.menu_icon;
                            var returnString = "<i class='material-icons'>"+menu_icon+"</i>";

                            return returnString;
                        }
                    },
                    { "data": "menu_description" },
                    { "data": "menu_id",
                        "render": function(d, t, r) {
                            var menu_id = r.menu_id;
                            var returnString = "<button type='button' class='btn btn-sm btn-warning waves-effect' onclick='modal_form_menu_show("+menu_id+","+parent_id+")'><i class='material-icons'>mode_edit</i></button>";
                            returnString += "&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-sm btn-danger  waves-effect' onclick='deleteConfirmation("+menu_id+")'><i class='material-icons'>delete</i></button>"
                            return returnString;
                        }
                    },
                ],
                dom: 'Bfrtip',
                responsive: true,
                select:true,
                buttons: [
                    {
                        text: 'Tambah Menu',
                        action: function ( e, dt, node, config ) {
                            //alert( 'Button activated' );
                            modal_form_menu_show(0,parent_id);
                        }
                    }
                ],
                "pageLength": 5,
                "bDestroy": true
                });
        }

        function deleteConfirmation(id) {
                var url = "<?php echo base_url('menu/delete?menu_id=');?>"+id;
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
