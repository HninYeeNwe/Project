<?php 
	include_once "config/db-connect.php";

	if (isset($_POST['delete'])) {
		$id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);

		$sql = "DELETE FROM clients WHERE cid = $id_to_delete";

		if (mysqli_query($conn,$sql)) {
			header("location:client-list.php");
		}else{
			echo "query error:".mysqli_error($conn);
		}
	}

	// $id = $_GET['cid'];
	// $sql = "DELETE FROM clients WHERE id = $id";
	// mysqli_query($conn, $sql);
	// header("location: index.php");
 ?>