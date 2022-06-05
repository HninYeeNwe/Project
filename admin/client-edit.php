
<?php 
	include_once "config/db-connect.php";

	include_once "counter.php";

	if (isset($_GET['id'])) 
	{
		$id = mysqli_real_escape_string($conn,$_GET['id']);

		$sql = "SELECT * FROM clients WHERE cid=$id";

		$result = mysqli_query($conn,$sql);
		$client=mysqli_fetch_assoc($result);

		$res = $client['images'];
		$res = explode(",",$res);
		$count = count($res)-1;
		// print_r($result);
		mysqli_free_result($result);
		
		mysqli_close($conn);
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
	
<!-- service section start-->
<!-- <div style="width: 800px;margin-left: 30%;margin-top: 6%;background:#daeaf6;border: 1px solid #138496;box-shadow: 2px 5px 10px #111;"> -->
	
	<!-- <div class="container">	 -->
	<section id="client">
		<div class="row mt-lg-5">
			<div class="col-xl-10 col-lg-9 ml-auto">

				<form method="post" action = "client-update.php" enctype="multipart/form-data" style="width: 500px;border: 1px solid #138496;box-shadow: 2px 5px 10px #111;background:#daeaf6" class="mx-auto p-5 mt-4">
					<h2 class="text-center mb-5">Edit Client</h2>
			 		<input type="hidden" name="id" value="<?php echo $client['cid'] ?>">
			 		
			 		<label for = "cname" class="text-dark font-size-16 font-rb">Client Name:</label>
					<input type="text" name="cname" id="cname" class="form-control" value="<?php echo $client['cname']; ?>"><br>	

					<img src="../images/<?php echo $client['cimage'] ?>" height = "150" name = "cimage"><br>
					<label for="cimage" class="text-dark font-size-16 font-rb">Change Image:</label>
					<input type="file" name="cimage" id="cimage"><br><br>


					<?php for ($i=0; $i < $count; ++$i) { ?>
						<img src="../images/<?php echo $res[$i]; ?>" width="200px" height="200px" class="mb-3">
					<?php } ?><br><br>	
					<label for="">Change Photos:</label>
					<input type="file" name="images[]" multiple/><br><br>

					<input type="submit" class = "btn btn-info text-white mr-3" name = "edit" value="Update Client">
					<a href="client-list.php" class="btn btn-info">Back</a>
				</form>
			</div>
		</div>
	</section>
	<!-- </div> -->
<!-- service section end -->


 <script src="../library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="../library/bootstrap/popper.min.js"></script>
	<script src="../library/bootstrap/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>