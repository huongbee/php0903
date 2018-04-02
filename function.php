<?php

//echo rand(10,7);
// $str = "Con le le nó đậu cành tre";
// $count = 0;
// str_replace('le','cào',$str,$count);
// echo $count;


// $arr = [
//     'html' => 'HTML',
//     'css' => 'CSS',
//     'js' => 'Javascript'
// ]; 
// echo implode(', ',$arr);

// $str = "Con le le nó đậu cành tre";
// $arr2 = explode(' ',$str);

// print_r($arr2);

// echo date_default_timezone_get();
date_default_timezone_set('Asia/Ho_Chi_Minh');
// echo  date_default_timezone_get();
// $date = getdate();
// print_r($date);

//echo time();

$date = '2018-05-30 12:45:60'; //23456786543

echo date('d-m-Y H:i:s',strtotime($date));


?>