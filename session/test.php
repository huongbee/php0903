<?php
session_start();

echo $_SESSION['message'];


print_r($_SESSION['cart'] );

session_destroy();



// unset($_SESSION['message']);


// echo $_SESSION['username'];




?>