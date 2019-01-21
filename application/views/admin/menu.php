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
                                    <th>#</th>
                                    <th>Test</th>

                                    <tr data-id="1" data-parent="0" data-level="1">
                                        <td data-column="name">Node 1</td>
                                        <td>Additional info</td>
                                    </tr>

                                    <tr data-id="2" data-parent="1" data-level="2">
                                        <td data-column="name">Node 1</td>
                                        <td>Additional info</td>
                                    </tr>

                                    <tr data-id="3" data-parent="1" data-level="2">
                                        <td data-column="name">Node 1</td>
                                        <td>Additional info</td>
                                    </tr>
                                    <tr data-id="4" data-parent="3" data-level="3">
                                        <td data-column="name">Node 1</td>
                                        <td>Additional info</td>
                                    </tr>

                                    <tr data-id="5" data-parent="3" data-level="3">
                                        <td data-column="name">Node 1</td>
                                        <td>Additional info</td>
                                    </tr>

                                    <tr data-id="6" data-parent="0" data-level="1">
                                        <td data-column="name">Node 1</td>
                                        <td>Additional info</td>
                                    </tr>

                                    <tr data-id="7" data-parent="6" data-level="2">
                                        <td data-column="name">Node 1</td>
                                        <td>Additional info</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Pagination</h4>
                            <p class="text-muted m-b-30 font-13">
                                Include pagination in your FooTable.
                            </p>
                            <div class="row">
                                <div class="col-8">
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

                            <table id="demo-foo-pagination" class="table  toggle-circle m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> First Name </th>
                                    <th> Last Name </th>
                                    <th data-hide="phone"> Job Title </th>
                                    <th data-hide="all"> DOB </th>
                                    <th data-hide="all"> Status </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="badge label-table badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="badge label-table badge-custom">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="badge label-table badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="badge label-table badge-custom">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="badge label-table badge-custom">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="badge label-table badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="badge label-table badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="badge label-table badge-custom">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="badge label-table badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="badge label-table badge-custom">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="badge label-table badge-custom">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="badge label-table badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="badge label-table badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="badge label-table badge-custom">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="badge label-table badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="badge label-table badge-custom">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="badge label-table badge-custom">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="badge label-table badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="badge label-table badge-danger">Suspended</span></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr class="active">
                                    <td colspan="5">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    
</div>
    <!-- Top Bar End -->
    
    
    
<?php $this->load->view('admin/template/footer')?>

<script>
    // Search input
    /**
 * Theme: Highdmin - Responsive Bootstrap 4 Admin Dashboard
 * Author: Coderthemes
 * Foo table
 */

$(window).on('load', function() {
    // Pagination
    // -----------------------------------------------------------------
    $('#demo-foo-pagination').footable();
    $('#demo-show-entries').change(function (e) {
        e.preventDefault();
        var pageSize = $(this).val();
        $('#demo-foo-pagination').data('page-size', pageSize);
        $('#demo-foo-pagination').trigger('footable_initialized');
    });


    var addrow = $('#demo-foo-pagination');

    // Search input
    $('#demo-foo-search').on('input', function (e) {
        e.preventDefault();
        addrow.trigger('footable_filter', {filter: $(this).val()});
    });

});
</script>