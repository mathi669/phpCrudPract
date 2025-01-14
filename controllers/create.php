<?php
require_once '../data/db.php';

if(isset($_POST['name'], $_POST['email'], $_POST['position'], $_POST['salary'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $stmt = $conn->prepare("INSERT INTO employees (name, email, position, salary) VALUES (:name, :email, :position, :salary)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':position', $position);
    $stmt->bindParam(':salary', $salary);
    $stmt->execute();
}
?>
