<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATIONS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>

<body>


    <table class="table table-danger table-hover table-bordered align-middle text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>DEPARTMENT</th>
                <th>MANAGER</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php

            require("resources/CRUD_operations/read.php");
            foreach ($records as $row) {

            ?>
                <tr>
                    <td>
                        <?php echo $row["dept_id"]; ?>
                    </td>
                    <td>
                        <?php echo $row["dept_name"]; ?>
                    </td>
                    <td>
                        <?php echo $row["dept_manager"]; ?>
                    </td>
                    <td>
                        <button type="button" name="" id="edit_button" class="btn btn-primary" value="<?php echo $row["dept_id"]; ?>">EDIT</button>
                    </td>
                    <td>
                        <button type="button" name="" id="delete_button" class="btn btn-danger" value="<?php echo $row["dept_id"]; ?>">DELETE</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


</body>

</html>