<?php
           session_start(); 

	   // Destroy Session 
<<<<<<< HEAD
	   $_SESSION = [];  
	   session_unset();
=======
	   $_SESSION = array();  
	   session_unset(); 
>>>>>>> 1ab84358d05c9c5e42e470aa7f4ad6cd83b7f1f1
	   session_destroy(); 

	   header("Location:http://localhost/temp.github.io/login.html");
	   exit();

?>

