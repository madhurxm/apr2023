$(document).ready(function () {
  $("#new_department_form").submit(function (e) { 
    e.preventDefault();
    // alert($(this).serialize());
    $.ajax({
      type: "POST",
      url: "resources/CRUD_operations/crud.php",
      data: $("#new_department_form").serialize()+"&function=create_department",
      success: function (response) {
        alert(response);
        
      }
    });
});
});