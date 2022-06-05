
<?php 

	include_once "config/db-connect.php";

	if (isset($_POST["submit"])) 
	{
	
		$name = "";
		if (isset($_POST["cname"])) 
		{
			$name = $_POST['cname'];
		}
		$image ="";
		if (isset($_FILES["cimage"])) 
		{
			$image = $_FILES['cimage']['name'];
			$tmp = $_FILES['cimage']['tmp_name'];
		}
		if($image)
		{
			move_uploaded_file($tmp,"../images/$image");
				
		}

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
		
		$sql = "INSERT INTO clients(cname,cimage,created_date,images) VALUES ('$name','$image',now(),'$data')";

		$result = mysqli_query($conn,$sql);

		if ($result) {
			echo "success";
		}else{
			echo "error";
		}
	}

	mysqli_close($conn);
	header("location: client-list.php");

?>