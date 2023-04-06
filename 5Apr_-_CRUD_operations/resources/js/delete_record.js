$(document).on("click", ".delete_btn", function (e) {
  e.preventDefault();
  var dept_id = $(this).val();
  jQuery.ajax({
    type: "POST",
    url: "resources/php_functions/delete_record.php",
    data: { dept_id: dept_id },

    success: function (response) {
      // alert(response);
      $("#display_div").load(location.href + " #display_div");
      return false;
    },
  });
});