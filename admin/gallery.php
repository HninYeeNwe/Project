
<?php 
	include_once "config/db-connect.php";
	// $id = "";
	$i = "";
	if (isset($_GET['id'])) 
	{
		$id = mysqli_real_escape_string($conn,$_GET['id']);

	$sql = "SELECT cname,images FROM clients WHERE cid=$id";
	$fire = mysqli_query($conn,$sql);
	$data = mysqli_fetch_array($fire);
	$res = $data['images'];
	$res = explode(",",$res);
	$count = count($res)-1;
}?>
	<!-- <h4 class="mt-3 font-rb mt-5 text-center"><?php echo $data['cname'];?></h4>
	<?php for ($i=0; $i < $count; ++$i) { ?>
		<img src="../images/<?php echo $res[$i]; ?>" height="100px" width="100px">
	<?php  }?> -->

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
<body>
	<div class="continer">
		<form action="gallery.php" method="post" class="my-5">
			<a href="client-list.php" class="btn btn-info">Back</a>
		</form>
	</div>

<!-- gallery section start -->
	<section id="coffee-kh">
		<div class="container">
			<div class="row my-5">
				<div class="col-md-12">
					<div class="container p-3 my-5 borderimg rounded" id="coffee">
						<h4 class="mt-3 font-rb text-center"><?php echo $data['cname'];?></h4>
					</div>
				</div>
			</div>
			<!-- <div class="row my-5"> -->
				<!-- <div class="col-md-3 mt-5"> -->
					<?php for ($i=0; $i < $count; ++$i) { ?>
					<img src="../images/<?php echo $res[$i]; ?>" height="200px" width="200px" class="ml-3 mb-5">
					<?php } ?>
				<!-- </div> -->
			<!-- </div> -->
		</div>
	</section>
<!-- gallery section end -->


	<script src="../library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="../library/bootstrap/popper.min.js"></script>
	<script src="../library/bootstrap/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>