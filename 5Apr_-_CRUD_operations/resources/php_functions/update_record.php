<?php
include("../../config/config.php");
$dept_id = $_REQUEST['dept_id'];
$value = $_REQUEST['value'];
$key = $_REQUEST['key'];

if ($conn) {
    $delete_query = "UPDATE `department_details` SET `$key` = '$value' where dept_id = '$dept_id';";
    $row = mysqli_query($conn, $delete_query);
    if ($row) {
        echo ("Department detail is updated");
    } else {
        echo ("Query not run");
    }
} else {
    echo ("connection not established");
}

?>