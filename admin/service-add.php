<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>HSP Digital Marketing Agency</title>
	<link rel="stylesheet" href="../library/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../library/fontawesome/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="images/16x16 px - png-logo.png">
</head>
<body>

	<?php
	include_once "config/db-connect.php";

	$name = "";
	if (isset($_POST["name"])) 
	{
		$name = $_POST['name'];
	}

	$image ="";
	if (isset($_POST["name"])) 
	{
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];
	}
	if($image)
	{
		move_uploaded_file($tmp,"../images/$image");
			
	}
	$sql = "INSERT INTO services(name,image,created_date) VALUES ('$name','$image',now())";

	$result = mysqli_query($conn,$sql);

	mysqli_close($conn);
	header("location: service-list.php");
	?>

 	<script src="../library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="../library/bootstrap/popper.min.js"></script>
	<script src="../library/bootstrap/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>