<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATIONS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid p-2">
        <div class="row row-cols-2 justify-content-center g-2">
            <!-- ====  DISPLAY COL ==== -->
            <div class="col">
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

                        require("resources/CRUD_operations/crud.php");
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
            </div>
            <!-- ====  FORM COL ==== -->
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-dark table-bordered ">
                        <thead>
                            <tr>
                                <th class="text-center">DEPARTMENT FORM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                                <td>
                                    <form class="" id="new_department_form" method="post">
                                        <div class="m-3 ">
                                            <label for="" class="form-label">Department ID</label>
                                            <input type="number" class="form-control" name="department_id" id="department_id">
                                        </div>
                                        <div class="m-3 ">
                                            <label for="" class="form-label">Department Name</label>
                                            <input type="text" class="form-control" name="department_name" id="department_name">
                                        </div>
                                        <div class="m-3 ">
                                            <label for="manager_name" class="form-label me-4"><b>Manager</b></label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="manager_name[]" id="manager_1" value="Director">
                                                <label class="form-check-label" for="manager_1">Director</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="manager_name[]" id="manager_2" value="President">
                                                <label class="form-check-label" for="manager_2">President</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="text" class="form-control" name="manager_name[]" id="manager_name" placeholder="Manager Name">
                                            </div>
                                        </div>
                                        <div class="m-3 ">
                                            <div class="d-grid gap-2 col-3">
                                                <button class="btn btn-primary fw-bold fs-5" type="submit">SAVE</button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="resources/js/submit.js"></script>
</body>

</html>