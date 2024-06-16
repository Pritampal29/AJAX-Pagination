$(document).ready(function(){

    // Load Table with AJAX ====================>

        function loadTableData(page) {
            $.ajax({
                url: 'data_fetch.php',
                type: 'post',
                data: {page_no:page},
                success: function(response) {
                    $('#dataTable').html(response);
                }
            });
        }

        loadTableData();

    // Add Pagination with AJAX ==================>

        $(document).on('click','#loadPageno a',function(e){
            e.preventDefault();
            var pageno= $(this).attr('id');

            loadTableData(pageno);
        });


});