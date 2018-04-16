<?php

class Sinhvien{

    private $name = 'Nguyen A';
    public $tmpName;

    function getName(){
        $this->tmpName = $this->name;
        return $this->name;
    }

    function setName($fullname){
        $this->name = $fullname;
    }
}


class Hocsinh extends Sinhvien{
    
    function getName(){
        return parent::getName();
        //return $this->tmpName;
        //return $this->getName();
        //return $this->name;
    }
    
}


$hs = new Hocsinh;
echo $hs->getName();
echo  $hs->tmpName;

?>