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

$date = date_default_timezone_set('Asia/Kolkata');
$today = date('Y-m-d h:m:s');
$user = $_POST['user'];
$wpm = $_POST['wpms'];
echo $user;
echo $wpm;
echo $today;

$sql = "INSERT INTO wpm (username,date,wpm) VALUES ('$user','$today','$wpm')";
if (mysqli_query($conn, $sql)) {

  header('Location: index.php');
  exit();

  }
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$conn->close();
?>

}

