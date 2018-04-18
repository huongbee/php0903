<?php
class Sinhvien{

    public static $id = 000;
    //public $pi = 2345788876;
    const pi = 3.14;


    function getPi(){
        //return $this->pi; //false
        //return $this::pi; // true
        return Sinhvien::pi; //true
    }

    // function __construct($maso){
    //     //$this->id = $maso;
    //     Sinhvien::$id = $maso;
    // }
    public function  setId($maso){
        Sinhvien::$id = $maso;
    }


    public static function  getId(){
        return Sinhvien::$id;
    }

}

$sv = new Sinhvien;
$sv->setId(12);
echo $sv->getId(); //12

echo $sv->getPi();

// echo "<br>";

// $sv2 = new Sinhvien;
// $sv2->setId(13);
// echo $sv2->getId(); //000




// $sv = new Sinhvien(12345);
// //echo $sv::$id;
// echo $sv->getId();

// echo "<br>";

// echo Sinhvien::getId();




//var_dump($sv);

//echo $sv->id;



?>