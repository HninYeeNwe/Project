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
	$res = explode(" ",$res);
	$count = count($res)-1;
}?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HSP Digital Marketing Agency</title>
	<link rel="stylesheet" href="library/fontawesome/fontawesome-all.min.css">
	<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shorcut icon" href="images/48x48 px - png-logo.png">
</head>
<body>

<!-- navbar section  start-->
	<nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-fixed bg-light" id="navbar">
		<a class="navbar-brand ml-5" href="index.php"><img src="images/87x87 - png - logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse ml-5" id="navigation">
			<ul class="navbar-nav nav-pills">
				<li class="nav-item pr-4 mb-2">
					<a href="index.php" class="nav-link"><i class="fas fa-home mr-2"></i>ပင်မစာမျက်နှာ</a>
				</li>

		      <li class="nav-item pr-4 mb-2">
		        	<a class="nav-link" href="client.php"><i class="fas fa-user-friends mr-2"></i>သုံးစွဲသူများ</a>
		      	</li>

		      <li class="nav-item pr-4 mb-2">
		        <a class="nav-link" href="aboutus.php"><i class="fas fa-user mr-2"></i>ကျွန်ုပ်တို့အကြောင်း</a>
		      </li>
		      <li class="nav-item pr-4 mb-2">
		        <a class="nav-link" href="service.php"><i class="fas fa-cog mr-2"></i>ဝန်ဆောင်မှုများ</a>
		      </li>
		      <li class="nav-item pr-4 mb-2">
		        <a class="nav-link" href="#contact"><i class="fas fa-phone mr-2"></i>ဆက်သွယ်ရန်</a>
		      </li>
		      <li class="nav-item pr-4 mb-2">
		        <a class="nav-link" href="blog.php"><i class="fas fa-th mr-2"></i>ဘလော့ခ်</a>
		      </li>
		    </ul>
		</div>
	</nav>
<!-- navbar section end -->

<!-- gallery section start -->
	<section id="coffee-kh">
		<div class="container-fluid">
			<div class="row my-5">
				<div class="col-md-12">
					<div class="container p-3 my-5 borderimg rounded">
						<h4 class="mt-3 font-rb text-center"><?php echo $data['cname'];?></h4>
					</div>
				</div>
			</div>
			<!-- <div class="row my-5"> -->
				<!-- <div class="col-md-3 mt-5"> -->
					<?php for ($i=0; $i < $count; ++$i) { ?>
					<img src="images/<?php echo $res[$i]; ?>" height="200px" width="200px" class="ml-5 mb-5 img-fluid">
					<?php } ?>
				<!-- </div> -->
			<!-- </div> -->
		</div>
	</section>
<!-- gallery section end -->

<!-- contact section start-->
	<section id="contact">
		<div class="container mb-2">
			<div class="row">
				<div class="col-md-12 col-lg-6 col-sm-12">
					<h4 class="text-center mt-4">တည်နေရာ:</h4><br>
					<iframe class="ml-5 mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776.4621966892305!2d95.2299553148973!3d18.82210598723403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMTjCsDQ5JzE5LjYiTiA5NcKwMTMnNTUuNyJF!5e0!3m2!1sen!2smm!4v1606903522528!5m2!1sen!2smm" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="col-md-12 col-lg-6 col-sm-12">
					<h4 class="text-center mt-4">ဆက်သွယ်ရန်အချက်အလက်:</h4>
					<p class="font-rb font-size-16 mt-5"><i class="fas fa-phone-alt mr-2"></i>09 893 199994</p>

					<p class="font-rb font-size-16">
						<!-- <a href="hsp.marketingagency@gmail.com" class="text-dark"> -->
							<a href="mailto:hsp.marketingagency@gmail.com" target="_blank" class="text-dark">
								<i class="far fa-envelope mr-2 "></i>hsp.marketingagency@gmail.com
							</a>
						<!-- </a> -->
					</p>

					<p class="font-rb font-size-16"><a href="https://web.facebook.com/hspdigitalmarketingagency" target="_blank" class="text-dark"><i class="fab fa-facebook-square mr-2"></i>HSP Digital Marketing Agency</a></p>

					<p class="font-rb font-size-16"><i class="fas fa-home mr-2"></i>No. 157,Bogyoke Road,Ywar Bae` East Ward,
					Near CB Bank (2), Pyay,Bago Region,Myanmar,18156</p>
				</div>
				<!-- <div class="col-lg-4 mt-3 my-2">
					<h4 class="text-center mt-3">ဆက်သွယ်ရန်ပုံစံ:</h4>
					<form class="mt-4">
						<input type="text" class="form-control " placeholder="အမည်">
						<input type="email" class="form-control mt-3" placeholder="အီးမေးလ်">
						<textarea cols="30" rows="3" class="form-control my-3" placeholder="မက်ဆေ့ချ်"></textarea>
						<button class="btn btn-block" type="submit">ဆက်သွယ်ပါ</button>
					</form>
				</div> -->
			</div>
		</div>
		<footer class="text-muted mt-5 text-center">
				copyright &copy; <?php echo date("Y"); ?> HSP Digital Marketing Agency Co., ltd. All right reserved.		
		</footer>
	</section>
<!-- contact section end -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/ulg/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>		
</body>
</html>