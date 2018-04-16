<?php

class Sinhvien{

    private $name = 'Nguyen A';
    public $tmpName = 'Nguyen B';
    protected $money = 10000;

    function getName(){
        $this->tmpName = $this->name;
        return $this->name;
    }

    function setName($fullname){
        $this->name = $fullname;
    }
}

// $sv = new Sinhvien;
// echo $sv->money;
// echo $sv->tmpName;


class Hocsinh extends Sinhvien{
    
    function getName(){
        return parent::getName();
        //return $this->tmpName;
        //return $this->getName();
        //return $this->name;
    }

    function receiveMoney(){
        return $this->money;
    }
    
}


$hs = new Hocsinh;
echo $hs->tmpName;
echo $hs->getName();
$hs->name = 'Huong';
echo $hs->name;
echo  $hs->tmpName;
// echo $hs->money;
echo $hs->receiveMoney();

?>