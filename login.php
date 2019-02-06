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


$uname = $_POST['uname'];
$pass = $_POST['pass'];



$sql = "INSERT INTO users (username, password) VALUES ('$uname', '$pass')";
$sql1 = "SELECT * FROM users WHERE username = '$uname'and password = '$pass'";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
	session_start();
	$_SESSION['username'] = $uname;
	header("Location:http://localhost/temp.github.io/index.php"); /* Redirect browser */
	exit();

	}
else {
					/*if (mysqli_query($conn, $sql)){ echo "Account created";}else {echo "Account can't be created";} } */
     header("Location:http://localhost/temp.github.io/login.html");
     exit();

     }


error_reporting(E_ALL);
ini_set('display_errors', 'On');

$conn->close();
?>

