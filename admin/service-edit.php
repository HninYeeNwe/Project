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

<?php 
	include_once "config/db-connect.php";

	if (isset($_GET['id'])) 
	{
		$id = mysqli_real_escape_string($conn,$_GET['id']);

		$sql = "SELECT * FROM services WHERE id=$id";

		$result = mysqli_query($conn,$sql);
		$service=mysqli_fetch_assoc($result);
		
		mysqli_close($conn);
	}

?>	
<!-- service section -->
	
	<!-- <div class="container py-5">	 -->
		<section id="service">
		<div class="row mt-lg-5">
			<div class="col-xl-10 col-lg-9 ml-auto">
		<form method="post" action = "service-update.php" enctype="multipart/form-data" style="width: 500px;border: 1px solid #138496;box-shadow: 2px 5px 10px #111;background:#daeaf6" class=" mx-auto p-5 mt-4">
			<h2 class="text-center mb-5">Edit Services</h2>
	 		<input type="hidden" name="id" value="<?php echo $service['id'] ?>">
	 		
	 		<label for = "name" class="text-dark font-size-16 font-rb">Services:</label>
	 		<textarea name="name" id="name" cols="30" rows="3" class="form-control"><?php echo $service['name']; ?></textarea><br>
	 		<img src="../images/<?php echo $service['image'] ?>" height = "150" name = "image"><br>
			<label for="image" class="text-dark font-size-16 font-rb">Change Image:</label>
			<input type="file" name="image" id="image"><br><br>
	 		<!-- <input type="text" name="name" id="name" class="form-control" value="<?php echo $service['name']; ?>"><br><br> -->
	 		<!-- <select name="id" id="services">
	 			<?php 
	 				$service = mysqli_fetch_assoc($sql);
	 				$sql = mysqli_query($conn, "SELECT * FROM services");

	 				while ($cat = mysqli_fetch_assoc($sql)) 
	 					{?>
	 					
	 					<option value="<?php echo $cat['id'] ?>"
	 						<?php if($cat['id'] == $service['id']) echo "selected" ?> >
	 							<a href="service-edit.php"><?php echo $cat['name'];?> </a>
	 					</option>
	 				<?php } ?>
	 		</select><br><br> -->

	 		<input type="submit" name = "submit" value="Update Services" class="btn btn-info mr-3">
	 		<a href="service-list.php" class="btn btn-info">Back</a>

		</form>
	</div></div></section>
	<!-- </div> -->
<!-- service section end -->

 <script src="../library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="../library/bootstrap/popper.min.js"></script>
	<script src="../library/bootstrap/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>