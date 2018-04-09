<?php

$file = $_FILES['image'];

// echo $file['name'];
// echo $file['tmp_name'];

//check file size < 1Mb 
//chi cho phep upload file image png/jpeg/gif/jpg
//rename

// move_uploaded_file($file['tmp_name'],'files/'.$file['name']);

// echo "success";
//print_r($file);

//2018-04-09-20-24-30-13423453-huong.png


date_default_timezone_set('Asia/Ho_chi_minh');


if($file['size'] <= 1024*1024){ 

    $ext = pathinfo($file['name'],PATHINFO_EXTENSION);
    $arrExt = ['png','jpeg','gif','jpg'];

    if(in_array($ext,$arrExt)){
        $newName = date('Y-m-d-H-i-s',time()).'-'.rand(12345,87654324).'-'.$file['name'];

        move_uploaded_file($file['tmp_name'],'files/'.$newName);
        echo "success";
    }
    else{
        echo "File not allow";
    }

    
}
else{
    echo "File too large!";
}




//30516596_567284083670368_1628131718621822976_n


?>