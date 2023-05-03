<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Side Navbar</title>
	<link rel="stylesheet" href="PartnerDashboard.css">
	<script src="https://kit.fontawesome.com/d1ae8719e0.js" crossorigin="anonymous"></script>
	<script src="PartnerDashboard.js"></script>
	<style>
	      body{
          box-sizing: border-box;
	        font-family: 'Quicksand', sans-serif;
            font-weight: 500;
            font-size: 1rem;
      }
    </style>
</head>
<body>

	<div class="header1">
		<div class="side-nav">
			<h2 class="heading1">SaveSpot</h2>
			<p class="text1">Partner's Portal</p>
			<ul class="nav-links">
				<li><a href="FinalPartnerDashboard.php"><i class="fa-solid fa-user"></i><p>   Profile</p></a></li>
				<li><a href="PartnerQueueManagement.php"><i class="fa-solid fa-list"></i><p>My Line</p></a></li>
				<li><a href="QRCodeGenerationPage.php"><i class="fa-solid fa-qrcode"></i><p>QR Code</p></a></li>
				<li><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i><p>Log Out</p></a></li>
				<div class="active">

				</div>
			</ul>
	</div>

	<div class="side-content">
		<h2 class="heading123">Create Your Company's Profile</h2>


		<form action="FinalPartnerDashboard.php" method= "post" class="form" id="login">
			<h2 class="heading">Create Your Company's Profile</h2>
			

			<h3 class="form__sub__title">Company's Logo</h3>
			<div>
			<input type="file" id="image_input" name="logo" accept="image/png, image/jpg, image/jpeg">
			<div id="display_image"></div>

			</div>

			<h3 class="form__sub__title">Company's Name</h3>
			<div style="margin-top: 20px;" class="form__input-group">
				<input type="text" name="name" class="form__input" autofocus placeholder="Company's Name">
			</div>

			<div class="form__input-group">
			<h3 class="form__sub__title">Company's Phone Number</h3>
				<input type="tel" name="phone" class="form__input" autofocus placeholder="Phone Number">
			</div>

			<div>
				<h3 class="form__sub__title">Operation Hours</h3>
				<p1>Select Days of Operation:</p1>

				<div style="margin-top: 10px;">
					<input id=days name="days[]" type="checkbox" value="Monday"/>Monday
					<input id=days name="days[]" type="checkbox" value="Tuesday"/>Tuesday
					<input id=days name="days[]" type="checkbox" value="Wednesday"/>Wednesday
					<input id=days name="days[]" type="checkbox" value="Thursday"/>Thursday
					<input id=days name="days[]" type="checkbox" value="Friday"/>Friday
					<input id=days name="days[]" type="checkbox" value="Saturday"/>Saturday
					<input id=days name="days[]" type="checkbox" value="Sunday"/>Sunday
				</div>
			</div>

			<div style="margin-top: 10px">
				<p1>Hours of Operation:</p1>
				<div style="margin-top: 10px;">
					<select name="start_time">
						<option value="12:00AM">12:00AM</option>
						<option value="1:00AM">1:00AM</option>
						<option value="2:00AM">2:00AM</option>
						<option value="3:00AM">3:00AM</option>
						<option value="4:00AM">4:00AM</option>
						<option value="5:00AM">5:00AM</option>
						<option value="6:00AM">6:00AM</option>
						<option value="7:00AM">7:00AM</option>
						<option value="8:00AM">8:00AM</option>
						<option value="9:00AM">9:00AM</option>
						<option value="10:00AM">10:00AM</option>
						<option value="11:00AM">11:00AM</option>
						<option value="12:00PM">12:00PM</option>
						<option value="1:00PM">1:00PM</option>
						<option value="2:00PM">2:00PM</option>
						<option value="3:00PM">3:00PM</option>
						<option value="4:00PM">4:00PM</option>
						<option value="5:00PM">5:00PM</option>
						<option value="6:00PM">6:00PM</option>
						<option value="7:00PM">7:00PM</option>
						<option value="8:00PM">8:00PM</option>
						<option value="9:00PM">9:00PM</option>
						<option value="10:00PM">10:00PM</option>
						<option value="11:00PM">11:00PM</option>
					</select>
				to
					<select name="end_time">
						<option value="12:00AM">12:00AM</option>
						<option value="1:00AM">1:00AM</option>
						<option value="2:00AM">2:00AM</option>
						<option value="3:00AM">3:00AM</option>
						<option value="4:00AM">4:00AM</option>
						<option value="5:00AM">5:00AM</option>
						<option value="6:00AM">6:00AM</option>
						<option value="7:00AM">7:00AM</option>
						<option value="8:00AM">8:00AM</option>
						<option value="9:00AM">9:00AM</option>
						<option value="10:00AM">10:00AM</option>
						<option value="11:00AM">11:00AM</option>
						<option value="12:00PM">12:00PM</option>
						<option value="1:00PM">1:00PM</option>
						<option value="2:00PM">2:00PM</option>
						<option value="3:00PM">3:00PM</option>
						<option value="4:00PM">4:00PM</option>
						<option value="5:00PM">5:00PM</option>
						<option value="6:00PM">6:00PM</option>
						<option value="7:00PM">7:00PM</option>
						<option value="8:00PM">8:00PM</option>
						<option value="9:00PM">9:00PM</option>
						<option value="10:00PM">10:00PM</option>
						<option value="11:00PM">11:00PM</option>
					</select>
				</div>
			</div>


			<div style="margin-top: 12px;">
					<button class="form__button" id="submit" name="submitProfile" type="SUBMIT">Submit</button>
			</div>
		</form>
	</div>



	<?php


	function profileSubmit(){
			$servername = "72.167.58.111";
			$username = "admin1";
			$password = "admin";
			$dbname = "savespotnow_db";

			//$logo = $_POST["logo"];
			$name = $_POST["name"];
			$phone = $_POST["phone"];
			$days = implode(',', $_POST['days']);
			$hours = $_POST["start_time"]. "-".$_POST["end_time"];
            $ID = $_SESSION['userID'];

			$conn = mysqli_connect($servername, $username, $password);

			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			mysqli_select_db ($conn , $dbname);

			$query = "INSERT INTO Company_profile (company_name, phone_number, operation_week, operation_hours, User_ID) VALUES ('$name', '$phone', '$days', '$hours','$ID');";

			mysqli_query($conn, $query);
			mysqli_close($conn);
		}
	if(isset($_POST["submitProfile"])){
		echo profileSubmit();
	}


	?>

</body>
</html>
