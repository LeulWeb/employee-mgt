<?php
// access the id
require_once('connect.php');
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: http://localhost/employee/auth/");
    exit();
}


$id  =  $_GET['id'];

$userInf = "SELECT name, role, email, phone FROM employee WHERE id = '$id'";

$result = mysqli_query($con, $userInf);
$row = mysqli_fetch_assoc($result);
$name  = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$role = $row['role'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="container">
    <h1 class="fw-bold fs-1">Update your employee info</h1>
    <p class="muted">place where you can organize all your employee</p>

    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <!-- user id -->
                <input type="text" name="id" readonly hidden value="<?php echo $id; ?>" class="mb-3 form-control">
                <br>


                <!--employee name-->
                <input type="text" name="name" placeholder="Full Name" value="<?php echo $name; ?>" class="mb-3 form-control">
                <br>

                <!--employee email-->
                <input type="email" name="email" value="<?php echo $email; ?>" placeholder="youremail@example.com" class="mb-3 form-control">

                <!-- phone number -->
                <input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="phone" class="mb-3 form-control">


                <!-- role -->
                <label for="role">role</label>
                <select name="role" id="role">
                    <option value="Manager" <?php echo ($role == "Manager") ? 'selected' : '';  ?>>Manager</option>
                    <option value="CEO" <?php echo ($role == "CEO") ? 'selected' : '';  ?>>CEO</option>
                    <option value="Sales" <?php echo ($role == "Sales") ? 'selected' : '';  ?>>Sales</option>
                </select>

                <br>
                <!-- profile -->
                <label for="profile">Your Profile</label>
                <input type="file" name="profile" id="profile" class="mb-3 form-control">

                <!-- submit button -->
                <button type="submit" class="btn btn-primary w-full" name="submit" value="submit">Update Employee</button>

                <button type="reset" class="btn btn-danger w-full" value="submit">clear</button>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>