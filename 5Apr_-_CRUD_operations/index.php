<!-- ==== PHP tag 1 start ==== -->
<?php
// enable configuration of database
include("config/config.php");

// if database is configured
$conn or die("Connection not successful");

// Reading database query
$read = "SELECT * FROM department_details ORDER BY id DESC;";

// Run query in database and store all data in records array
$records = mysqli_query($conn, $read);

// checking if there is any row in database
if (mysqli_num_rows($records) >= 0) {

    ?>
    <!-- ==== PHP tag 1 end ==== -->

    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>CRUD</title>

            <!-- jQuery CDN -->
            <script src="https://code.jquery.com/jquery-3.6.4.js"
                integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
                crossorigin="anonymous"></script>

            <!-- Bootstrap CDN -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
                rel="stylesheet"
                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                crossorigin="anonymous">
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous"></script>

            <!-- CSS File -->
            <link rel="stylesheet" href="resources/css/index.css">


        </head>

        <body>
            <div class="container mt-md-3">
                <div class="row row-cols-1 mt-md-1">
                    <div class="col bg-dark text-center">
                        <h2 class="text-white">Department Records</h2>
                    </div>
                </div>

                <!-- ===== ROW for both tables start ===== -->
                <div class="row row-cols-1 m-md-2 justify-content-center">

                    <!-- ===== TABLE for displaying all records start ===== -->

                    <div class="col mt-md-1 mx-md-2" id="display_div">

                        <!-- ==== All departments header start ==== -->
                        <div class="row row-cols-1 my-md-1">
                            <div class="col bg-opacity-75 bg-primary text-center">
                                <h5 class="text-white">ALL DEPARTMENTS</h5>
                            </div>
                        </div>
                        <!-- ==== All departments header end ==== -->

                        <div class="table-responsive-xl">

                            <table
                                class="table bg-opacity-50 bg-dark table-success table-hover text-center table-bordered border-warning"
                                id="all_dept_table">
                                <caption>List of Departments
                                    <p id="records_table_msg"></p>
                                </caption>
                                <thead class="table-dark">
                                    <tr>
                                        <th class="col-xl-2">Department ID</th>
                                        <th class="col-xl-4">Department</th>
                                        <th class="col-xl-4">Head of Department</th>
                                        <th class="col-xl-2 me-5">Delete Department</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider" id="all_details_tbody">

                                    <!-- ==== PHP tag 2 start ==== -->
                                    <?php

                                    // fetch a row from array multidimensional array record and run loop until last row is fetched from query variable
                                    while ($row = mysqli_fetch_assoc($records)) {
                                        ?>
                                        <!-- ==== PHP tag 2 end ==== -->

                                        <tr>
                                            <td class="col-xl-2">
                                                <!-- == Fetch key Department ID from records array == -->
                                                <span>
                                                    <?php echo $row["dept_id"]; ?>
                                                </span>
                                                <input type="text" class="edit_input form-control" hidden
                                                    name="dept_id" id=" <?php echo $row["dept_id"]; ?>">
                                            </td>
                                            <td class="col-xl-4">
                                                <!-- == Fetch key Department Name from records array == -->
                                                <span>
                                                    <?php echo $row["dept_name"]; ?>
                                                </span>
                                                <input type="text" class="edit_input form-control" hidden
                                                    name="dept_name" id=" <?php echo $row["dept_id"]; ?>">
                                            </td>
                                            <td class="col-xl-4">
                                                <!-- == Fetch key Department Manager from records array == -->
                                                <span>
                                                    <?php echo $row["dept_manager"]; ?>
                                                </span>
                                                <input type="text" class="edit_input form-control" hidden
                                                    name="dept_manager"
                                                    id=" <?php echo $row["dept_id"]; ?>">
                                            </td>

                                            <td class="col-xl-2">
                                                <!-- === Delete Button === -->
                                                <button type="button" class="btn btn-close delete_btn"
                                                    value="<?php echo $row["dept_id"]; ?>"></button>
                                            </td>
                                        </tr>

                                        <!-- ==== PHP tag 3 start ==== -->
                                    <?php }
                                    if (mysqli_num_rows($records) == 0) {
                                        ?>
                                        <!-- === Message if no row is there === -->
                                        <tr>
                                            <td class="col-xl-2" colspan="4">NO DEPARTMENT FOUND</td>
                                        </tr>
                                    <?php } ?>
                                    <!-- ==== PHP tag 3 end ==== -->



                                </tbody>
                            </table>
                            <!-- ==== PHP tag 4 start ==== -->
                            <?php
} else {
    echo ("<h2> No record in database </h2>");
}

?>
                        <!-- ==== PHP tag 4 end ==== -->

                    </div>
                </div>
                <!-- ===== TABLE for displaying all records end  ===== -->

                <!-- ===== TABLE for inserting a records start ===== -->
                <div class="col m-md-0 mx-md-2">

                    <!-- ==== All departments header start ==== -->
                    <div class="row row-cols-1 my-md-1">
                        <div class="col bg-opacity-75 bg-primary text-center">
                            <h5 class="text-white">NEW DEPARTMENT</h5>
                        </div>
                    </div>
                    <!-- ==== All departments header end ==== -->
                    <div class="table-responsive-xl">

                        <table
                            class="table bg-opacity-50 bg-dark table-hover text-center table-bordered border-warning"
                            id="insertion_table">
                            <caption>
                                <div id="insertion_msg" class="text-danger h5" hidden="true"></div>
                            </caption>
                            <thead class="table-dark">
                                <tr>
                                    <th class="col-xl-2">Department ID</th>
                                    <th class="col-xl-4">Department</th>
                                    <th class="col-xl-4">Head of Department</th>
                                    <th class="col-xl-2">Create Department</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <form id="creation_form" method="post">

                                        <td> <input type="text" class="form-control" name="dept_id"
                                                maxlength="3"></td>
                                        <td><input type="text" class="form-control" name="dept_name"
                                                maxlength="30"></td>
                                        <td><input type="text" class="form-control"
                                                name="dept_manager" maxlength="30"></td>
                                        <td>
                                            <!-- === Create Department Button === -->
                                            <button type="submit" class="btn btn-success"
                                                id="sad">Create
                                                <span class="spinner-border spinner-border-sm"
                                                    role="status" aria-hidden="true"
                                                    id="creation_spinner" hidden="true"></span>
                                            </button>

                                        </td>
                                    </form>
                                </tr>

                                <!-- ==== PHP tag 3 start ==== -->

                                <!-- ==== PHP tag 3 end ==== -->


                            </tbody>
                        </table>


                    </div>
                </div>
                <!-- ===== TABLE for inserting a records end  ===== -->

            </div>
            <!-- ===== ROW for both tables end ===== -->
        </div>
        <script src="resources/js/delete_record.js"></script>
        <script src="resources/js/insert_record.js"></script>
        <script src="resources/js/update_record.js"></script>

    </body>

</html>