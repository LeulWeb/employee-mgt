<?php

    require_once('../connect.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $password = password_hash($password, PASSWORD_ARGON2ID );
        $insertUser = "INSERT INTO users(username,password) VALUES ('$username', '$password')";

       $result= mysqli_query($con, $insertUser);
       if($result){
        header("Location: index.php");
        exit();
       }else{
        echo "Error ".mysqli_error($con);
        exit();
       }


    }else{
        header("Login : index.php");
    }



?>