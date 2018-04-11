<?php
$images = $_FILES['image'];
if($images['error'][0]>0){
    echo "Vui long chon file";
    die;
}

//check file size < 1Mb 
//chi cho phep upload file image png/jpeg/gif/jpg
//rename

// neu co file nao do bi error => rollback all file

foreach($images['size'] as $size){
    if($size > 1024*1024){
        echo "File too large";
        die;
    }
}

$arrExt = ['png','jpeg','gif','jpg'];

foreach($images['name'] as $name){
    $ext = pathinfo($name,PATHINFO_EXTENSION);

    if(!in_array($ext,$arrExt)){
        echo "File not allow";
        die;
    }
}

echo 'thoa man';


?>