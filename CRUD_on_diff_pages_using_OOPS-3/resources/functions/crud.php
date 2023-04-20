<?php
class crud
{
    private $table_name = "department_details";
    public function read($conn)
    {
        $table_name = $this->table_name;
        $query = "SELECT * FROM `$table_name` ORDER BY `id` DESC;";
        // $query = "SELECT * FROM `department_details` ORDER BY `id` DESC;";

        $query_data = mysqli_query($conn, $query) or die("query not running ");
        // if (mysqli_num_rows($query_data) >= 0) {
        //     while ($a_row = mysqli_fetch_assoc($query_data)) {
        //         $records[] = $a_row;
        //     }
        // } else {
        //     die("NO Record found");
        // }
        // return $records;
        // while($row = mysqli_fetch_assoc($query_data)){
        //     $rows[] = $row; 
        // }
        return $query_data;
    }
    public function read_edit($conn, $id)
    {
        $table_name = $this->table_name;
        $query = "SELECT * FROM `$table_name` WHERE `id` = '$id';";
        // $query = "SELECT * FROM `department_details` ORDER BY `id` DESC;";

        $query_data = mysqli_query($conn, $query) or die(mysqli_error($conn) . "query not running ");
        // if (mysqli_num_rows($query_data) >= 0) {
        //     while ($a_row = mysqli_fetch_assoc($query_data)) {
        //         $records[] = $a_row;
        //     }
        // } else {
        //     die("NO Record found");
        // }
        // return $records;
        // while($row = mysqli_fetch_assoc($query_data)){
        //     $rows[] = $row; 
        // }
        return $query_data;
    }

    public function create($conn, $dept_id, $dept_name, $dept_manager)
    {
        $table_name = $this->table_name;
        $query = "INSERT INTO `$table_name` (`dept_id`, `dept_name`, `dept_manager`) VALUES ( '$dept_id', '$dept_name', '$dept_manager');";

        $query_data = mysqli_query($conn, $query) or die(mysqli_error($conn) . "query not run");
        if ($query_data) {
            $msg = "DEPARTMENT CREATED";
        } else $msg = "DEPARTMENT NOT CREATED";
        return $msg;
    }

    public function update($conn, $id, $dept_id, $dept_name, $dept_manager)
    {

        $table_name = $this->table_name;
        $query = "UPDATE `$table_name` SET `dept_id`=$dept_id,`dept_name`='$dept_name',`dept_manager`='$dept_manager' WHERE `id` = $id;";

        $query_data = mysqli_query($conn, $query) or die(mysqli_error($conn) . "query not run");
        if ($query_data) {
            $msg = "DEPARTMENT UPDATED";
        } else $msg = "DEPARTMENT NOT UPDATED";
        return $msg;
    }

    public function delete($conn, $id)
    {
        $table_name = $this->table_name;
        $query = "DELETE FROM `$table_name` WHERE `id` = $id;";

        $query_data = mysqli_query($conn, $query) or die(mysqli_error($conn) . "query not run");
        if ($query_data) {
            $msg = "DEPARTMENT DELETED";
        } else $msg = "DEPARTMENT NOT DELETED";
        return $msg;
    }
}
// include("../functions/conn.php");
// $conn = mysqli_connect("localhost", "root", "", "employee");
// $c = new crud();
// $c = $c -> read_edit($conn,311);
// // print_r($mysqli_fetch_assoc($c))
// print_R(mysqli_fetch_assoc($c));
