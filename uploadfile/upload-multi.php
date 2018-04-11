<?php
session_start();
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
        $_SESSION['error'] = "File too large";
       // header("Refresh:5; url=index.php");
        header("location:index.php");
    }
}

$arrExt = ['png','jpeg','gif','jpg'];

foreach($images['name'] as $name){
    $ext = pathinfo($name,PATHINFO_EXTENSION);

    //echo $ext;
    if(!in_array($ext,$arrExt)){
        echo "File not allow";
        die;
    }
}

foreach($images['tmp_name'] as $key=>$tmp_name){

    $newName = time().'-'.$images['name'][$key];
    move_uploaded_file($tmp_name,'files/'.$newName);
}
echo 'thoa man';


?>