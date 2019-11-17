<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>
<?php session_start(); ?>
<div class="super_container">
	
	<!-- Header -->
	<?php
		$room_id = $_GET['room_id'];
		$room_name = $_GET['room_name'];
	?>
	<header class="header" height="80px">
		<!-- Top Bar -->
		<div class="top_bar" style="height:80px;">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
                            <div class="logo_container">
							    <br><div class="logo"><a href="index.php"><img src="images/logo.png" alt="">K_Tourist</a></div>
						    </div>
					</div>
				</div>
			</div>		
		</div>

	</header>

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">ROOM BOOKING</div>
						<form action="" id="contact_form" class="contact_form text-center" method="POST">
							<input type="text" id="email" value="<?php echo $_SESSION['email']; ?>" name="email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required." readonly>
							<br><input type="text" id="name" value="<?php echo $room_name; ?>" class="contact_form_email input_field" required="required" data-error="Email is required." readonly>
							<br><input type="hidden" name="room_id" value="<?php echo $room_id; ?>" class="contact_form_email input_field" required="required" data-error="Email is required." readonly>
							<br><span class="contact_form_email input_field"><br>Check In Time<br></span><input type="date" id="date1" name="date1" class="contact_form_email input_field" placeholder="Check in" required="required" data-error="Check in time is required.">
							<br><span class="contact_form_email input_field"><br>Check Out Time<br></span><input type="date" id="date2" name="date2" class="contact_form_email input_field" placeholder="Check out" required="required" data-error="Check out time is required.">
							<br><button type="submit" name="submit" id="form_submit_button" class="form_submit_button button trans_200">Confirm Booking<span></span><span></span><span></span></button>
                            <br><a href="more_info" class="form_submit_button button trans_200" style="background-color:rgba(0,0,0,0.1);" >Cancel</a>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>

</body>

<?php 
    if(isset($_POST['submit'])){
        require "init.php";
        $email = $_POST['email'];
		$r_id = $_POST['room_id'];
		$c_in = $_POST['date1'];
		$c_out = $_POST['date2'];
		
		$query = "insert into room_book(u_id,r_id,c_in,c_out) values('$email','$r_id', '$c_in', '$c_out')";
        $result = mysqli_query($con, $query);
        if($result){
            ?><script>alert("Sucessfully Booked"); window.location="index.php"</script><?php
        }else{
            ?><script>alert('Error while Booking')</script><?php
        }
    }
?>

</html>