<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>HSP Digital Marketing Agency</title>
	<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="library/fontawesome/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="images/16x16 px - png-logo.png">
</head>
<body>

	<?php 
		include_once "config/db-connect.php";

	$sql = "SELECT * FROM services ORDER BY created_date DESC";

	$result = mysqli_query($conn,$sql);

	$services = mysqli_fetch_all($result,MYSQLI_ASSOC);
	// print_r($book);
	mysqli_free_result($result);

	mysqli_close($conn);
	 ?>

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
		      <li class="nav-item pr-4 mb-2 active">
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

<!-- service section start-->
	<section id="service">
		<div class="container">
			<!-- <div class="row mb-5"> -->
				<!-- <div class="col-md-2"></div>
				<div class="col-md-8"> -->
					<h4 class="text-center my-5">ဝန်ဆောင်မှုများ</h4>
					<div class="row mt-5">
					<?php 
					foreach ($services as $service) { ?>
						<div class="col-lg-3 col-md-6 mb-3">
							<div class="card m-auto" style="width: 15rem;height: 18rem;">
								<div class="card-header">
									<img src="images/<?php echo $service['image'];?>" class="card-img-top rounded-circle ml-5" style="width:80px;height: 80px;">	
								</div>	
								<div class="card-body">	
									<p class="card-text text-center font-rb font-size-16"><?php echo $service['name'];?>
									</p>
								</div>	
							</div>
						</div>		
				<?php } ?>
			</div>
		</div>
	</section>
<!-- service section end -->

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


	<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="library/bootstrap/popper.min.js"></script>
	<script src="library/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>