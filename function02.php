<?php

// function inSo($so,$b){

//     $so += $b;

//     return $so;
// }


// function inSo(&$so){

//     $so += 5;

//     return $so;
// }


// $a = 2;
// echo inSo($a);
// echo "<br>";
// echo $a;

// echo "<br>";




// function inSo($so=0){

//     $so += 5;

//     return $so;
// }

// $a = 3;
// echo inSo($a);

function tang1($a){
    return $a-(-1);
}


function PTB1($a , $b){
    $kq = '';
    if($a==0){
        if($b==0) 
            $kq = "PT có vô số nghiệm";
        else $kq = "PT vô nghiệm";
    }
    else $kq = -$b/$a;
    return $kq;
}


$a = 2 ; $b = 4;

echo "Nghiệm của PT $a.x + $b = 0 là: ".PTB1($a,$b);

?>