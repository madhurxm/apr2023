$(document).on("submit","#creation_form", function(e) {

        e.preventDefault();
        $("#creation_spinner").removeAttr("hidden");
        setTimeout(function(){
        $.ajax({
            type: "POST",
            url: "resources/php_functions/insert_record.php",
            data: jQuery("#creation_form").serialize(),
            success: function (response) {
                // alert(response);
                $("#creation_spinner").attr("hidden","true");
                $("#insertion_msg").removeAttr("hidden");
                $("#insertion_msg").html(response);
                $("#display_div").load(location.href + " #display_div");
                // $("#creation_spinner").attr("hidden","true");
                setTimeout(function(){
                    $("#insertion_msg").attr("hidden", "true");
                },5000);
    
            }
        });
        
    },3000);

});