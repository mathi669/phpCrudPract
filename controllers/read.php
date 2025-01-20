<?php
require_once '../data/db_get_employee.php';

//Se define la variable stmt y se le asigna desde la variable $conn (que viene de data) y se crea la consulta
// $stmt = $conn->prepare("SELECT * FROM employees");
// $stmt->execute();
$employees = getEmployee();

$output = '';
if($employees){

    foreach($employees as $employee){
        $output .= '
        <tr>
            <td>'.$employee['id'].'</td>
            <td>'.$employee['name'].'</td>
            <td>'.$employee['email'].'</td>
            <td>'.$employee['position'].'</td>
            <td>'.$employee['salary'].'</td>
            <td>
                <button class="btn btn-info btn-sm edit-btn" data-id="'.$employee['id'].'">Editar</button>
                <button class="btn btn-danger btn-sm delete-btn" data-id="'.$employee['id'].'">Eliminar</button>
            </td>
        </tr>
        ';
    }
} else {
    $output = '<tr><td colspan="6">No se encontraron empleados.</td></tr>';
}
echo $output;
?>