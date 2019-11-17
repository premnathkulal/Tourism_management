<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelix</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style type="text/css">
            h1 { font-size: 24px; }
            h2 { font-size: 18px; }
            #sidebar { float: right; width: 30%; }
            #main { padding-right: 15px; }
			.infoWindow { width: 220px; color:black;}
			input[type=text] {
				width: 300px;
				box-sizing: border-box;
				border: 2px solid green;
				border-radius: 4px;
				font-size: 16px;
				color:white;
				background-color: black;
				background-image: url('images/search.png');
				background-position: 200px 200px; 
				background-repeat: no-repeat;
				padding: 12px 20px 12px 40px;
				-webkit-transition: width 0.4s ease-in-out;
				transition: width 0.4s ease-in-out;
			}

			input[type=text]:focus {
				width: 100%;
			}

	
			img { 
				max-width: 100%; 
			}
			#map_canvas img { 
				max-width: none; 
			}
			html, body, #map_canvas {
				height: 100%;
				margin: 0px;
				padding: 0px;
			}

        </style>
</head>

<body onload="init();">
	<?php 
			require 'init.php';
			session_start(); 
	?>
<div class="super_container">
	
	<!-- Header -->

	<header class="header">


		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="index.php"><img src="images/logo.png" alt="logo">K_Tourist</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="#">home</a></li>
								<li class="main_nav_item"><a href="#place_serch_div">Search place</a></li>
								<?php if( $_SESSION['isLogged'] == false){ ?>
									<li class="main_nav_item"><a href="busTicket-master/login.php">Login</a></li>
								<?php }else{?>
									<li class="main_nav_item"><a href="busTicket-master">Book Bus Ticket</a></li>	
									<li class="main_nav_item"><a href="busTicket-master/profile.php">Profile</a></li>
									<li class="main_nav_item"><a href="busTicket-master/logout.php">Logout</a></li>
								<?php } ?>
							</ul>
						</div>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/hampi.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1></h1>
							<h1>Namma Karunadu</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div>
								<?php if($_SESSION['login'] == "N"){ ?>
									<a href="login.php">Login/Register<span></span><span></span><span></span></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/mysore_palace.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1></h1>
							<h1>Namma Karunadu</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div>
								<?php if($_SESSION['login'] == "N"){ ?>
									<a href="login.php">Login/Register<span></span><span></span><span></span></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/murdeshwara.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1></h1>
							<h1>Namma Karunadu</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div>
								<?php if($_SESSION['login'] == "N"){ ?>
									<a href="login.php">Login/Register<span></span><span></span><span></span></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/shringeri.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1></h1>
							<h1>Namma Karunadu</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div>
								<?php if($_SESSION['login'] == "N"){ ?>
									<a href="login.php">Login/Register<span></span><span></span><span></span></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/muslim.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1></h1>
							<h1>Namma Karunadu</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div>
								<?php if($_SESSION['login'] == "N"){ ?>
									<a href="login.php">Login/Register<span></span><span></span><span></span></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>
		</div>
	</div>

	
	
	<div class="intro" id="place_serch_div">
		<div class="container" style="background-color:#fefbd8; border:1px solid red;">
			<div class="row intro_items">
				<div class="col-lg-12 intro_col">
					<div class="intro_item">
						<div class="intro_item_background" style="background-color:#fefbd8; color:black;">
							<center>
								<form id="my_form" action="php/data_session.php" method="GET">
									<input type="text" id="place_search" name="place_search" placeholder="Search for the place ..."/>
									&nbsp;&nbsp;
									<a href="#map_area" id="place_search_b" style="background-color:green; color:white; padding:16px 20px;">Search using Map</a>
								</form>
								<br><br>
								<div>
									<?php 
										$location = $_SESSION['location_name'];
										if($location == 'n'){ 
									?>
										<table border="0px" >
											<tr>
												<td><img src="images/mysore_palace.jpg" width="200px" height="150px"></td>
												<td><img src="images/hampi.jpg" width="200px" height="150px"></td>
												<td><img src="images/muslim.jpg" width="200px" height="150px"></td>
											</tr>
											<tr>
												<td><img src="images/shringeri.jpg" width="200px" height="150px"></td>
												<td><img src="images/murdeshwara.jpg" width="200px" height="150px"></td>
												<td><img src="images/jog_fals.jpeg" width="200px" height="150px"></td>
											</tr>
										</table>
									<?php }else{ ?>
											<table width="100%" height="100%">
												<tr>
														<?php 
																$query = "select * from locations as l, location_images as li where name LIKE '%$location%' and l.id=li.loc_id";
																$result = mysqli_query($con, $query);
																$no_result = mysqli_num_rows($result);
																$search_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
																if($no_result > 0){
																	?><form action="more_info" method="GET"><?php
																	echo '<td width="40%"><img src="data:image/png;base64,'.base64_encode($search_data[0]['images']).'" class="avatar img-circle img-thumbnail" alt="avatar" style="width:100%; height:300px;"></td>';
																	echo "<td><br><strong><u><center><h1> ".$search_data[0]['name']."</u></strong><h1>";
																	echo "<h4> ".$search_data[0]['details']."<h4><br>";
																	if($_SESSION['isLogged'] == true){
																		echo "<input type=\"submit\" id=\"submit\" name=\"more_info\" value=\"More Info\" style=\"padding: 15px 32px; background-color: #4CAF50; color:white; text-decoration: none; display: inline-block; font-size: 16px; border: none;\"/></center>";
																	}else{
																		echo "<div style=\"padding: 15px 32px; background-color: #4CAF50; color:white; text-decoration: none; display: inline-block; font-size: 16px; border: none;\"/>Login for More info</div></center>";
																	}
																	?></form><?php
																}else{
																	echo "<center><h1>NO RESULTS FOUND !!! </h1></center></td>";
																}
														?>
													</td>
												</tr>
											</table>
									<?php }?>
								</div>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="map_area">
		<center>
		<form action="php/map_session.php" method="GET">
			<input type="text" name="place_search" placeholder="Search for the place ...">
		</form>
		</center>
		<br>
	
        <section id="main">
            <div id="map_canvas" style="width: 100%; height: 500px;"></div>
		</section>
	</div>
		
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 class="intro_title text-center">Most Visited Places</h1>
				</div>
			</div>
			<div class="row intro_items">
					<?php 
						$i = 0;
						$query = "select * from locations as l, location_images as li where l.id = li.loc_id";
						$r = mysqli_query($con, $query);
						$d = mysqli_fetch_all($r, MYSQLI_ASSOC);
						foreach($d as $row){ 
							if($i < 3){
								$i += 1;
					?>											
						<!-- Intro Item -->					
						<div class="col-lg-4 intro_col">
							<div class="intro_item">
								<div class="intro_item_overlay"></div>
								<div class="intro_item_background" style="background-image:url(<?php echo 'data:image/png;base64,'.base64_encode($row['images']) ?>)"></div>
								<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
									<div class="intro_center text-center" style="color:white;">
										<h3><?php echo $row['name']; ?></h3>
									</div>
								</div>
							</div>
						</div>
					<?php	}
					 } ?>
			</div>
		</div>
	</div>

	
	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">prem_s</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
        //<![CDATA[
			var cir_i = 0;
			var map;
 
			// Ban Jelačić Square - City Center
			<?php 
				$lat = 0;
				$lon = 0;
				if($_SESSION['map_place'] == "N"){ ?>
					var center = new google.maps.LatLng(14.1764306,75.0712051);
				<?php }else{ 
					$l = $_SESSION['map_place'];
					$q = "select * from locations  where name LIKE '%$l%'";
					$r = mysqli_query($con, $q);
					$n_r = mysqli_num_rows($r);
					if($n_r > 0){
						$s_d = mysqli_fetch_all($r, MYSQLI_ASSOC);
						$lat = $s_d[0]['lat'];
						$lon = $s_d[0]['lon'];
				?>
					var center = new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $lon; ?>);
				<?php }else{  $_SESSION['map_place'] = "N";?>
						alert(" No such Place Exists in our Tour Plan ");
						var center = new google.maps.LatLng(14.1764306,75.0712051);
					<?php }
				}
			?>
			
			var geocoder = new google.maps.Geocoder();
			var infowindow = new google.maps.InfoWindow();
			
		function init() {

			var myMap;                  // holds the map object
			var centerpoint;            // center point of the map

				var mapOptions = {
				zoom: 10,
				center: center,
				mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				
				map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
				
				makeRequest('get_locations.php', function(data) {
						
					var data = JSON.parse(data.responseText);
					
					for (var i = 0; i < data.length; i++) {
						displayLocation(data[i]);
					}
				});
		}
        function makeRequest(url, callback) {
			var request;
			if (window.XMLHttpRequest) {
				request = new XMLHttpRequest(); // IE7+, Firefox, Chrome, Opera, Safari
			} else {
				request = new ActiveXObject("Microsoft.XMLHTTP"); // IE6, IE5
			}
			request.onreadystatechange = function() {
				if (request.readyState == 4 && request.status == 200) {
					callback(request);
				}
			}
			request.open("GET", url, true);
			request.send();
		}


		function displayLocation(location) {
         
		 var content =   '<div class="infoWindow" onclick="display_info(\''+location.name+'\')"><strong>'  + location.name + '</strong>'
						 + '<br/>'     + location.address + 
						 + '<br/>'     + location.description + '</div>';
		  
		 if (parseInt(location.lat) == 0) {
			 geocoder.geocode( { 'address': location.address }, function(results, status) {
				 if (status == google.maps.GeocoderStatus.OK) {
					  
					 var marker = new google.maps.Marker({
						 map: map, 
						 position: results[0].geometry.location,
						 title: location.name
					 });
				  
					 google.maps.event.addListener(marker, 'click', function() {
						 //alert("HEY");
						 infowindow.setContent(content);
						 infowindow.open(map,marker);
					 });
				 }
			 });

		 } else {
			 var position = new google.maps.LatLng(parseFloat(location.lat), parseFloat(location.lon));

			 if(location.lat == <?php echo $lat; ?> && location.lon == <?php echo $lon; ?> ){
				var marker = new google.maps.Marker({
					map: map, 
					position: position,
					title: location.name
			 	});

				var marker1 = new google.maps.Circle({
							center: position,
							map: map,
							strokeColor: '#000',
							strokeWeight: 2,
							strokeOpacity: 0.5,
							fillColor: '#00010',
							fillOpacity: 0.5,
							radius: 40 * 1000
				});
				cir_i += 1;
			}else{
				var marker = new google.maps.Marker({
					icon: {
						path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
						strokeColor: "red",
						scale: 3
					},
					map: map, 
					position: position,
					title: location.name
			 	});
			}
			
			 google.maps.event.addListener(marker, 'click', function() {
				 //alert("HEY");
				 infowindow.setContent(content);
				 infowindow.open(map,marker);
			 });
		 }

	 }

	 function display_info(param){
		 document.getElementById("place_search").value = param;
		 document.getElementById("my_form").submit();
	 }
	 
</script>
</body>

</html>



