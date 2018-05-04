<?php

try{
    $connect = new PDO("mysql:host=localhost;dbname=php0903_banhang",'root','');
    $connect->exec("set names utf8");
}
catch(PDOException $e){
    echo "Error. ";
    echo $e->getMessage();
}

//$sql = "DELETE FROM users WHERE id < 40";
// $sql = "INSERT INTO users(email,fullname,address, password,birthdate)
//         VALUES 
//             ('huong05@gmail.com','Huong Huong 2', 'District 12', 1212121,'2017-12-3'),
//             ('huong06@gmail.com','Huong Huong 2', 'District 12', 1212121,'2000-04-25'),
//             ('huong07@gmail.com','Huong Huong 2', 'District 12', 1212121,'1999-09-20')
//         ";
// $sql = "SELECT * FROM users"; //exec() ko dung cho cau SELECT
// $result = $connect->exec($sql);
// var_dump($result);

// $sql = "SELECT * FROM users";
// $stmt = $connect->prepare($sql);
// $check = $stmt->execute();

// if($check){
    
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     //$result = $stmt->fetchAll(PDO::FETCH_NUM);
//     //$result = $stmt->fetchAll(PDO::FETCH_BOTH);
//     //$result = $stmt->fetchAll(PDO::FETCH_OBJ);
//     //print_r($result);
//     // foreach($result as $user){
//     //     echo $user->fullname;
//     //     echo "<br>";
//     // }
//     foreach($result as $user){
//         echo $user['email'];
//         echo "<br>";
//     }
// }   
// else{
//     echo "Error";
// }

$id = 42;
$username = "huonghuong";
$sql = "SELECT * FROM users WHERE id = ? AND username = ?"; //return only 1 user

$stmt = $connect->prepare($sql);

$stmt->bindValue(1, 42, PDO::PARAM_INT);
$stmt->bindParam(2, $username, PDO::PARAM_STR);
//$stmt->bindValue(2, $username, PDO::PARAM_STR);

$check = $stmt->execute();

if($check){

    $result = $stmt->fetch(PDO::FETCH_OBJ); //return only 1 user
    //print_r($result);
    //echo $result->username;
}   
else{
    echo "Error";
}

// $sql = "SELECT * FROM users WHERE id = :id AND username = :un";
// $stmt->bindValue(':id',$id);
// $stmt->bindValue(':un',$username);



$sql = "INSERT INTO users(email,fullname,address, password,birthdate)
        VALUES  (?,?, ?, ?,?)";

$stmt = $connect->prepare($sql);

$stmt->bindValue(1, '121212huong@gmail.com');
$stmt->bindValue(2, "Hhuong");
$stmt->bindValue(3, "Quan 1");
$stmt->bindValue(4, "12478");
$stmt->bindValue(5, "2018-1-8");
$check = $stmt->execute();
if($check){
    echo "thanh cong";
}
else{ 
    echo 'that bai';
}

?>