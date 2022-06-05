<?php 
	include_once "config/db-connect.php";
	include_once "counter.php";
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

	<!-- <h2 class ="header text-center">Add New Client</h2>
	<div class="container">
		<form action="client-new.php" method="post" enctype="multipart/form-data"style="width: 500px;" class="mx-auto">
			<label for = "cname" class="text-dark font-size-16 font-rb">Choose Images:</label><br>
			<input type="file" name="images[]" multiple/> -->
 			<!-- <select name="category" id="categories" class="form-control">
	 			<option value="1">Add 1 image</option>
	 			<option value="2">Add 2 image</option>
	 			<option value="3">Add 3 image</option>
				<option value="4">Add 4 image</option>
				<option value="5">Add 5 image</option>
			</select><br> -->
		<!-- </form> -->

<!-- navbar section start-->
	<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">

	  	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#myNavbar">
	    <span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="myNavbar">
		  	<div class="container-fluid">
		  		<div class="row">
		  			<div class="col-xl-2 col-lg-3 sidebar fixed-top">
		  				<a class="navbar-brand  d-block text-center" href="index.php"><img src="../images/87x87 - png - logo.png"></a>
		  				<a class="navbar-brand text-white mb-4 border-bottom d-block text-center" href="#">Admin Pannel</a>
		  				<div class="admin-info border-bottom d-block">
		  					<!-- <a class="navbar-brand text-white mb-4 border-bottom d-block text-center" href="#">HSP Digital Marketing Agency</a> -->

		  					<ul class="navbar-nav flex-column">
		  						<li class="nav-item my-2">
		  							<a href="client-list.php" class="nav-link text-white text-center current">သုံးစွဲသူများ</a>
		  						</li>
		  						<li class="nav-item my-2">
		  							<a href="service-list.php" class="nav-link text-white text-center sidebar-link">ဝန်ဆောင်မှုများ</a>
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
		  					<div class="col-lg-2 mt-2">
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

<!-- client-new section start -->
	<section id="client">
		<div class="row mt-lg-5">
			<div class="col-xl-10 col-lg-9 ml-auto">
				<form method="post" action = "client-add.php" enctype="multipart/form-data" style="width: 400px;border: 1px solid #138496;box-shadow: 2px 5px 10px #111;background:#daeaf6" class="mx-auto p-5 mt-4">
					<h3 class="text-center mb-5 font-rb">Add New Clients</h3>
					<div class="form-group">
						<label for = "cname" class ="text-dark font-size-16 font-rb">Client Name:</label>
						<input type="text" name="cname" id="cname" class="form-control"><br>
					</div>
					<div class="form-group">
						<label for = "cname" class="text-dark font-size-16 font-rb">Choose Cover Image:</label>
						<input type="file" name="cimage" id="cimage"><br><br>
					</div>
					<div class="form-group">
						<label for = "cname" class="text-dark font-size-16 font-rb">Choose Gallery Images:</label>
						<input type="file" name="images[]" multiple/>
					</div>
						
					<input type="submit" name="submit" class="ml-5 btn btn-info mt-3 font-size-16 font-rb mr-3" value="Add Client">
					<a href="client-list.php" class="btn btn-info mt-3">Back</a>
				</form>
			</div>
		</div>
	</section>
<!-- client-new section end -->




	<script src="../library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="../library/bootstrap/popper.min.js"></script>
	<script src="../library/bootstrap/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>