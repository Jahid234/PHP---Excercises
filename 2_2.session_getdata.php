<?php

//start the session and get data 

session_start();

if(isset($_SESSION['username'])){
    echo "Welcome ". $_SESSION['username'];
    echo "<br> your favourite category is ". $_SESSION['favCat'];
    echo "<br>";

}
else{
    echo "please login to continue";
}


?>