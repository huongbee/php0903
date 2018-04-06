<?php

// echo $_GET['txtName'];
// echo "<br>";

// if(isset($_GET['txtPassword'])){
//     echo $_GET['txtPassword'];
// }

// echo "<br>";


// echo $_GET['id'];

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
if(isset($_GET['txtPassword']) && $_GET['txtPassword'] !=''){
    
    if(strlen($_GET['txtPassword']) < 6){
        echo "<br>";        
        echo "Plz enter pw min 6.";
    }
}
else{
    echo "<br>";    
    echo "Plz enter pw.";
}

if(isset($_GET['txtConfirmPw']) && $_GET['txtConfirmPw'] !=''){
    if(strlen($_GET['txtConfirmPw']) < 6){
        echo "<br>";        
        echo "Plz enter confirm pw min 6.";
    }
}
else{
    echo "<br>";    
    echo "plz enter confirm pw.";
}

if($_GET['txtPassword'] != $_GET['txtConfirmPw']){
    echo "<br>";
    echo "pw vs confirm not same";
}
else{

echo $_GET['txtName'];
echo "<br>";

echo $_GET['txtEmail'];
echo "<br>";

}

?>