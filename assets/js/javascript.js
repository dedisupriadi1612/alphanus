$(function () {
    var
        $table = $('#tree-table'),
        rows = $table.find('tr');
        //alert($table);
    rows.each(function (index, row) {
        var
            $row = $(row),
            level = $row.data('level'),
            id = $row.data('id'),
            $columnName = $row.find('td[data-column="name"]'),
            children = $table.find('tr[data-parent="' + id + '"]');
            
        if (children.length) {
            //alert(id);
            var expander = $columnName.prepend('' +
                '<span class="treegrid-expander mdi mdi-arrow-right-bold-circle" id="span-'+id+'"></span>' +
                '');

            children.hide();

            
            
            expander.on('click', function (e) {
                
                var $target = $(e.target);
                //console.log ($target);
                if ($('#span-'+id).hasClass('mdi mdi-arrow-right-bold-circle')) {
                    //alert("tes");
                    //console.log ($target);
                    // $target
                    //     .removeClass('mdi mdi-arrow-right-bold-circle')
                    //     .addClass('mdi mdi-arrow-down-bold-circle');
                    $('#span-'+id).removeClass('mdi mdi-arrow-right-bold-circle');
                    $('#span-'+id).addClass('mdi mdi-arrow-down-bold-circle');
                    //$('#parent_id').val(id);
                    children.show();
                } else {
                    $('#span-'+id).removeClass('mdi mdi-arrow-down-bold-circle');
                    $('#span-'+id).addClass('mdi mdi-arrow-right-bold-circle');
                    //$('#parent_id').val(id);
                    reverseHide($table, $row);
                }
            });
        }

        $columnName.prepend('' +
            '<span class="treegrid-indent" style="width:' + 15 * level + 'px"></span>' +
            '');
    });

    

    // Reverse hide all elements
    reverseHide = function (table, element) {
        var
            $element = $(element),
            id = $element.data('id'),
            children = table.find('tr[data-parent="' + id + '"]');

        if (children.length) {
            children.each(function (i, e) {
                reverseHide(table, e);
            });

            if ($('#span-'+id).hasClass('mdi mdi-arrow-down-bold-circle')) {
                $('#span-'+id).removeClass('mdi mdi-arrow-down-bold-circle');
                $('#span-'+id).addClass('mdi mdi-arrow-right-bold-circle');
            }

            
            $('#span-'+id)
                .find('.mdi mdi-arrow-down-bold-circle')
                .removeClass('mdi mdi-arrow-down-bold-circle')
                .addClass('mdi mdi-arrow-right-bold-circle');

            children.hide();
        }
    };
});
