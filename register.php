<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>
    <?php
    include_once("./incl/header.php");
    ?>
    <link href="./assests/css/register.css" rel="stylesheet">
</head>

<body>
    <?php include_once("./incl/navbar.php") ?>

    <?php
    include("./incl/functions.php");
    ?>

    <!-- Form -->
    <div class="container login">
        <form action="register.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Password Check</label>
                <input type="password" class="form-control" name="passwordCheck">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="registerSubmit">Submit</button>
            <button type="submit" class="btn btn-primary" name="deleteSubmit">Delete</button>
        </form>
        <p class="note">Already a Member? Login here</p>
        <a href="login.php" class="btn btn-primary">Login</a>
    </div>
</body>

</html>