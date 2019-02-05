<?php
           session_start(); 

	   // Destroy Session 
	   $_SESSION = array();  
	   session_unset(); 
	   session_destroy(); 

	   header("Location:http://localhost/temp.github.io/login.html");
	   exit();

?>

