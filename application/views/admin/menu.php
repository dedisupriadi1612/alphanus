<?php $this->load->view('admin/template/header')?>

<div id="wrapper">
    <?php $this->load->view('admin/template/menu')?>

    <div class="content-page">
        <?php $this->load->view('admin/template/profil')?>
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Menu</h4>
                            <table id="tree-table" class="table table-hover table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Nama Menu</th>
                                        <th>Link Menu</th>
                                    </tr>
                                    <?php foreach ($menus as $menu): ?>
                                        <tr data-id="<?php echo $menu->menu_id; ?>" id="<?php echo 'menu'.$menu->menu_id; ?>" onClick="showDetails(<?php echo $menu->menu_id;?>)" data-parent="<?php echo $menu->parent_id; ?>" data-level="<?php echo $menu->menu_level; ?>">
                                            <td data-column="name"><?php echo $menu->menu_name; ?></td>
                                            <td><?php echo $menu->menu_link; ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                                
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Details Menu</h4>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                    <a href="#custom-modal" id="addData" class="btn btn-primary waves-effect w-md mr-2 mb-2" data-animation="blur"
                                       data-overlaySpeed="100" data-overlayColor="#36404a"><i class="fa fa-plus-circle m-l-5"></i> <span>Tambah</span></a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label class="form-inline mb-9">
                                        Show
                                        <select id="demo-show-entries" class="form-control form-control-sm ml-1 mr-1">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                        entries
                                    </label>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="on">
                                    </div>
                                </div>
                            </div>

                            <div id="divTableMenu">
                            </div>

                            
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <!-- Top Bar End -->
    
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.modal.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title" id="titleModal">Tambah Menu</h4>
        <div class="custom-modal-text">
            <div id="error"></div>
            <form class="form-horizontal">
                <input type="hidden" id="action">
                <input type="hidden" id="parent_id">
                <div class="form-group m-b-25">
                    <div class="col-3">
                        <label for="namaMenu">Nama Menu</label>
                    </div>
                    <div class="col-12">
                        <input class="form-control" type="text" id="namaMenu" required="" >
                    </div>
                </div>

                <div class="form-group m-b-25">
                    <div class="col-3">
                        <label for="linkMenu">Link Menu</label>
                    </div>
                    <div class="col-12">
                        <input class="form-control" type="text" id="linkMenu" required="" >
                    </div>
                </div>

                <div class="form-group m-b-25">
                    <div class="col-3">
                        <label for="iconMenu">Icon Menu</label>
                    </div>
                    <div class="col-12">
                        <input class="form-control" type="text" id="iconMenu" required="" >
                    </div>
                </div>

                <div class="form-group m-b-25">
                    <div class="col-3">
                        <label for="menuDescription">Deskripsi</label>
                    </div>
                    <div class="col-12">
                        <textarea  class="form-control"  id="menuDescription"  rows="5"></textarea>
                    </div>
                </div>                

                <div class="form-group account-btn text-center m-t-10">
                    <div class="col-12">
                        <button id="submit" class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="button">Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    
    
<?php $this->load->view('admin/template/footer')?>

<!-- Modal -->

<!--  data-animation="blur" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a" -->
<script>


var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
var menuID = 0;

//showDetails("<?php echo $menus[0]->menu_id; ?>");

$(document).ready(function(){
  //$('tr[data-id="<?php echo $menus[0]->menu_id; ?>"]').trigger('click');
  $('#<?php echo "span-".$menus[0]->menu_id; ?>').trigger('click');

  
  //$('#<?php echo "span-6";//.$menus[0]->menu_id; ?>').trigger('click');

});

//$('#<?php echo "menu".$menus[0]->menu_id; ?>').on('click', function( e ) {alert(5)});


function generateTableData(data){
    var table = '<table id="tableData" class="table  toggle-circle m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5">';
                table += '<thead>';
                    table += '<tr>';
                        table += '<th data-toggle="true"> Nama Menu </th>';
                        table += '<th> Link Menu </th>';
                        table += '<th data-hide="phone"> Creation Date</th>';
                        table += '<th data-hide="phone"> Creation By</th>';
                        table += '<th> Action </th>';
                        table += '<th data-hide="all"> Icon Menu </th>';
                        table += '<th data-hide="all"> Icon Description </th>';
                        table += '<th data-hide="all"> Update Date </th>';
                        table += '<th data-hide="all"> Update By </th>';
                    table += '</tr>';
                table += '</thead>';

                table += '<tbody>';
                        
                    
                    var i;
                    //var data = response.data;
                    for (i = 0; i < data.length; i++) {
                            //console.log(data[i]['menu_id']);
                    table += '<tr>';
                        
                        table += '<td>'+data[i]['menu_name']+'</td>';
                        table += '<td>'+data[i]['menu_link']+'</td>';
                        table += '<td>'+data[i]['creation_date']+'</td>';
                        table += '<td>'+data[i]['creation_by']+'</td>';
                        table += '<td>';
                            table += '<div class="btn-group dropdown">';
                                table += '<a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>';
                                table += '<div class="dropdown-menu dropdown-menu-right">';
                                    table += '<a class="dropdown-item" onClick="updateMenu('+data[i]['menu_id']+')"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>';
                                    table += '<a class="dropdown-item" onClick="deleteMenu('+data[i]['menu_id']+')"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>';
                                table += '</div>';
                            table += '</div>';
                        table += '</td>';
                        table += '<td><i class="'+data[i]['menu_icon']+'"></i></td>';
                        table += '<td>'+data[i]['menu_description']+'</td>';
                        table += '<td>'+data[i]['updated_date']+'</td>';
                        table += '<td>'+data[i]['updated_by']+'</td>';
                    table += '</tr>';    
                    }
                    
                table += '</tbody>';

                table += '<tfoot>';
                    table += '<tr class="active">';
                        table += '<td colspan="5">';
                            table += '<div class="text-right">';
                                table += '<ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>';
                            table += '</div>';
                        table += '</td>';
                    table += '</tr>';
                table += '</tfoot>';

            table += '<table>';
    return table;
}

