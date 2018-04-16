<?php

class Sinhvien{

    private $name = 'Nguyen A';
    
    function getName(){
        return $this->name;
    }

    function setName($fullname){
        $this->name = $fullname;
    }

}
$sv = new Sinhvien;
echo $sv->getName();
echo "<br>";

$sv->setName('HHuong');
echo $sv->getName();
echo "<br>";

$sv->age = 12;
var_dump($sv);



// $sv = new Sinhvien;
// echo $sv->name; //get name
// echo "<br>";

// $sv->name = 'Nguyen B'; //set name
// echo $sv->name; 



// $sv = new Sinhvien;
// $sv1 = new Sinhvien;

// if($sv === $sv1){
//     echo "same";
// }
// else echo 'not same';


// var_dump($sv);
// echo '<br>';
// var_dump($sv1);




?>