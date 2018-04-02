<?php

$arr = [
    'html' => 'HTML',
    'css' => 'CSS',
    'js' => 'Javascript'
];

// echo array_search('Javascript',$arr); //return key

// $check = in_array('Javascript',$arr); // return boolean
// var_dump($check);

// $arrTemp = [];
// $t = 0;
// foreach ($arr as $key => $value) {
//     if($t==2) 
//         $arrTemp['php'] = "PHP";
//     $arrTemp[$key] = $value;
//     $t++;
// }
// $arr = $arrTemp;
// print_r($arr);

// print_r($arrTemp);

// unset($arrTemp);
// print_r($arrTemp);


array_splice($arr,2,1,['php'=>'PHP','NodeJS']);
print_r($arr);

?>