<?php
session_start();
if (isset($_SESSION['userID'])) {
    header('Location:home.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>percobaan m8</title>
    <link rel="stylesheet" href="Login.css">

    <!--link untuk font yang saya gunakan-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 

    <style>
    </style>
</head>

<body>
    <div class="bucket">
        <p>Last Practice </p>
        <form action="./login.php" method="post" class="login">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field">
            <input type="submit" name="login" value="Login" class="login-btn-submit">
        </form>
    </div>
</body>

</html>