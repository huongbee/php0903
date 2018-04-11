<?php

setcookie('username',"admin",time()+120); //create

setcookie('username',"",time()-120); //delete

echo "setup";

?>