<?php 	
	include_once "config/db-connect.php";
	
		$id = $_POST['id'];
		$name = $_POST['name'];
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];
		
		if ($image) {

			move_uploaded_file($tmp,"../images/$image");
			
			$sql = "UPDATE services SET name = '$name',image = '$image' WHERE id = $id";
	}
		mysqli_query($conn,$sql);
		header("location: service-list.php");


	// if (mysqli_query($conn,$sql)) {
	// 		header("location:service-list.php");
	// 	}else{
	// 		echo "query error:".mysqli_error($conn);
	// 	}
		
	// }
 ?>

