<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: http://localhost/employee/auth/");
    exit();
}

    require_once('connect.php');
    if(isset($_POST['submit'])){
        // name, email, phone, sex, password, profile, role
      $name= $_POST['name'];
      $email= $_POST['email'];
      $phone= $_POST['phone'];
      $sex= $_POST['sex'];
      $password= $_POST['password'];
      $role= $_POST['role'];


      $password = md5($password);

      $checkEmail = "SELECT email FROM employee WHERE email ='$email'";

        $result = mysqli_query($con, $checkEmail);
        if(!$result){
            die(mysqli_error($con));
        }

        // var_dump(mysqli_num_rows($result));
        // if(mysqli_num_rows($result)>0){
        //     die("user name is already taken");
        // }
    //   echo "name ".$name."<br>";
    //   echo "password ".$password."<br>";
    //   echo "email ".$email."<br>";
    //   echo "phone ".$phone."<br>";
    //   echo "sex ".$sex."<br>";
    //   echo "role ".$role."<br>";
    $createTable = "CREATE TABLE IF NOT EXISTS employee (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL , phone VARCHAR(10) NOT NULL , profile VARCHAR(50)  NULL, sex ENUM('M', 'F') NOT NULL, role ENUM('CEO','Manager','Sales') NOT NULL , created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP) ";

    $result = mysqli_query($con,$createTable);
    if(!$result){
        echo mysqli_error($con);
    }

    // inserting user input
    $insertQuery= "INSERT INTO employee(name, email, phone, sex, role,  password) VALUES ('$name','$email','$phone', '$sex', '$role',  '$password' )"; 

    $result = mysqli_query($con,$insertQuery);
    if(!$result){
        echo mysqli_error($con);
    }

    header("Location: show.php");

    }else{
        // redirect to index.php
        header("Location: index.php");
    }

?>