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

	$sql = "SELECT * FROM clients ORDER BY created_date DESC LIMIT 4";

	$result = mysqli_query($conn,$sql);

	$clients = mysqli_fetch_all($result,MYSQLI_ASSOC);

	$sql = "SELECT * FROM services ORDER BY created_date DESC LIMIT 3";

	$result = mysqli_query($conn,$sql);

	$services = mysqli_fetch_all($result,MYSQLI_ASSOC);
	// print_r($book);

	// adding new Visitor
	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	// TESTING PURPOST
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
		        	<a class="nav-link" href="#client"><i class="fas fa-user-friends mr-2"></i>သုံးစွဲသူများ</a>
		      	</li>

		      <li class="nav-item pr-4 mb-2">
		        <a class="nav-link" href="#aboutus"><i class="fas fa-user mr-2"></i>ကျွန်ုပ်တို့အကြောင်း</a>
		      </li>
		      <li class="nav-item pr-4 mb-2">
		        <a class="nav-link" href="#service"><i class="fas fa-cog mr-2"></i>ဝန်ဆောင်မှုများ</a>
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

<!-- banner section start-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		    <div class="carousel-item active">
		      <!-- <img src="images/HSP-carousel1.png" class="d-block w-100 img-fluid" alt="..."> -->
		      <img src="images/486x60-Full Banner-1.jpg" class="d-block w-100 img-fluid" alt="...">
		    </div>
		    <div class="carousel-item">
		      <!-- <img src="images/HSP-carousel2.png" class="d-block w-100 img-fluid" alt="..."> -->
		      <img src="images/486x60-Full Banner.jpg" class="d-block w-100 img-fluid" alt="...">
		    </div>
		    <div class="carousel-item">
		      <!-- <img src="images/HSP-carousel3.png" class="d-block w-100 img-fluid" alt="..."> -->
		      <img src="images/486x60-Full Banner-Confirm.jpg" class="d-block w-100 img-fluid" alt="...">
		    </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>
<!-- banner section end -->

<!-- client section start -->
	<section id="client" class="mt-5">
		<div class="container py-3 shadow-lg p-3 mb-5 rounded">
			<h4 class="text-center my-3">သုံးစွဲသူများ</h4>
			<div class="row">
				<?php
				foreach ($clients as $client){?>
				<div class="col-md-3 mt-3">
					<div class="client-top">
						<a href="gallery.php?id=<?php echo $client['cid']; ?>">
						<!-- <img src="images/Post-1-International Coffee Day.jpg" class="img-fluid" alt=""> -->
						<img src="images/<?php echo $client['cimage']; ?>" class="img-fluid" alt="">
						</a>
					</div>
					<div class="client-bottom mt-3 text-center">
						<!-- <h3 class="mt-4 font-size-16 font-rb">Coffee kh</h3> -->
						<h3 class="mt-4 font-size-16 font-rb"><?php echo $client['cname']; ?></h3>
					</div>
				</div>
				<!-- <div class="col-md-3 mt-3">
					<div class="client-top">
						<a href="herbal.php">
							<a href="herbal.php">
							<img src="images/HP (2).jpg" class="img-fluid" alt="">
							</a>
						</a>
					</div>
					<div class="client-bottom mt-3 text-center">
						<h3 class="mt-4 font-size-16 font-rb">Herbal Paradise</h3>
					</div>
				</div>
				<div class="col-md-3 mt-3">
					<div class="client-top">
						<a href="mingalarBarPyay.php">
							<img src="images/cover.png" class="img-fluid" alt="">
						</a>
					</div>
					<div class="client-bottom mt-3 text-center">
						<h3 class="mt-4 font-size-16 font-rb">Mingalarbar Pyay</h3>
					</div>
				</div>
				<div class="col-md-3 mt-3">
					<div class="client-top">
						<a href="power_mobile.php">
						<img src="images/Post 1 - Welcome Post.jpg" class="img-fluid" alt="">
						</a>
					</div>
					<div class="client-bottom mt-3 text-center">
						<h3 class="mt-4 font-size-16 font-rb">Power Mobile</h3>
					</div>
				</div> -->
				<?php }?>
				<div class="pagination">
					<a href="client.php" class="next round">&#8250;</a>
				</div>

			</div>
		</div>
	</section>
<!-- client section end -->

