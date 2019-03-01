<?php

$servername = "localhost";
$username = "root";
$password = "Amal@123";
$dbname = "typerex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users (username, password,email) VALUES ('$uname', '$pass','$email')";
$sql1 = "SELECT * FROM users WHERE username = '$uname'and password = '$pass'";
if (!empty($uname) && !empty($pass))
  {
    $result = $conn->query($sql1);

    if ($result->num_rows > 0) {
	     header("Location:http://localhost/temp.github.io/register.html"); 
	      exit();

	     }
    else {

        		
      if (mysqli_query($conn, $sql)) {
       session_start();
       $_SESSION['username'] = $uname;
       $_SESSION['time']     = time();
       header("Location:http://localhost/temp.github.io/login.html");
       exit();
        }
    }
  }
else {

    header("Location:http://localhost/temp.github.io/login.html");
    exit();

  }


$conn->close();
?>






