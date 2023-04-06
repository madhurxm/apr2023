$(document).on("dblclick", "#all_details_tbody td", function (e) {
  e.preventDefault();
  $(this).find("span").attr("hidden", "true");
  $(this).find("input").removeAttr("hidden").focus();

  var dept_id = $(this).find("input").attr("id");
  var key = $(this).find("input").attr("name");
  var that = this;

  // $("body").click(function (e) {
  //   e.preventDefault();

  //   if ($(that).find("input").val() == "") {
  //     $(that).find("span").removeAttr("hidden");
  //     $(that).find("input").attr("hidden", "true");
  //     return;
  //   } else {
  //     var value = $(that).find("input").val();
  //     $.ajax({
  //       type: "POST",
  //       url: "resources/php_functions/update_record.php",
  //       data: { dept_id: dept_id, value: value, key: key },
  //       success: function (response) {
  //         $("#records_table_msg").html(response);
  //         setTimeout(function () {
  //           $("#records_table_msg").html("");
  //           $("#display_div").load(location.href + " #display_div");
  //         }, 3000);
  //       },
  //     });
  //   }
  //   return;
  // });
  // $(this).click(function (event) {
  //   event.stopPropagation();
  //   return;
  // });
  // return;
  // $("body").click(function (e) {
  //   // if (e.target.id == "all_details_tbody") return;
  //   if ($(e.target).closest("#all_details_tbody ").length) return;
  //   if ($(that).find("input").val() == "") {
  //     $(that).find("span").removeAttr("hidden");
  //     $(that).find("input").attr("hidden", "true");
  //     return;
  //   } else {
  //     var value = $(that).find("input").val();
  //     $.ajax({
  //       type: "POST",
  //       url: "resources/php_functions/update_record.php",
  //       data: { dept_id: dept_id, value: value, key: key },
  //       success: function (response) {
  //         $("#records_table_msg").html(response);
  //         setTimeout(function () {

  //           $("#records_table_msg").html(" ");
  //           $("#display_div").load(location.href + " #display_div");
  //         }, 3000);
  //       },
  //     });
  //   }
  // });
  $("#all_details_tbody td").focusout(function (e) {
    // alert("cvfhg");
    if ($(that).find("input").val() == "") {
      $(that).find("span").removeAttr("hidden");
      $(that).find("input").attr("hidden", "true");
      return;
    } else {
      var value = $(that).find("input").val();
      $.ajax({
        type: "POST",
        url: "resources/php_functions/update_record.php",
        data: { dept_id: dept_id, value: value, key: key },
        success: function (response) {
          $("#records_table_msg").html(response);
          $("#display_div").load(location.href + " #display_div");
          setTimeout(function () {
            $("#records_table_msg").html(" ");
          }, 1000);
        },
      });
    }
    return;
  });
  // $("td").focusout(function (e) {
  //   if ($(that).find("input").val() == "") {
  //     $(that).find("span").removeAttr("hidden");
  //     $(that).find("input").attr("hidden", "true");
  //     return;
  //   }
  // });
});
