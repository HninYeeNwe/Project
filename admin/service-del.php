<?php 
	include_once "config/db-connect.php";
	
	$id = $_GET['id'];

	$sql = "DELETE FROM services WHERE id = $id";

	mysqli_query($conn,$sql);
	header("location:service-list.php");

	// $id = $_GET['cid'];
	// $sql = "DELETE FROM clients WHERE id = $id";
	// mysqli_query($conn, $sql);
	// header("location: index.php");
?>	