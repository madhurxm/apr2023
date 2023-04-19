$(document).ready(function () {
  $("#new_department_form").submit(function (e) {
    e.preventDefault();
    // console.log($("#new_department_form :input[value!='']").serialize());
    $.ajax({
      type: "POST",
      url: "resources/CRUD_operations/crud.php",
      data:
        $("#new_department_form")
          .find(":input")
          .filter(function () {
            return $.trim(this.value).length > 0;
          })
          .serialize() + "&function=create_department",
      success: function (response) {
        $("#table_col").load(location.href + " #table_col");
        $("#new_department_form")[0].reset();
      },
    });
  });
});

$(document).on("click", ".delete_button", function () {
  var id = $(this).val();
  $.ajax({
    type: "POST",
    url: "resources/CRUD_operations/crud.php",
    data: { department_id: id, function: "delete_department" },
    success: function (response) {
      $("#table_col").load(location.href + " #table_col");
      return false;
    },
  });
});

$(document).on("click", ".edit_button", function () {
  var id = $(this).val();
  $(this)
    .parents("tr")
    .children("td:lt(3)")
    .each(function () {
      var class_name = $(this).attr("class");
      var value = $(this).text();
      if (class_name == "dept_manager") {
        var mng_array = value.split(", ");

        for (var i = 0, len = mng_array.length; i < len; i++) {
          mng_array[i] = $.trim(mng_array[i]);
          // console.log(mng_array[i]);
          // alert($('#new_department_form .dept_manager').val());
          // $("#new_department_form input[type='checkbox']").each(function () {
          //   alert($(this).val() == mng_array[i]);
          // });
    
          $("#new_department_form input[type='checkbox']").each(function () {
              var mng_pre = $(this).val();
            });

          if (
            $("#new_department_form input[type='checkbox']").attr("value") ==
            mng_array[i]
          ) {
            $("#new_department_form [value =" + mng_array[i] + "]").attr(
              "checked",
              "true"
            );
          } else {
            $("#new_department_form #manager_name").val(mng_array[i]);
            // alert($("#new_department_form #manager_name").attr('class'));

            // alert("else");
          }
        }
        // return;
      }

      // $("#new_department_form")
      //   .find("." + class_name)
      //   .val($.trim(value));
    });

  // $.ajax({
  //   type: "POST",
  //   url: "resources/CRUD_operations/crud.php",
  //   data: { department_id: id, function: "edit_department" },
  //   success: function (response) {
  //     $("#table_col").load(location.href + " #table_col");
  //     return false;
  //   },
  // });
});
