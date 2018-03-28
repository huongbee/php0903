<?php 
    // echo "Hello World";  
    // echo "<br>";
    // $a = 1;


    // echo $a;
     
    // echo "<br>";

    // echo gettype($a);


    // //
    // /**
    //  * 
    //  * 
    //  * comment
    //  */

    // $b = 1.2;

    // $a = 3;
    // $b = 5;
    // echo "Tổng của $a và $b là $a + $b = ".($a + $b);

    // $arr = array(
    //     1 => 'so_1',
    //     3 => 'so_3'
    // );

    // $arr2 = [
    //     1 => 'so_1',
    //     3 => 'so_3'
    // ];

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

    // $bool = true;
    // var_dump($bool);

    // if($bool) echo "yes";
    // else echo 'no';

    // if(1>2) echo "dung";
    // else echo "sai";

    // echo "<br>";

    // $json = json_encode($arr2); //string
    // echo $json;


    // class ObjA{
    //     public $a = 1;
    //     public $b = "2edxvdfg";
    // }

    // $objA = new ObjA;

    // echo "<pre>";
    // print_r($objA);
    // echo "</pre>";

    // define('PI', 3.14); //constant  
    // //define('PI', 3.16);

    // echo PI;


    $arr = array(
        'so_1',
        'so_3',
        'so_1',
        'so_3',
        'so_1',
        'so_3',
        'so_1',
        'so_3',
        'so_1',
        'so_3',
        'so_1',
        'so_3'
    );
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    //echo $arr[1];

    for($i = 0 ;  $i < count($arr) ; $i++){
        echo $arr[$i];
        echo " --- ";
        echo $i;
        echo "<br>";
    }

    echo "<hr>";

    foreach($arr as $key => $item){
        echo $item;
        echo " --- ";
        echo $key;
        echo "<br>";
    }


    $arr = array(
        2=> 'so_2',
            422345678,
        6=>'so_6',
        5=> 'so_5',
            'so_1',
            6,
            'so_1',
        'user'=>'so_3',
            'so_1',
        10=>    'so_10',
            1234567,
            'so_3'
    );

    echo count($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    foreach($arr as $key => $item){
        echo $item;
        echo " --- ";
        echo $key;
        echo "<br>";
    }

    switch('user'){
        case 3 : {
            echo 3;
            break;
        }
        case 5 : {
            echo 5;
            break;
        }
        default: echo "ko ton tai"; 

    }
    


?>  