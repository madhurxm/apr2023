<?php
class crud
{
    public function all_rows($conn)
    {
        $records = array();
        $read_query = "SELECT * FROM `department_details` ORDER BY `id` DESC;";
        $rows = mysqli_query($conn, $read_query);
        if (mysqli_num_rows($rows) >= 0) {
            while ($a_row = mysqli_fetch_assoc($rows)) {
                $records[] = $a_row;
            }
        } else {
            die("NO Record found");
        }
        return $records;
    }
    public function create($conn, $department_id, $department_name, $manager_name)
    {
        if (!empty($department_id && $department_name && $manager_name)) {
            $create_query = " INSERT INTO `department_details`( `dept_id`, `dept_name`, `dept_manager`) VALUES ('$department_id', '$department_name','$manager_name');";
            if (mysqli_query($conn, $create_query)) {
                echo ("DEPARTMENT CREATED");
            } else {
                echo ("Department not created because " . mysqli_error($conn));
            }
        } else {
            echo ("Fill all fields");
        }
    }
    public function delete($conn, $department_id)
    {
        $delete_query = " DELETE FROM `department_details` WHERE `dept_id` = '$department_id';";
        if (mysqli_query($conn, $delete_query)) {
            echo ("DEPARTMENT Deleted of " . $department_id);
        } else {
            echo ("Department not deleted because " . mysqli_error($conn));
        }
    }

    public function edit($conn, $department_id, $department_name, $manager_name)
    {
        $edit_query = " UPDATE `department_details` SET `dept_name` = '$department_name', `dept_manager` = '$manager_name' WHERE `dept_id` = '$department_id';";
        if (mysqli_query($conn, $edit_query)) {
            echo ("DEPARTMENT updated of " . $department_id);
        } else {
            echo ("Department not updated because " . mysqli_error($conn));
        }
    }
}

$conn = mysqli_connect("localhost", "root", "", "employee");
if ($conn) {
    if (!empty($_REQUEST['function'])) {
        $function = $_REQUEST['function'];
        $department_id = $_REQUEST['department_id'];
        

        if ($function == "create_department") {

            $department_name = $_REQUEST['department_name'];
            if (!preg_match("/^[A-Za-z]*$/i", $department_name)) die("Department name should be of alphabets only");

            $manager_name = $_REQUEST['manager_name'];
            
            if (count($manager_name) > 1) $manager_name = implode(", ", $_REQUEST['manager_name']);
            else $manager_name = implode("", $_REQUEST['manager_name']);

            if (!preg_match("/^[0-9]{3}$/i", $department_id)) die("Id should be of 3 digits only");

            $create = new crud();
            $create->create($conn, $department_id, $department_name, $manager_name);
        } else if ($function == "delete_department") {
            $delete = new crud();
            $delete->delete($conn, $department_id);
        } else if ($function == "edit_department") {

            $department_name = $_REQUEST['department_name'];
            if (!preg_match("/^[A-Za-z]*$/i", $department_name)) die("Department name should be of alphabets only");

            $manager_name = $_REQUEST['manager_name'];
            
            if (count($manager_name) > 1) $manager_name = implode(", ", $_REQUEST['manager_name']);
            else $manager_name = implode("", $_REQUEST['manager_name']);

            if (!preg_match("/^[0-9]{3}$/i", $department_id)) die("Id should be of 3 digits only");

            $edit = new crud();
            $edit->edit($conn, $department_id, $department_name, $manager_name);
        }
    }
    $read = new crud();
    $records = $read->all_rows($conn);
} else {
    die("Connection not established");
}
//isset( $_POST['submit'] ) || 