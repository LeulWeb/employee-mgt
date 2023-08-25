<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: http://localhost/employee/auth/");
    exit();
}

    require_once('connect.php');

    if(isset($_POST['submit'])){
        $updateName = $_POST['name'];
        $id= $_POST['id'];
        $updateEmail = $_POST['email'];
        $updatedRole = $_POST['role'];
        $updatePhone =$_POST['phone'];


        var_dump($updatedRole);

        $updateQuery = "UPDATE employee SET name= '$updateName', email ='$updateEmail', role='$updatedRole', phone ='$updatePhone'  WHERE id  = '$id' ";

        $result = mysqli_query($con, $updateQuery);

        if($result){
            header("Location: show.php");
            exit();
        }else{
            echo "Error updating employee";
        }

    }
    



?>