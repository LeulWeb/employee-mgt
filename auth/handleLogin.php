<?php

    session_start();
    require_once('../connect.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        $checkUser = "SELECT * FROM users WHERE username = '$username'";

        $result = mysqli_query($con, $checkUser);

        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            $returnedUserName = $row['username'];
            $hashedPassword = $row['password'];
            $id = $row['id'];

            if(password_verify($password,$hashedPassword)){

                //if password match
                $_SESSION['userId'] = $id; 
                header('Location: http://localhost/employee/show.php');
                exit();

            }else{
                echo "The password is incorrect";
            }

        }

    
       

    }else{
        header("Login : index.php");
    }

?>