<!-- about section start -->
	<section id="aboutus">
		<div class="about">
			<div class="container py-5">
	        	<h4 class="text-center">ကျွန်ုပ်တို့အကြောင်း</h4>
				<div class="row mt-3 ">
					<div class="col-lg-8">
						<h4 class="py-3 font-rb">Facebook Marketing</h4>
						<p class="font-rb ab">ကျွန်မတို့၏ ဆန်းသစ်သော Ideaများ၊ Digital Marketing နှင့် ပတ်သက်၍ ရရှိထားသော အတွေ့အကြုံများဖြင့် လူကြီးမင်းတို့၏ Product တွေ၊ Brand တွေကို Customerများ ဝယ်ယူအသုံး ပြုလာရန် ဖန်တီးပေးပြီး ပုံမှန် Facebook Follower များမှတစ်ဆင့် လူကြီးမင်းတို့၏ Product များကို အမှန်တစ်ကယ်သုံးစွဲသော Customer များဖြစ်လာစေရန် ကူညီဆောင်ရွက်ပေးနေပါသည်။...<a href="aboutus.php">see more</a></p>
					</div>
					<div class="col-lg-4">
						<img src="images/Post-49.jpg" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- about section end -->

<!-- our service section start-->
	<section id="service">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h4 class="text-center my-5">ဝန်ဆောင်မှုများ</h4>
					<div class="row mt-5">
					<?php 
					foreach ($services as $service) { ?>
						<div class="col-lg-4 col-md-6 mb-3">
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
			<div class="col-md-2"></div>
			<a href="service.php" class="mt-3 mx-auto btn btn-outline-info ">ပိုမိုသိရှိရန်</a>
			</div>
		</div>
	</section>	

			<!-- <div class="row mt-3">
				<div class="col-md-6 col-lg-4">
					<img src="images/services.jpg" alt="" class="img-fluid mt-3 ml-1">
				</div>
				<div class="col-md-6 col-lg-8 mt-5">
					<ul>
						<p class="font-rb font-size-16"><i class="fas fa-cog size-1x" style="color: #12abeb;"></i>
						လူကြီးမင်းတို့၏ကုန်ပစ္စည်းများခင်းကျင်းပြသပေးခြင်း</p>
						<p class="font-rb font-size-16"><i class="fas fa-cog" style="color: #12abeb;"></i>
						သုံးရလွယ်ကူစေရန်ကုန်ပစ္စည်းများကိုဘယ်/ညာ‌ရွှေ့၍ရွေးချယ်နိုင်ခြင်း</p>
						<p class="font-rb font-size-16"><i class="fas fa-cog" style="color: #12abeb;"></i>
						လူကြီးမင်းတို့၏Customerများ သိလိုသမျှကို ၂၄နာရီလုံးလုံး Auto Reply Message စနစ်ဖြင့်ထားရှိပေးခြင်း</p>
						<p class="font-rb font-size-16"><i class="fas fa-cog" style="color: #12abeb;"></i>
						Content Calender များ ရေးဆွဲခြင်း</p>
						<p class="font-rb font-size-16"><i class="fas fa-cog" style="color: #12abeb;"></i>
						Creative Designs များ ရေးဆွဲခြင်း</p>
						<p class="font-rb font-size-16"><i class="fas fa-cog" style="color: #12abeb;"></i>
						Facebook Ads များ ‌ရွေးချယ်ခြင်း</p>
						<a href="service.php" class="mt-3 ml-5 btn text-white">ပိုမိုသိရှိရန်</a>
					</ul>
				</div>
			</div> -->
		
<!-- our service section end -->



<!-- blog section start -->
	<section id="blogvd">
		<div class="container py-5">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<h5 class="my-5 ml-5">သင့်လုပ်ငန်းတွေအောင်မြင်ဖို့ HSP နဲ့ချိတ်ဆက်စို့....
					<!-- <a href="blog.php" class="font-size-16 font-rb">see more</a> -->
					</h5>
				</div>	
				<div class="col-md-12 col-lg-6">
					<video width="350" height="200" controls>
			  			<source src="images/COVER-HSP.mp4" type="video/mp4">
					</video>	
				</div>
<!-- blog section end -->
<!-- counter section -->
				<!-- <div class="col-md-12 col-lg-3 mt-3">
					<div class="card card-common">
						<div class="card-body">
							<div class="d-flex justify-content-between">
								<i class="fas fa-chart-line text-danger fa-3x"></i>
								<div class="text-secondary text-right">
									<h5>Visitors</h5>
									<h6><?php echo $total_visitors; ?></h6>
								</div>
							</div>
						</div>
						<div class="card-footer text-secondary">
							<i class="fas fa-sync mr-3"></i>
							<span>Update Now</span>
						</div>
					</div>
				</div> -->
<!-- counter section end -->
</div>
</div>
</section>
	
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