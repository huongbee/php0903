<?php

class DBConnect{
    
    private $connect = NULL;

    function __construct($dbName = 'php0903_banhang',$user = 'root', $password=''){
        $this->connect = new PDO("mysql:host=localhost;dbname=$dbName",$user,$password);
        $this->connect->exec("set names utf8");
    }

    //sd cho lenh INSERT/UPDATE/DELETE
    function executeQuery($sql, $options = []){

        $stmt = $this->connect->prepare($sql);
        for($i = 1; $i<= count($options); $i++){
            $stmt->bindValue($i, $options[$i-1]);
            //$stmt->bindValue($i+1, $options[$i]);
        }
        return $stmt->execute();
    }
}
$con = new DBConnect();

$sql = "INSERT INTO users(email,fullname,address, password,birthdate)
        VALUES  (?,?, ?, ?,?)";
$options = [
    'huong@gmail.commm',
    'huonghuong',
    'q1',
    '12345',
    '2015-2-9'
];
$check = $con->executeQuery($sql, $options);
var_dump($check);
?>
