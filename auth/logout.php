<?php

    session_start();
    unset($_SESSION['userId']);
    header("Location: http://localhost/employee/auth/");
    session_destroy();
?>