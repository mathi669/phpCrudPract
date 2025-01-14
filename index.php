<?php
require_once 'data/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Managment System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- <h1>Hello word</h1>
    <?php
    // if($conn){
    //     echo "<p>Conexion exitosa<p>";
    // }else{
    //     echo "<p>Conexion fallida<p>";
    // }
    ?> -->
    <!-- creacion tabla -->
    <div class="container mt-5">
        <h2 class="text-center">Sistema de gestion de empleados</h2>

        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal">añadir empleado</button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Puesto</th>
                    <th>Salario</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="employeeTable">

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="employeeForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" id="position" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="number" id="salary" class="form-control" required>
                        </div>
                        <button type="button" class="btn btn-primary" id="addEmployeeBtn">Add Employee</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editEmployeeForm">
                        <input type="hidden" id="edit-id">
                        <div class="form-group">
                            <label for="edit-name">Name</label>
                            <input type="text" id="edit-name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-email">Email</label>
                            <input type="email" id="edit-email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-position">Position</label>
                            <input type="text" id="edit-position" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-salary">Salary</label>
                            <input type="number" id="edit-salary" class="form-control" required>
                        </div>
                        <button type="button" class="btn btn-primary" id="updateEmployeeBtn">Update Employee</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="./js/scripts.js"></script>
</body>

</html>