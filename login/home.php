<?php
session_start();
if(!isset($_SESSION['user_test']) && !isset($_COOKIE['user_test'])){
    $_SESSION['error'] = "Bạn vui lòng đăng nhập";
    header("location:login.php");
}
elseif(isset($_COOKIE['user_test'])){
    $_SESSION['user_test'] = $_COOKIE['user_test'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
<body>
    <h2>Hello Admin</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
