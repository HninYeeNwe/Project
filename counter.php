<?php 
	include_once "config/db-connect.php";

	// adding new Visitor
	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	
	// TESTING PURPOST
	// $visitor_ip = "50:50:50";

	// checking if visitor is array_unique

	$query = "SELECT * FROM counter WHERE ip_address = '$visitor_ip'";
	$result = mysqli_query($conn,$query);

	// if (!$result) {
	// 	die("Retriving query error<br>".$query);
	// }
	// $total_visitors = mysqli_num_rows($result);

	// if ($total_visitors < 1) {
		$query = "INSERT INTO counter(ip_address) VALUES ('$visitor_ip')";
		$result = mysqli_query($conn,$query);
	// }

 ?>


<!DOCTYPE html>
<html lang="en" class="row col ml-auto">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>HSP Digital Marketing Agency</title>
	<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="library/fontawesome/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="images/16x16 px - png-logo.png">
	<style type="text/css">
		/*.wrapper{
			height: 300px;
			width: 300px;
			background-color: skyblue;
			margin: auto;
			text-align: center;
			border: 1px solid white;
			box-shadow: 2px 2px 10px gray;
		}
		h1{
			background-color: mediumseagreen;
			color: white;
			border-bottom:1px solid white;
		}

		h3{
			font-size: 5em;
		}

		h1,h3{
			padding: 20px;
			margin: 0px;
		}*/
	</style>
</head>
<body>

	<!-- <div class="wrapper">
		<h1>
			Visitor Count
		</h1>
		<h3><?php echo $total_visitors; ?></h3>
	</div> -->

	<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="library/bootstrap/popper.min.js"></script>
	<script src="library/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>