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


    </head>

    <body>
        <div class="container mt-md-5">
            <div class="row row-cols-1 my-md-3">
                <div class="col bg-secondary text-center">
                    <h2 class="text-white">Employees Details</h2>
                </div>
            </div>
            <div class="row row-cols-1 my-md-3 justify-content-center">
                <div class="col m-md-2">
                    <div class="table-responsive-xl">
                        <table class="table table-success table-hover text-center">
                            <caption>List of Departments</caption>
                            <thead class="table-dark">
                                <tr>
                                    <th class="col-xl-2">Department ID</th>
                                    <th class="col-xl-4">Department</th>
                                    <th class="col-xl-4">Head of Department</th>
                                    <th class="col-xl-2">Delete Department</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>