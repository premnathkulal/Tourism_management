	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Portfolio</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			<?php 
				require '../init.php';
				session_start(); 
			?>
			<div class="protfolio-wrap" >

			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light" >
					<div class="container">
						  <a class="navbar-brand" href="../" style="color:white;">
						  	<img src="../images/logo.png" alt=""><strong>&nbsp;&nbsp;K_Tourist</strong>
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="text-white lnr lnr-menu"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="../">Home</a></li>	
								<li><a href="../busTicket-master">Book Bus Ticket</a></li>	
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->	

				<!-- start banner Area -->
				<section class="banner-area relative" id="home" style="background-color: black; color:red;" id="details_sec">	
					<div class="overlay overlay-bg"></div>
					<div class="container">
						<div class="row fullscreen d-flex align-items-center justify-content-center">
							<table width="100%" height="100%" style="color:white;">
								<tr>
										<?php 
												$location = $_SESSION['location_name'];
												$query = "select * from locations as l, location_images as li where name LIKE '%$location%' and l.id=li.loc_id";
												$result = mysqli_query($con, $query);
												$no_result = mysqli_num_rows($result);
												$search_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
												$lat = $search_data[0]['lat'];
												$lon = $search_data[0]['lon'];
												if($no_result > 0){
													?><form action="more_info" method="GET"><?php
													echo '<td width="40%"><img src="data:image/png;base64,'.base64_encode($search_data[0]['images']).'" class="avatar img-circle img-thumbnail" alt="avatar" style="width:100%; height:300px;"></td>';
													echo "<td><strong><u><center><h1> ".$search_data[0]['name']."</u></strong><h1>";
													echo "<h4><br><font color='white'>".$search_data[0]['details']."<h4><br>";
													?></form><?php
												}else{
													echo "<center><h1>NO RESULTS FOUND !!! </h1></center></td>";
												}
										?>
									</td>
								</tr>
							</table>									
						</div>
					</div>
				</section>
				<!-- End banner Area -->	

				
				<!-- Start portfolio-area Area -->	
				<section class="portfolio-area section-gap" id="portfolio">
				  <div class="container">
						<div class="row d-flex justify-content-center">
							<div class="menu-content col-lg-10">
								<div class="title text-center">
									<h1 class="mb-10">This is what we can do for you</h1>
									<p>List of Nearby Places,Restaurants and Accomodation</p>
								</div>
							</div>
						</div>
				    
				    <div class="filters">
				      <ul>
				        <li class="active" id="inti" data-filter=".nearby">Nearby Places</li>
				        <li data-filter=".restaurants">Restaurants</li>
				        <li data-filter=".accomodation">Accomodation</li>
						<li data-filter=".guid">Tour Guid</li>
				      </ul>
				    </div>
				   
				    <div class="filters-content">
				      <div class="row grid">
						<?php
							$query = "SELECT * FROM locations as l, location_images as li  where ( 6371 * acos ( cos ( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians($lon) ) + sin ( radians($lat) ) * sin( radians( lat ) ) ) ) < 40 and l.id=li.loc_id;";
							$result = mysqli_query($con, $query);
							$nearby_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

							$query = "SELECT * FROM restaurants where ( 6371 * acos ( cos ( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians($lon) ) + sin ( radians($lat) ) * sin( radians( lat ) ) ) ) < 40;";
							$result = mysqli_query($con, $query);
							$restaurants_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

							$query = "SELECT * FROM accomodation where ( 6371 * acos ( cos ( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians($lon) ) + sin ( radians($lat) ) * sin( radians( lat ) ) ) ) < 40;";
							$result = mysqli_query($con, $query);
							$accomodation_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

							$query = "SELECT * FROM tour_guid where ( 6371 * acos ( cos ( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians($lon) ) + sin ( radians($lat) ) * sin( radians( lat ) ) ) ) < 40;";
							$result = mysqli_query($con, $query);
							$guid_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
							
						?>
						<?php foreach($nearby_data as $row){ 
							if($row['name'] != $search_data[0]['name']){ ?>
								<div class="single-portfolio col-sm-4 all nearby">
									<div class="item">
									<?php echo '<img src="data:image/png;base64,'.base64_encode($row['images']).'"  alt="avatar" style="height:200px;" />'; ?>
										<div class="p-inner">
											<form action="php/data_session.php" method="GET">
												<h4><?php echo $row['name']; ?></h4>
												<input type="hidden" value="<?php echo $row['name']; ?>" name="place_search" readonly/>
												<br><div class="cat"><input type="submit" value="View" style="width:25%; background-color:green; border:none;"></div>
											</form>
										</div>
									</div>
								</div>
						<?php }
						} ?>	

						<?php foreach($restaurants_data as $row){ ?>
								<div class="single-portfolio col-sm-4 all restaurants">
									<div class="item">
									<?php echo '<img src="data:image/png;base64,'.base64_encode($row['image']).'"  alt="avatar" style="height:200px;" />'; ?>
										<div class="p-inner">
											<form action="php/data_session.php" method="GET">
												<h4><?php echo $row['name']; ?> ( <?php echo $row['type']; ?> ) </h4>
												<br><div class="cat"><?php echo $row['adress']; ?></div>
											</form>
										</div>
									</div>
								</div>
						<?php
						} ?>
						
						<?php foreach($accomodation_data as $row){ ?>
								<div class="single-portfolio col-sm-4 all accomodation">
									<div class="item">
									<?php echo '<img src="data:image/png;base64,'.base64_encode($row['image']).'"  alt="avatar" style="height:200px;" />'; ?>
										<div class="p-inner">
											<form action="../book_accomodation.php" method="GET">
												<h4><?php echo $row['name']; ?> </h4>
												<br>
												<div class="cat">
													<?php echo $row['adress']; ?><br>
													<input type="hidden" name="room_id" value="<?php echo $row['id']; ?>">
													<input type="hidden" name="room_name" value="<?php echo $row['name']; ?>">
													<input type="submit" value="book Now"/>											    </div>
											</form>
										</div>
									</div>
								</div>
						<?php
						} ?>

						<?php foreach($guid_data as $row){ ?>
								<div class="single-portfolio col-sm-4 all guid">
									<div class="item">
									<?php echo '<img src="data:image/png;base64,'.base64_encode($row['image']).'"  alt="avatar" style="height:300px;" />'; ?>
										<div class="p-inner">
											<form action="../book_accomodation.php" method="GET">
												<h4><?php echo $row['name']; ?> </h4>
												<br>
												<div class="cat">
													<?php echo $row['adress']; ?><br>
													<?php echo $row['ph_no']; ?>										    </div>
											</form>
										</div>
									</div>
								</div>
						<?php 
						} ?>

				      </div>
				    </div>
				    
				  </div>
				</section>
				<!-- End portfolio-area Area -->	

				<!-- start footer Area -->		
				<footer class="footer-area section-gap">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h6>About Us</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
									</p>
									<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>	
								</div>
							</div>
							<div class="col-lg-5  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h6>Newsletter</h6>
									<p>Stay update with our latest</p>
									<div class="" id="mc_embed_signup">
										<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>

											<div class="info"></div>
										</form>
									</div>
								</div>
							</div>						
							<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
								<div class="single-footer-widget">
									<h6>Follow Us</h6>
									<p>Let us be social</p>
									<div class="footer-social d-flex align-items-center">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-behance"></i></a>
									</div>
								</div>
							</div>							
						</div>
					</div>
				</footer>	
				<!-- End footer Area -->					
			</div>
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>			
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/mail-script.js"></script>
			<script src="js/isotope.pkgd.min.js"></script>	
			<script src="js/main.js"></script>	

			<script type="text/javascript">
				$(function(){
					$('.active').trigger('click');
				});
			</script>

		</body>
	</html>