function showDetails(id){
    $('#parent_id').val(id);
    $.ajax({
        method: "POST",
        url: "<?php echo base_url().'menu/getDetailFromParent' ?>",
        data: { id: id,"<?php echo $this->security->get_csrf_token_name() ?>":csrfHash }
    })
    .done(function( response ) {
        csrfHash = response.csrfHash;
        // alert(id);

        $( "#tableData" ).remove();

        var data = response.data;

        var table= generateTableData(data);
        
        $('#divTableMenu').append(table);

        reloadTable ();
    });
}

$('#submit').on('click', function( e ) {
    //var token = $('#token').val();
    var action = $('#action').val();
    var parent_id = $('#parent_id').val();
    var namaMenu = $('#namaMenu').val();
    var linkMenu = $('#linkMenu').val();
    var iconMenu = $('#iconMenu').val();
    var menuDescription = $('#menuDescription').val();

    if(!namaMenu){
        showError("Nama Tidak Boleh Kosong");
    }

    

    if(!iconMenu){
        showError("Icon Tidak Boleh Kosong");
    }
    $.ajax({
        method: "POST",
        url: "<?php echo base_url().'menu/action' ?>",
        data: { action: action,
                "<?php echo $this->security->get_csrf_token_name() ?>":csrfHash,
                namaMenu:namaMenu,
                linkMenu:linkMenu,
                iconMenu:iconMenu,
                menuDescription:menuDescription,
                parent_id:parent_id }
    })
    .done(function( response ) {
        csrfHash = response.csrfHash;
        // alert(id);
        
    });
});

function showError(ketError){
    $( "#showAlert" ).remove();
        var validation = '<div id="showAlert" class="alert alert-danger alert-dismissable" role="alert">';
            validation += '<button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">X</span></button>';
            validation +=  '<strong>'+ketError+'</strong>';
            validation += '</div>';
        
        $('#error').append(validation);
        
        retrun;
}

$('#addData').on('click', function( e ) {
        //alert('utu');
        //alert($('#parent_id').val());
    $('#action').val(1);
    $('#namaMenu').val(null);
    $('#linkMenu').val(null);
    $('#iconMenu').val(null);
    $('#menuDescription').val(null);
    $('#titleModal').text('Tambah Data');
    var modal = new Custombox.modal({
    content: {
        effect: 'blur',
        target: '#custom-modal',
        id: null,
        container: null,
        close: true,
        clone: false,
        animateFrom: 'top',
        animateTo: 'top',
        positionX: 'center',
        positionY: 'center',
        width: null,
        speedIn: 300,
        speedOut: 300,
        delay: 150,
        fullscreen: false,
        onOpen: null,
        onComplete: null,
        onClose: null,
    }
    });

    // Open
    modal.open();
});


function updateMenu(id){
    $.ajax({
        method: "POST",
        url: "<?php echo base_url().'menu/getDetail' ?>",
        data: { id: id,"<?php echo $this->security->get_csrf_token_name() ?>":csrfHash }
    })
    .done(function( response ) {
        csrfHash = response.csrfHash;
        var data = response.data;
        // alert(id);
        $('#action').val(2);
        $('#namaMenu').val(data[0]['menu_name']);
        $('#linkMenu').val(data[0]['menu_link']);
        $('#iconMenu').val(data[0]['menu_icon']);
        $('#menuDescription').val(data[0]['menu_description']);
        $('#titleModal').text('Update Data');
        var modal = new Custombox.modal({
        content: {
            effect: 'blur',
            target: '#custom-modal',
            id: null,
            container: null,
            close: true,
            clone: false,
            animateFrom: 'top',
            animateTo: 'top',
            positionX: 'center',
            positionY: 'center',
            width: null,
            speedIn: 300,
            speedOut: 300,
            delay: 150,
            fullscreen: false,
            onOpen: null,
            onComplete: null,
            onClose: null,
        }
        });

        // Open
        modal.open();
    });
    
}


function deleteMenu(id){
    swal({
                title: 'Apakah Anda Yakin Ingin Menghapus Data Ini?',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-confirm mt-2',
                cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then(function () {
                swal({
                        title: 'Deleted !',
                        text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    }
                )
            });
}


function reloadTable (){
    $('#tableData').footable();
    $('#demo-show-entries').change(function (e) {
        e.preventDefault();
        var pageSize = $(this).val();
        $('#tableData').data('page-size', pageSize);
        $('#tableData').trigger('footable_initialized');
    });


    var tableData = $('#tableData');

    // Search input
    $('#demo-foo-search').on('input', function (e) {
        e.preventDefault();
        tableData.trigger('footable_filter', {filter: $(this).val()});
    });
}

$(window).on('load', function() {
    reloadTable ();
});

       // $('.open-left').trigger('click');
</script>