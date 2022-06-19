<?php

//What is session
// Ans:- used to manage information across difference pages 


//Verify the login user info
session_start();
$_SESSION['username']="Jahid";
$_SESSION['favCat']="Books";
echo "We have saved your session";

?>