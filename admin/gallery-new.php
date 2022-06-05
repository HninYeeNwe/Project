<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>HSP Digital Marketing Agency</title>
	<link rel="stylesheet" href="../library/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../library/fontawesome/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="../images/16x16 px - png-logo.png">
</head>
<body>

	<div class="container">
		<form action="gallery-new.php" method="post" enctype="multipart/form-data"style="width: 500px;" class="mx-auto">
			<h1>Add Images To Gallery</h1>
			<label for = "cname" class="text-dark font-size-16 font-rb">Choose Images:</label><br>
 			<input type="file" name="images[]" multiple/>
			<input type="submit" name="submit" value="Choose" class="btn btn-info">
			<br><br>
			<a href="gallery.php" class="btn btn-info">Back</a>
			<br><br>
		</form>
	</div>

<?php 
	include_once "config/db-connect.php";
	
	if (isset($_POST['submit'])) 
	{
		$file = '';
		$file_tmp = '';
		$location = "../images/";
		$data = '';
		foreach ($_FILES['images']['name'] as $key=>$value) 
		{
			$file = $_FILES['images']['name'][$key];
			$file_tmp = $_FILES['images']['tmp_name'][$key];
			move_uploaded_file($file_tmp,$location.$file);
			$data .=$file.",";
			// echo $data;
		}
		$sql = "INSERT INTO clients (images) VALUES ('$data')";
		$fire = mysqli_query($conn,$sql);
		if ($fire) {
			echo "Successful";
		}
		else
		{
			echo "Failed";
		}
	}

	// if (isset($_POST["submit"])) 
	// {
	// 	$location = "../images/";

	// 	$file1 = $_FILES['image']['name'];
	// 	$file_tmp = $_FILES['image']['tmp_name'];

	// 	$file2 = $_FILES['cimage2']['name'];
	// 	$file_tmp2 = $_FILES['cimage2']['tmp_name'];

	// 	$file3 = $_FILES['cimage3']['name'];
	// 	$file_tmp3 = $_FILES['cimage3']['tmp_name'];

	// 	$file4 = $_FILES['cimage4']['name'];
	// 	$file_tmp4 = $_FILES['cimage4']['tmp_name'];

	// 	$data = [];
	// 	$data = ['$file1','$file2','$file3','$file4'];
	// 	print_r($data);

	// 	// $images = implode('', $data);

	// 	// $sql = "INSERT INTO clients(cname,images,created_date) VALUES ('$name','images',now())";
	// 	// $result = mysqli_query($conn,$sql);

	// 	// if($result){
	// 	// 	move_uploaded_file($file_tmp1,$location.$file1);
	// 	// 	move_uploaded_file($file_tmp2,$location.$file2);
	// 	// 	move_uploaded_file($file_tmp3,$location.$file3);
	// 	// 	move_uploaded_file($file_tmp4,$location.$file4);
	// 	// 	echo "success!";
	// 	// }
	// 	// else{
	// 	// 	echo "fail!";
	// 	// }

	// 	// mysqli_close($conn);
	// 	// header("location:client-list.php");
	// }
	// if (isset($_POST["choose"])) 
	// {
	// 	if (!empty($_POST["category"])) 
	// 	{
	// 		$selected = $_POST["category"];
	// 		// echo "You choose : ".$selected;
	// 	}
	// 	if ($selected == 1) {
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 	}
	// 	elseif ($selected == 2) {
	// 		echo "<input type = 'file' name = 'image' id='image'><br><br>";
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 	}
	// 	elseif ($selected == 3) {
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 	}
	// 	elseif ($selected == 4) {
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 	}
	// 	elseif ($selected == 5) {
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 		echo "<input type = 'file' name = 'image' id='image'>";
	// 	}
	// }
?>

	<!-- <form action="gallery-new.php" enctype="multipart/form-data">
		<input type="submit" name="images" class="btn btn-info">
	</form> -->

	<script src="../library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="../library/bootstrap/popper.min.js"></script>
	<script src="../library/bootstrap/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>