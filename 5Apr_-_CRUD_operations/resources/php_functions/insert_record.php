<?php
include("../../config/config.php");
if (!empty($_REQUEST['dept_id'] && $_REQUEST['dept_name'] && $_REQUEST['dept_manager'])) {
    $dept_id = $_REQUEST['dept_id'];
    $dept_name = $_REQUEST['dept_name'];
    $dept_manager = $_REQUEST['dept_manager'];
    if ($conn) {
        $check_record = "SELECT * FROM `department_details` WHERE `dept_id` = $dept_id;";
        if(mysqli_num_rows(mysqli_query($conn, $check_record)) > 0)
        {
            die("Department ID already exist");
        }
        $insert_query = "INSERT INTO `department_details` (`dept_id`, `dept_name`, `dept_manager`) VALUES ('$dept_id', '$dept_name', '$dept_manager');";
        $row = mysqli_query($conn, $insert_query);
        if ($row) {
            echo ("Department created");
        } else {
            echo ("Query not run");
        }
    } else {
        echo ("connection not established");
    }
} else {
    echo ("Fill all fields");
}


?>