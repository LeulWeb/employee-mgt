<?php

session_start();
if(!isset($_SESSION['userId'])){
    header("Location: http://localhost/employee/auth/");
    exit();
}


require_once('connect.php');

$selectQuery = "SELECT * FROM employee";

$response = mysqli_query($con, $selectQuery);
?>

<?php  
    include('logoutbtn.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h1>Employee</h1>
        <p class="lead">manage your employee with ease</p>
        <table class="table tabled-bordered">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Sex</th>

                <th>Actions</th>
            </thead>
            <tbody>
                <?php

                function displayGender($sex)
                {
                    return ($sex == "M") ? "Male" : "Female";
                }

                function updateId($id)
                {
                    return "edit.php?id=" . $id;
                }

                function deleteId($id)
                {
                    return "delete.php?id=" . $id;
                }


                while ($row = mysqli_fetch_assoc($response)) {
                ?>
                    <tr>
                        <td> <?php echo $row['id'];  ?> </td>
                        <td> <?php echo $row['name'];  ?> </td>
                        <td> <?php echo $row['email'];  ?> </td>
                        <td> <?php echo $row['phone'];  ?> </td>
                        <td> <?php echo $row['role'];  ?> </td>
                        <td> <?php echo $row['sex'];  ?> </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href='<?php echo  updateId($row['id']);  ?>'>Edit</a>
                            <a class="btn btn-danger btn-sm" href='<?php echo  deleteId($row['id']);  ?>'>Delete</a>
                        </td>
                    </tr>
                <?php };  ?>
            </tbody>
        </table>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>