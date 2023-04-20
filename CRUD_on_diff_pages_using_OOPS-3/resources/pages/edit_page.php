<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Record</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php
    require("../functions/conn.php");
    require("../functions/crud.php");
    $id = $_REQUEST['id'];

    //object for connection with database 
    $conn = new conn();
    $conn = $conn->db_conn();

    //object for reading records
    $read_records = new crud();
    $read_records = $read_records->read_edit($conn, $id);
    // print_r(mysqli_fetch_assoc($read_records));

    if (isset($_REQUEST['submit'])) {
        $update_records = new crud();
        $update_records = $update_records->update($conn, $id, $_REQUEST['dept_id'], $_REQUEST['dept_name'], $_REQUEST['dept_manager']);
        header("location:../../indexx.php");
        // echo    '<div class="alert alert-success" role="alert">'. $update_records .'</div>';
    }
    ?>

    <div class="container">
        <div class="row row-col-1 justify-content-center align-items-center g-2 m-5 p-5">
            <div class="col px-5">
                <div class="table-responsive px-5">
                    <table class="table table-primary px-5">
                        <thead class="text-center p-5">
                            <tr>
                                <th>EDIT DEPARTMENT</th>
                            </tr>
                        </thead>
                        <tbody class="p-5">

                            <tr class="p-5">
                                <td>
                                    <?php
                                    // foreach($read_records as $row) {
                                    // print_r(mysqli_fetch_assoc($read_records));
                                    while ($row = mysqli_fetch_assoc($read_records)) {
                                    ?>
                                        <form method="post">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Department ID</label>
                                                <input type="text" class="form-control" name="dept_id" id="" placeholder="" value="<?php echo $row['dept_id']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Department Name</label>
                                                <input type="text" class="form-control" name="dept_name" id="" placeholder="" value="<?php echo $row['dept_name']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Department Manager</label>
                                                <input type="text" class="form-control" name="dept_manager" id="" placeholder="" value="<?php echo $row['dept_manager']; ?>">
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-success">
                                                SAVE
                                            </button>
                                            <a href="../../indexx.php"><button type="button" name="to_indexPage"  class="btn btn-primary m-2">
                                            View Departments
                                        </button> </a>
                                        </form>
                                    <?php } ?>
                                </td>

                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>