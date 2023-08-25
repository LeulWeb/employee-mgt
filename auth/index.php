<!-- this is where you show you sign up form -->


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
        <div class="row">
            <div class="col-4 offset-4">
                <h1 class="fs-2 fst-italic  fw-bold mt-5 mb-2 ">Get started</h1>
                <p class="muted mb-2">Place where you are in control</p>
                <p>New here ? <a href="signup.php">sign up for free</a></p>

                <form action="handleLogin.php" method="post">
                    <input type="text" name="username" placeholder="username" class="form-control mb-2">
                    <input type="text" name="password" placeholder="password" class="form-control mb-2">
                    <button class="btn btn-primary w-full" name="submit" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>