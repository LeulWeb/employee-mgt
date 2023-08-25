<?php

session_start();
if (!isset($_SESSION['userId'])) {
  header("Location: http://localhost/employee/auth/");
  exit();
}

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
  <h1 class="fw-bold fs-1">Let's register your employee</h1>
  <p class="muted">place where you can organize all your employee</p>

  <div class="row">
    <div class="col-md-6 offset-3">
      <form action="register.php" method="post" enctype="multipart/form-data">
        <!--employee name-->
        <input type="text" name="name" placeholder="Full Name" class="mb-3 form-control">
        <br>

        <!--employee email-->
        <input type="email" name="email" placeholder="youremail@example.com" class="mb-3 form-control">

        <!-- phone number -->
        <input type="text" name="phone" placeholder="phone" class="mb-3 form-control">

        <!-- sex -->
        <label for="sex">Sex</label>
        <input type="radio" name="sex" value="M" id="sex">Male
        <input type="radio" name="sex" value="F">Female

        <!-- password -->
        <input type="password" name="password" placeholder="password" class="mb-3 form-control">

        <!-- salary -->
        <input type="salary" name="salary" placeholder="salary" class="mb-3 form-control">

        <!-- role -->
        <label for="role">role</label>
        <select name="role" id="role">
          <option value="CEO">CEO</option>
          <option value="Manager">Manager</option>
          <option value="Sales">Sales</option>
        </select>

        <br>
        <!-- profile -->
        <label for="profile">Your Profile</label>
        <input type="file" name="profile" id="profile" class="mb-3 form-control">

        <!-- submit button -->
        <button type="submit" class="btn btn-success w-full" name="submit" value="submit">Register Employee</button>

        <button type="reset" class="btn btn-danger w-full" value="submit">clear</button>

      </form>
    </div>
  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>