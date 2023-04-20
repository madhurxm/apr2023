<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<?php
require("../CRUD_on_diff_pages_using_OOPS-3/resources/functions/conn.php");
require("../CRUD_on_diff_pages_using_OOPS-3/resources/functions/crud.php");

//object for connection with database 
$conn = new conn();
$conn = $conn->db_conn();

//object for reading records
$read_records = new crud();
$read_records = $read_records->read($conn);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // echo $id;
    $delete_records = new crud();
    $delete_records = $delete_records->delete($conn, $id);
    header("location:indexx.php");
    echo '<div class="alert alert-success" role="alert">'. $delete_records .'</div>';
}
?>

<body>
    <div class="container m-auto">
        <!-- <div class="row row-cols-1   g-2 m-5"> -->
        <div class="col m-5">
            <a name="" id="" class="btn btn-primary" href="resources\pages\insert_page.php" role="button">CREATE NEW DEPARTMENT</a>
        </div>

        <!-- </div> -->
        <div class="row row-cols-1 justify-content-center align-items-center g-2 mx-5">
            <div class="table-responsive col">
                <table class="table table-primary border-primary table-hover table-bordered">
                    <thead class="">
                        <tr class="">
                            <th>ID</th>
                            <th>Department</th>
                            <th>Manager</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php
                        // foreach($read_records as $row) {
                        while ($row = mysqli_fetch_assoc($read_records)) {
                        ?>
                            <tr>
                                <td><?php echo $row['dept_id']; ?></td>
                                <td><?php echo $row['dept_name']; ?></td>
                                <td><?php echo $row['dept_manager']; ?></td>
                                <td><a name="" id="" class="btn btn-primary" href="resources/pages/edit_page.php?id=<?php echo ($row['id']) ?>" role="button">Edit</a></td>
                                <td><a name="delete_btn" id="" class="btn btn-danger" href="indexx.php?id=<?php echo ($row['id']) ?>" role="button">Delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>