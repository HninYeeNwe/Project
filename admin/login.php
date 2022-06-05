<?php
	session_start();
	include_once "config/db-connect.php";
	
	$name=$_POST['name'];
	$password = $_POST['password'];

	$sql="SELECT * FROM admin";
	$ans=mysqli_query($conn,$sql);
		
	
	while($row=mysqli_fetch_assoc($ans)) {
		
		if($name == $row['name'] and $password == $row['password'])
		{
			$_SESSION['auth'] = true;
			header("location: client-list.php");
		} else {
			header("location: index.php");
		}
	}
?>	