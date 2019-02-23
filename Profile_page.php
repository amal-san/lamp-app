<?php

session_start();
$user = $_SESSION['username'];
$date = date_default_timezone_set('Asia/Kolkata');
$today = date('Y-m-d h:m:s');
$month = date('F');
$months = array('nomonth','January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December');
foreach( $months as $i  => $item) {
 if($month  == $item)
 {
   $mon = $item;
   $mon1 = $months[$i+1];
   $mon2 = $months[$i+2];
   $mon3 = $months[$i+3];
   $mon4 = $months[$i+4];
   $mon5 = $months[$i+5];
   $mon6 = $months[$i+6];
   $mon7 = $months[$i+7];
   $mon8 = $months[$i+8];
   break;
 }
 }

if(!isset($user))
{
 // not logged in
 header('Location: login.html');
 exit();
}

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
$select = "SELECT AVG(wpm) FROM wpm WHERE username = '$user'";
$result = $conn->query($select);

if ($result->num_rows > 0) {
	 $variable = "This query is working";
   $row = mysqli_fetch_row($result);
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Profile</title>
  <link href="txtstyle.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://www.chartjs.org/dist/2.7.3/Chart.bundle.js"></script>
	<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
	<style>
	canvas{
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
</head>
<body>
  <div id ="head" class ="head">
    <div id = "Title">
  <h1 style="color:white; text-align:center"> Typerex </h1>
  </div>
  <div id = "home" class = "home">
    <i class="fa fa-home" style="font-size:38px;color:white;align:center;"></i>
  </div>
  <div id = "login" class = "login">
  <i class="fa fa-user-circle-o" style="font-size:35px;color:white;align:right;"onclick="location.href ='login.html';"></i>
  </div>
  </div>
  <br>
	<div id = "container"style="width:1000px;">
		<canvas id="canvas"></canvas>
	</div>
  <div id = "box" style = "padding-top:350px;">
  <p style= "text-align:center;font-size:15px;"> Username : <?php echo $user ?> </p>
  <p style ="text-align:center;font-size:15px;"> Average of all time : <?php
    echo implode('<br>', $row);
?> </p>
</div>
	<script>
		var config = {
			type: 'line',
			data: {
				labels: ['<?php echo $mon;?>','<?php echo $mon1;?>','<?php echo $mon2;?>','<?php echo $mon3;?>','<?php echo $mon4;?>','<?php echo $mon5;?>','<?php echo $mon6;?>'],
				datasets: [{
					label: '<?php echo $user;?>',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
            <?php
              echo implode('<br>', $row);
        	?>],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Your progress'
				},
				scales: {
					yAxes: [{
						ticks: {
							// the data minimum used for determining the ticks is Math.min(dataMin, suggestedMin)
							suggestedMin: 1,

							// the data maximum used for determining the ticks is Math.max(dataMax, suggestedMax)
							suggestedMax: 200,
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};
	</script>
	<p>
    </p>
</body>

</html>

