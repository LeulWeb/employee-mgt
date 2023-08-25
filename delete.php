<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: http://localhost/employee/auth/");
    exit();
}

    require_once('connect.php');

    $id= $_GET['id'];

    $deleteQuery = "DELETE FROM employee WHERE id = '$id'";
    $result = mysqli_query($con, $deleteQuery);
    if($result){
    header("Location: show.php");
    }else{
        echo "Error deleting user with an id of ".$id;
    }
?>