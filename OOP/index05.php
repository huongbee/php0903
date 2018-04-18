<?php
class Sinhvien{

    public  $id = '000';

    // function __construct($maso){
    //     //$this->id = $maso;
    //     Sinhvien::$id = $maso;
    // }
    public function  setId($maso){
        $this->id = $maso;
    }


    public  function  getId(){
        return $this->id;
    }

}

$sv = new Sinhvien;
$sv->setId(12);
echo $sv->getId(); //12

echo "<br>";

$sv2 = new Sinhvien;
echo $sv2->getId(); //000



$a = 1;
$a = 2;


define('PI', 3.14);

echo PI;