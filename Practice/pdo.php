<?php

try {
    $connection = new PDO("mysql:host=localhost; dbname=TEST", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("Connected Successfully");
} catch (PDOException $e) {
    echo $e->getMessage();
}

print_r($_POST);
// if(!preg_grep(""))
$Id = $_POST['Id'];
$UserNumber = $_POST['UserNumber'];
$UserName = $_POST['UserName'];
$BirthDate = $_POST['BirthDate'];
$query = "INSERT INTO users   VALUES($Id, '$UserName', $UserNumber, '$BirthDate' )";

if (isset($_POST['insert'])) {
    try {
        $statement = $connection->prepare($query);
        $statement->execute();
        header('Location: http://localhost/PHP/pdo.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} elseif (isset($_POST['Delete'])) {
    $ID = $_POST['Delete'];
    $query = "DELETE FROM users WHERE ID=$ID";
    try {
        $statement = $connection->prepare($query);
        $statement->execute();
        header('Location: http://localhost/PHP/pdo.php');
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
// header('Location: http://localhost/PHP/pdo.php');
