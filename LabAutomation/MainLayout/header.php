<?php include '../config/connection.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>	Lab Automation : Index page</title>

		<!-- Loading third party fonts -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/spur1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
		<!-- Loading main css file -->
		<link rel="stylesheet" href="assets/dist/css/styles1.css">



		<!-- font awsm cdn -->
		

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content">
			<header class="site-header collapsed-nav" data-bg-image="">
				<div class="container">
					<div class="header-bar">
						<a href="header.php" class="branding">
						<img src="assets/images/srslogo.png" style=" width: 80px; height: 80px ;" alt="" class="logo">
							<div class="logo-type">
								<h1 class="site-title">Electrical Laboratory</h1>
								<small class="site-description"></small>
							</div>
						</a>

						<nav class="main-navigation">
							<button class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
							<li class="home menu-item current-menu-item"><a href="header.php"><img src="assets/images/hom2.png" style=" width: 50px; height: 50px ;" alt="Home"></a></li>
								<li class="menu-item"><a href="about.php">About</a></li>
								<li class="menu-item"><a href="products.php">Our products</a></li>
								<li class="menu-item"><a href="contact.php">Contact</a></li>
								<li class="menu-item"><a href="login.php">Login</a></li>
							</ul>
						</nav>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</header>

			<div class="hero">
				<ul class="slides">
					<li data-bg-image="assets/images/bg6.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Welcome to SRS Electrical</h2>
								<p>SRS Electrical Engineering Services, provides comprehensive engineering and management services for a variety of clients.</p>
								<a href="#" class="button">See details</a>
							</div>
						</div>
					</li>
					<li data-bg-image="assets/images/bg5.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Our technicians are also experienced in and can conduct high voltage surveys!</h2>
								
								<a href="#" class="button">See details</a>
							</div>
						</div>
					</li>
					<li data-bg-image="assets/images/bg4.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Control & Automation</h2>
								<p>SRS Electrical are  provide a large range of products including new and reusable switchgear, cable and lighting products</p>
								<a href="#" class="button">See details</a>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<main class="main-content">
		

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
					<?php
					
					$query = "select * from products";
					$res = mysqli_query($con,$query);
					
					
					
					
					
					?>
						<h2 class="section-title">Testing Products</h2>
						<div class="row">
						<?php while ($data = mysqli_fetch_assoc($res)) { echo " <div class='col-md-4'>";?>
					
								<div class="post">
									<figure class="featured-image"><img src="<?= $data['Image']?>" alt="" style = "width:300px;height:200px;"></figure>
									<h2 class="entry-title"><a href=""><?= $data['ProductName']?></a></h2>
									<small class="date"></small>
									<p><?= $data['Description']?></p>
								</div>
						
						<?php echo "</div>" ;} ?>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<h2 class="section-title">Our mission and vision</h2>
								<p > Our vision is to be a highly successful consulting company in electric energy sector and to provide wide range of services in the field of power generation, transmission and distribution, electricity market and power quality. <br> 
								<br>
								<br>
           Our mission is to deeply recognize the needs of our Clients who are constantly searching for the latest technologies and new ways of thinking to make the best project decisions. We continuously develop our knowledge and expertise and apply them in helping our Clients in their business activities. With wide experience, we also develop new, efficient software tools that enable our Clients to strengthen their business opportunities.</p>
							</div>
							
							
						</div>
					</div>
				</div>

				<div class="fullwidth-block cta" data-bg-image="assets/images/bgcar.jpg">
					<div class="container">
						<h2 class="cta-title">  Problem Solving Dealing !</h2>
						<p>Want to discuss your electrical needs in any Electrical services ,  or request an obligation free Call SRS Electrical Team on 0409 109 131</p>
						<a href="#" class="button">See details</a>
					</div>
				</div>

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h2>Join our newsletter</h2>
							<form action="login.php">
								<input type="text" placeholder="Enter your email">
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget">Our address</h3>
								<strong>SRS Electrical Automation</strong>
								<address>DHA Phase 6, Karachi</address>
								<a href="tel:+92 800 931 812">+92 800 931 812</a> <br>
								<a href="mailto:office@electricalautomated.com">office@electricalautomated.com</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget">Hours</h3>
								<ul class="arrow-list">
									<li><a href="#">Monday-Friday</a></li> 
									<li><a href="#">7am - 5pm</a></li>
									<li><a href="#">After hours service for emergencies only.</a></li> 
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget">GUARANTEE</h3>
								<ul class="arrow-list">
									<li><a href="#">We guarantee you will be happy with the professional and efficient service you receive from SRS Electrical Team.</a></li> 
									
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget">Social media</h3>							
								<div class="social-links">
									<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#"><i class="fa-brands fa-twitter"></i></a>
									<a href="#"><i class="fa-brands fa-google-plus"></i></a>
									<a href="#"><i class="fa-brands fa-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div> <!-- .row -->
			</footer>
		</div>

		<script src="assets/js/jquery-1.11.1.min.js"></script>
		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/app.js"></script>
		
	</body>

</html>