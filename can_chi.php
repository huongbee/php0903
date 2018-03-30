<?php



function CanChi($year){

    $can = $year%10; 
    if($can ==0) $can = "Canh";
    elseif($can ==1) $can = "Tân";
    elseif($can ==2) $can = "Nhâm";
    elseif($can ==3) $can = "Quý";
    elseif($can ==4) $can = "Giáp";
    elseif($can ==5) $can = "Ất";
    elseif($can ==6) $can = "Bính";
    elseif($can ==7) $can = "Đinh";
    elseif($can ==8) $can = "Mậu";
    else $can = "Kỷ";

    $chi = $year%12;
    if($chi ==0) $chi = "Thân";
    elseif($chi ==1) $chi = "Dậu";
    elseif($chi ==2) $chi = "Tuất";
    elseif($chi ==3) $chi = "Hợi";
    elseif($chi ==4) $chi = "Tí";
    elseif($chi ==5) $chi = "Sửu";
    elseif($chi ==6) $chi = "Dần";
    elseif($chi ==7) $chi = "Mão";
    elseif($chi ==8) $chi = "Thìn";
    elseif($chi ==7) $chi = "Tị";
    elseif($chi ==7) $chi = "Ngọ";
    elseif($chi ==7) $chi = "Mùi";
    else $chi = "Thân";
    return "Năm $year là năm $can $chi";

}

echo CanChi(2019);

?>