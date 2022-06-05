<?php 
	include_once "config/db-connect.php";
	// adding new Visitor
	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	// testing
	// $visitor_ip = "50:50:50";

	// checking if visitor is array_unique
	$query = "SELECT * FROM counter WHERE ip_address = '$visitor_ip'";
	$result = mysqli_query($conn,$query);

	if (!$result) {
		die("Retriving query error<br>".$query);
	}
	$total_visitors = mysqli_num_rows($result);

	if ($total_visitors < 1) {
		$query = "INSERT INTO counter(ip_address) VALUES ('$visitor_ip')";
		$result = mysqli_query($conn,$query);
	}

 ?>


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
<body style="background-color: #c5e3f6;">
<?php 
	$conn = mysqli_connect("localhost","root","","hspdb");

	if (!$conn) {
		echo "connection error:".mysqli_connect_error();
	}
?>

<!-- navbar section start-->
	<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
	  	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#myNavbar">
	    <span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="myNavbar">
		  	<div class="container-fluid">
		  		<div class="row">
		  			<div class="col-xl-2 col-lg-3 sidebar fixed-top">
		  				<div class="admin-info border-bottom">
		  					<a class="navbar-brand d-block text-center " href="client-list.php"><img src="../images/87x87 - png - logo.png" class=""></a>
		  					<a class="navbar-brand text-white mb-4 border-bottom d-block text-center" href="#">Admin Pannel</a>

		  					<ul class="navbar-nav flex-column">
		  						<li class="nav-item my-2">
		  							<a href="client-list.php" class="nav-link text-white text-center">သုံးစွဲသူများ</a>
		  						</li>
		  						<li class="nav-item my-2">
		  							<a href="service-list.php" class="nav-link text-white text-center sidebar-link current">ဝန်ဆောင်မှုများ</a>
		  						</li>
		  						<li class="nav-item my-2">
		  							<a href="report.php" class="nav-link text-white text-center sidebar-link">Monthly Clients</a>
		  						</li>
		  						<li class="nav-item my-2">
		  							<a href="logout.php" class="nav-link text-white text-center sidebar-link"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
		  						</li>
		  					</ul>
		  				</div>
		  			</div>

		  			<div class="col-xl-10 col-lg-9 bg-light fixed-top ml-auto top-navbar">
		  				<div class="row">
		  					<div class="col-lg-10">
		  						<a class="navbar-brand text-white my-3 text-center" href="client-list.php">HSP Digital Marketing Agency</a>
		  					</div>
		  					<div class="col-lg-2 mt-4">
		  						<h5 class="text-white">Visitors</h5>
		  						
								<h6 class="text-white"><i class="fas fa-chart-line text-white mr-3"></i><?php echo $total_visitors; ?></h6>
		  					</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		</div>
	</nav>
<!-- navbar section end -->

<!-- <section id="service-form">
		<div class="row mt-lg-4">
			<div class="col-xl-9 col-lg-8 ml-auto">
				<div class="container p-3 my-3"> -->
	<section id="client">
		<div class="row mt-lg-5">
			<div class="col-xl-10 col-lg-9 ml-auto">
				<form method="post" action = "service-add.php" enctype="multipart/form-data" style="width: 400px;border: 1px solid #138496;box-shadow: 2px 5px 10px #111;background:#daeaf6" class="mx-auto p-5 mt-5">
						<h3 class ="text-center mb-5 font-rb">Add New Services</h3>
						<div class="form-group">
							<label for="service" class="font-size-16 font-rb">Add Image:</label>
							<input type="file" name="image" id="image"><br><br>
						</div>
						<div class="form-group">
							<label for="service" class="font-size-16 font-rb">Add Services:</label>
							<textarea name="name" id="name" cols="30" rows="3" class="form-control"></textarea><br>
						</div>
						
						<input type="submit" class="ml-5 btn btn-info font-size-16 font-rb mr-3" value="Add Services">
						<a href="service-list.php" class="btn btn-info">Back</a>
					</form>
				<!-- </div>
			</div>
		</div>
	</section> -->
	

<!-- service-new section start -->
	<!-- <div class="row mt-lg-4">
		<div class="col-xl-9 col-lg-8 col-sm-12 ml-auto">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8 col-sm-12 ml-1 mt-3">
						<div style="width: 400px;margin-left: 102%;margin-top: 26%;background:#daeaf6;border: 1px solid #138496;box-shadow: 2px 5px 10px #111;">

							<h2 class ="header text-center text-white py-3" style="background-color: #138496;">Add New Services</h2>
							<div class="container py-5 pl-5">
								<form method="post" action = "service-add.php" enctype="multipart/form-data" style="width: 300px;">
									<label for="service">Add Services:</label>
									<textarea name="name" id="name" cols="30" rows="3" class="form-control"></textarea><br>
									<label for="service">Add Photo:</label>
									<input type="file" name="image" id="image"><br><br>
									
									<input type="submit" class="btn btn-info font-size-16 font-rb mr-3" value="Add Services">
									<a href="service-list.php" class="btn btn-info">Back</a>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
			
		</div>
	</div> -->
<!-- service-new section end	 -->



	<script src="../library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="../library/bootstrap/popper.min.js"></script>
	<script src="../library/bootstrap/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>