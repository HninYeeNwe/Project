<?php 
	$conn = mysqli_connect("localhost","root","","hspdb");

	if (!$conn) {
		echo "connection error:".mysqli_connect_error();
	}
	
 ?>