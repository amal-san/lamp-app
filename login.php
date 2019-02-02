<?php
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "typerex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$uname = $_POST['uname'];
$pass = $_POST['pass'];



$sql = "INSERT INTO users (username, password) VALUES ('$uname', '$pass')";
$sql1 = "SELECT * FROM users WHERE username = '$uname'and password = '$pass'";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {

	header("Location:http://localhost/typerex/index.html"); /* Redirect browser */
	exit();
	
	}
else {
					/*if (mysqli_query($conn, $sql)){ echo "Account created";}else {echo "Account can't be created";} } */
     header("Location:http://localhost/typerex/login.html");
     exit();				
     
     }								
										

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$conn->close();
?>
