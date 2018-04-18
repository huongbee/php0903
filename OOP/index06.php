<?php

abstract class Sinhvien{

    public $name = 'huong';

    function getName(){
        return $this->name;
    }

    abstract function setName();

}


class Hocsinh extends Sinhvien{

    function setName($name='ngoc'){
        $this->name = $name;
    }

}


$hs = new Hocsinh;


interface Luat {
    //public $name = '1234'; false
    function luatA();
    function luatB($name);
    function luatC();
}

interface Luat2 {
    //public $name = '1234'; false
    function luatA();
    function luatB($name , $age);
    function luatC();
    function luatD();
    
}
class LuatX implements Luat, Luat2{
    function luatA(){
        echo "luatA";
    }
    function luatB(){
        echo "2345678";
        echo __FUNCTION__;
    }
    function luatC(){
        echo __FUNCTION__;
    }

    function A(){
        echo 'a';
    }
}


$lX = new LuatX;
$lX->luatB('huong');
$lX->A();

?>