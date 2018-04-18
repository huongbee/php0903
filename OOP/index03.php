<?php

class Sinhvien{

    public $id;
    public $phone;

    // function __construct(){
    //     echo "2345";
    //     echo __FUNCTION__;
    // }
    // function getData(){
    //     echo __FUNCTION__;        
    // }

    function __construct($maso){
       $this->id = $maso;
       echo "khoi tao";
    }

    function setPhone($sdt){
        $this->phone = $sdt;
    }

    function __destruct(){
        $this->id = NULL;
        $this->phone = NULL;

        echo "Reset";
        echo $this->id;
    }
}

$sv = new Sinhvien(2121);
$sv->setPhone(1234567965434);
echo $sv->phone;
echo "<br>";
//var_dump($sv);
//$sv->getData();
?>