$(document).on("click",".delete_btn", function(e) {
  // e.preventDefault();
  var dept_id = $(this).val();
  // setTimeout(function () {
    jQuery.ajax({
      type: "POST",
      url: "resources/php_functions/delete_record.php",
      data: { dept_id: dept_id },
      success: function (response) {
        // setTimeout(function () {
          $("#display_div").load(location.href + " #display_div");
          // $("#records_table_msg").html(response);
        // },10);
        
        // setTimeout(function () {
          // $("#records_table_msg").html("");
          // $("#display_div").load(location.href + " #display_div");
        // }, 10);
      },
    });
  // }, 1000);
  return;
});
