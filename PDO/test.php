<?php

require_once 'DBConnect.php';

$con = new DBConnect();

// $sql = "INSERT INTO users(email,fullname,address, password,birthdate)
//         VALUES (?,?, ?, ?,?)";
// $options = [
//     'huong@gmail.commm',
//     'huonghuong',
//     'q1',
//     '12345',
//     '2015-2-9'
// ];
// $check = $con->executeQuery($sql, $options);
// var_dump($check);

// $sql = "DELETE FROM users WHERE email=?";
// $options = [
//     'huong@gmail.commm'
// ];
// $check = $con->executeQuery($sql, $options);
// var_dump($check);


// $sql = "SELECT * FROM users WHERE email=? ";
// $options = ['huong@gmail.commm'];
// $con = new DBConnect();
// $result = $con->loadOneRow($sql,$options);
// print_r($result);


$sql = "SELECT * FROM users ";
$options = ['huong@gmail.commm'];
$con = new DBConnect();
$result = $con->loadMoreRows($sql,$options);
print_r($result);





?>