<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.banco{
    width:240px;
    margin:0 auto;
    border:3px solid #000;
    height:240px;
    
}
.oco{
    width:30px;
    height:30px;
    float:left
}
.den{
    background-color:#000
}
.trang{
    background-color:#fff
}
</style>
<body>
<div class="banco">
    <?php

    for($y=1; $y<=8; $y++){
        for($x=1;$x<=8;$x++){
            
            if(($y+$x)%2 ==0){
            ?>
            <div class='oco trang' name="huong"></div>
            <?php
            }
            else echo '<div class="oco den"></div>';
        }
    }
    ?>
    
    
        
</div>
</body>
</html>