<?php 	
	include_once "config/db-connect.php";

	// $id = '';
	$id = $_POST['id'];
	$name = $_POST['cname'];
	$image = $_FILES['cimage']['name'];
	$tmp = $_FILES['cimage']['tmp_name'];

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

	if ($image) {
		move_uploaded_file($tmp,"../images/$image");

		$sql = "UPDATE clients SET cname = '$name',cimage='$image' WHERE cid = $id";
	
	}elseif($data)
	{
		$sql = "UPDATE clients SET images = '$data' WHERE cid = $id";
	}
	else{
		$sql = "UPDATE clients SET cname = '$name' WHERE cid = $id";
	}
	mysqli_query($conn,$sql);
		
	header("location: client-list.php");
 ?>

