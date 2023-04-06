$("#creation_form").submit(function(e) {

        e.preventDefault();
        var data = jQuery("#creation_form").serialize();
        $("#creation_spinner").removeAttr("hidden");
        setTimeout(function(){
        $.ajax({
            type: "POST",
            url: "resources/php_functions/insert_record.php",
            data: data,
            success: function (response) {
                // alert(response);
                $("#creation_spinner").attr("hidden","true");
                $("#insertion_msg").removeAttr("hidden");
                $("#insertion_msg").html(response);
                $("#display_div").load(location.href + " #display_div");
                // $("#creation_spinner").attr("hidden","true");
                setTimeout(function(){
                    $("#insertion_msg").attr("hidden", "true");
                },2000);
    
            }
        });
        
    },3000);
    return;

});