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
<body style="background-color: #eee;">

	<?php
	include_once "config/db-connect.php";

	$sql = "SELECT * FROM services ORDER BY created_date DESC";

	// execute();
	// $row = fetchcolumn();
	// $row;

	$result = mysqli_query($conn,$sql);

	$services = mysqli_fetch_all($result,MYSQLI_ASSOC);
	
	mysqli_free_result($result);
	mysqli_close($conn);
 ?>

<!-- navbar section  start-->
	<!-- <nav class="navbar navbar-expand-lg navbar-light navbar-fixed bg-light" id="navbar">
		<a class="navbar-brand ml-5" href="client-list.php"><img src="../images/87x87 - png - logo.png"></a>
		<a class="btn btn-info btn-small text-white ml-auto" href="client-new.php">Add New Client</a>
	</nav> -->
<!-- navbar section end -->

<!-- menu section start -->
	<!-- <ul class="menu sticky-top">
		<li><a href="client-list.php" >သုံးစွဲသူများ</a></li>
		<li><a href="service-list.php" >ဝန်ဆောင်မှုများ</a></li>
		<li><a href="counter.php" >visitor count</a></li>
		<li><a href="report.php" >Monthly Clients</a></li>
		<li><a href="logout.php" ><i class="fas fa-sign-out-alt mr-2"></i>Logout</a></li>
	</ul> -->
<!-- menu section end -->

<!-- sec-navbar section  start-->
	<!-- <nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-fixed navbg" id="navbar">
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse ml-5" id="navigation">
			<ul class="navbar-nav nav-pills">
				<li class="nav-item pr-4 mb-4 mt-3">
					<a href="client-list.php">သုံးစွဲသူများ</a></li>
				</li>

        		<li class="nav-item pr-4 mb-4 mt-3">
		        	<a href="service-list.php">ဝန်ဆောင်မှုများ</a>
		      	</li>

		      <li class="nav-item pr-4 mb-4 mt-3">
		        <a href="counter.php" >visitor count</a>
		      </li>
		      <li class="nav-item pr-4 mb-4 mt-3">
		        <a href="report.php">Monthly Clients</a>
		      </li>
		      <li class="nav-item pr-4 mb-4 mt-3">
		       <a href="logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
		      </li>
		    </ul>
		</div>
	</nav> -->
<!-- sec-navbar section end -->


<!-- navbar section -->
	<!-- <nav class="navbar navbar-expand-lg navbar-light">
	  	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#myNavbar">
	    <span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="myNavbar">
		  	<div class="container-fluid">
		  		<div class="row">
		  			<div class="col-xl-2 col-lg-3 sidebar fixed-top">
		  				<div class="admin-info border-bottom py-3 mt-5">
		  					<ul class="navbar-nav flex-column">
		  						<li class="nav-item my-2">
		  							<a href="client-list.php" class="nav-link text-white">သုံးစွဲသူများ</a>
		  						</li>
		  						<li class="nav-item my-2">
		  							<a href="service-list.php" class="nav-link text-white sidebar-link current">ဝန်ဆောင်မှုများ</a>
		  						</li>
		  						<li class="nav-item my-2">
		  							<a href="report.php" class="nav-link text-white sidebar-link">Monthly Clients</a>
		  						</li>
		  						<li class="nav-item my-2">
		  							<a href="logout.php" class="nav-link text-white sidebar-link"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
		  						</li>
		  					</ul>
		  				</div>
		  			</div>
		  			<div class="col-xl-10 col-lg-9 bg-light fixed-top ml-auto top-navbar">
		  				<div class="row">
		  					<div class="col-md-9">
		  						<a class="navbar-brand ml-5" href="client-list.php"><img src="../images/87x87 - png - logo.png"></a>
		  					</div>
		  					<div class="col-md-3 mt-4">
								<a class="btn btn-info btn-small text-white ml-auto" href="client-new.php">Add New Services</a>
		  					</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		</div>
	</nav> -->
<!-- navbar section end -->

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

<!-- service section start-->
	<section id="service">
		<div class="row mt-lg-4">
			<div class="col-xl-10 col-lg-9 ml-auto">
				<div class="container-fluid p-3 my-5">
					<div class="row">
						<div class="col-md-9">
							<h3 class="text-center my-5 client">ဝန်ဆောင်မှုများ</h3>
						</div>
						<div class="col-md-3 mt-5">
							<a class="btn btn-info btn-small text-white" href="service-new.php">Add New Service</a>
						</div>
					</div>
					<div class="row mt-3 ml-4">
						<?php 
						foreach ($services as $service) { ?>
						<div class="col-lg-4 col-md-6 mb-3">
							<div class="card" style="width: 15rem;height: 18rem;">
								<div class="card-header">
									<img src="../images/<?php echo $service['image'];?>" class="card-img-top rounded-circle ml-5" style="width:80px;height: 80px;">	
								</div>	
								<div class="card-body">	
									<p class="card-text text-center font-rb font-size-16"><?php echo $service['name'];?>
										[<a href="service-del.php?id=<?php echo $service['id'] ?>" class="del">Delete</a>]
										[<a href="service-edit.php?id=<?php echo $service['id']; ?>">Edit</a>]
									</p>
								</div>	
							</div>
						</div>		
						<?php } ?>
						
					</div>
				</div>
			</div>
		</div>	
	</section>
<!-- service section end -->

	<!-- <section id="service">
		<div class="row mt-lg-4">
			<div class="col-xl-9 col-lg-8 ml-auto">
				<div class="container-fluid p-3 my-5">
					<div class="row">
						<div class="col-md-9">
							<h3 class="text-center my-5 client">ဝန်ဆောင်မှုများ</h3>
						</div>
						<div class="col-md-3 mt-5">
							<a class="btn btn-info btn-small text-white" href="service-new.php">Add New Service</a>
						</div>
					</div>
				
					<div class="container mb-5">
						<div class="row mt-3">
							<div class="col-lg-4">
								<img src="../images/services.jpg" alt="" class="img-fluid mt-3">
							</div>
							
							<div class="col-lg-8 mt-3">
								<?php 
								foreach ($services as $service) { ?>
									<ul>
										<p class="font-rb font-size-16"><i class="fas fa-cog size-1x" style="color: #12abeb;"></i>
										<?php echo $service['name']; ?>
										
										[<a href="service-del.php?id=<?php echo $service['id'] ?>" class="del">Delete</a>]
										[<a href="service-edit.php?id=<?php echo $service['id']; ?>">Edit</a>]
										</p>
									</ul>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->


<!-- footer section start -->
	<div class="row mt-lg-5">
		<div class="col-xl-9 col-lg-8 ml-auto">
			<footer class="text-muted mt-5 text-center">
				copyright &copy; <?php echo date("Y"); ?> HSP Digital Marketing Agency Co., ltd. All right reserved.		
			</footer>
		</div>
	</div>
<!-- footer section end -->



	<script src="../library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="../library/bootstrap/popper.min.js"></script>
	<script src="../library/bootstrap/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>