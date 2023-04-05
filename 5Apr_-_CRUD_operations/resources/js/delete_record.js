jQuery(document).ready(function () {
    $(".delete_btn").click(function (e) { 
        e.preventDefault();
        var dept_id = $(this).val();
        jQuery.ajax({
            type: "POST",
            url: "resources/php_functions/delete_record.php",
            data: {'dept_id':dept_id},
           
            success: function (response) {
                // alert(response);
                location.reload();
                
            }
        });
        
    });
});