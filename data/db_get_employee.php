<?php 
require_once '../data/db.php';

function getEmployee(){
    global $conn;

    $sql = ' SELECT ' 
         . ' id, ' 
         . ' name, ' 
         . ' email, ' 
         . ' position, ' 
         . ' salary ' 
         . ' FROM employees ';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $arrResult = $stmt->fetchAll(PDO::FETCH_ASSOC); // se devuelven los datos como un array asociativo

    if(count($arrResult) > 0){
        $arrResultado = [];
        foreach ($arrResult as $value) {
            $arrResultado[] = array(
                'id'        => $value['id'],
                'name'      => $value['name'],
                'email'     => $value['email'],
                'position'  => $value['position'],
                'salary'    => $value['salary']
            );
        }

        return $arrResultado;
    } else {
        return NULL;
    }
}

?>
