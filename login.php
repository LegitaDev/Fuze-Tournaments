<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1 , shrink-to-fit=no">
    <title>Login Page</title>
    <?php
    include_once("./incl/header.php");
    ?>

    <link rel="stylesheet" href="./assests/css/login.css">

</head>

<body>
    <?php include_once("./incl/navbar.php") ?>

    <?php
    include_once("./incl/functions.php");
    ?>

    <!-- Form -->
    <div class="container login">
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" name="username">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="loginSubmit">Submit</button>
        </form>
        <p class="note">Don't have an account ? Register now</p>
        <a href="register.php" class="btn btn-primary">Register</a>
    </div>
</body>

<script src="./assests/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>