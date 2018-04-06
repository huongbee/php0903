<?php

echo $_GET['txtName'];
echo "<br>";

if(isset($_GET['txtPassword'])){
    echo $_GET['txtPassword'];
}

echo "<br>";


echo $_GET['id'];

//   http://localhost/php0903/form/register.php?id=12&txtName=huong&txtPassword=23456


// $a = 8;
// if(isset($a)){
//     echo $a;
// }
// else{ 
//     echo "chua co a";
// }



//check pw min:6
//check pw vs confirm pw same

?>