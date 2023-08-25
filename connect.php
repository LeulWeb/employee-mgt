<?php

    $hostname ='127.0.0.1';
    $user="root";
    $password= "root";
    $db = "work";

//   $con = mysqli_connect($hostname, $user, $password, $db) or die("Echo ". mysqli_error($con));

$con = mysqli_connect($hostname, $user, $password, $db);

    if(!$con){
        die("Can not connect to database");
    }



?>