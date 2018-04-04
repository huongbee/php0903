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


// function PTB1($a , $b){
//     $kq = '';
//     if($a==0){
//         if($b==0) 
//             $kq = "PT có vô số nghiệm";
//         else $kq = "PT vô nghiệm";
//     }
//     else $kq = -$b/$a;
//     return $kq;
// }
// $a = 2 ; $b = 4;

//echo "Nghiệm của PT $a.x + $b = 0 là: ".PTB1($a,$b);






// function tongChan($a){
//     $tong = 0;
//     for($i = 2;$i<=$a; $i+=2){
//         $tong+=$i;
//     }
//     return $tong;
// }


// function tongChan($a,$b){
//     $tong = 0;
//     if($a>=$b) return $tong;
//     for($i = $a;$i<=$b; $i++){
//         if($i%2 == 0) $tong +=$i; //tong = tong + i
//     }
//     return $tong;
// }

// echo tongChan(4,5);



function checkSNT($number){
    if($number<2) return false;

    for($i = 2; $i<=sqrt($number);  $i++){
        if($number%$i == 0) return false;
    }
    return true;
}
function inSNT($number){
    $kq = '';
    for($i=2; $i< $number; $i++){
        if(checkSNT($i)){
            $kq= $kq. $i.' ';
        }
    }
    return $kq;
}



    $kq = '';
    for($i=2; $i< 100; $i++){
        if(checkSNT($i)){
            $kq= $kq. $i.' ';
        }
    }
    echo "Dãy các SNT nhỏ hơn 100 là:".$kq;



$n = 100;
//echo "Dãy các SNT nhỏ hơn $n là: ". inSNT($n);


//var_dump(checkSNT(19))








?>