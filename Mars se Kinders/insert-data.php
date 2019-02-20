<?php
if (isset($_POST['submitted'])) {

  include('connect-mysql.php');

  $id = $_POST['id'];
  $pob = $_POST['pob'];
  $cob = $_POST['cob'];
  $title = $_POST['title'];
  $gender = $_POST['gender'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $sqlinsert = "INSERT INTO passengerdetails (ID, PlanetOfBirth, CountryOfBirth, Title, Gender, Name, PhoneNumber, Email)
  VALUES ('$id', '$pob', '$cob','$title', '$gender', '$name','$phone', '$email')"; //corresponds to DB

  if (!mysqli_query($dbcon, $sqlinsert)) {
    die('Error inserting record');
    } //end of nested if statement

    $newrecord = '1 Record added to Database';


} //end of if statement

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Mars Children Application Form</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Airline Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<!--//fonts-->


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.btn {
	  background-color: DodgerBlue;
	  border: none;
	  color: white;
	  padding: 12px 16px;
	  font-size: 16px;
	  cursor: pointer;
	}

	/* Darker background on mouse-over */
	.btn:hover {
	  background-color: RoyalBlue;
	}
	</style>
</head>

<body>
	<!--background-->
	<h1>Mars Children 2020 Booking Form</h1>
	<div class="booking-form-w3layouts">
		<!-- Form starts here -->
    <button class="btn" onclick="location.href = 'index.php'";><i class="fa fa-home"></i> Home</button><br><br>

    <form method ="post" action="insert-data.php">
      <input type="hidden" name="submitted" value="true" />
      <fieldset>
        <h2 class="sub-heading-agileits">Booking Form</h2><br><br>

        <label>ID: <input type="text" name="id" /></label>
        <label>Planet Of Birth: <input type="text" name="pob" /></label>
        <label>Country Of Birth: <input type="text" name="cob" /></label>

<br><br>

        <div class="field-agileinfo-spc form-w3-agile-text2">
          <select name="title">
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Ms">Ms</option>
            <option value="Dr.">Dr.</option>
            <option value="Prof.">Prof.</option>
            <option value="Martian">Martian</option>
          </select>
        </div>

<br><br>

        <div class="field-agileinfo-spc form-w3-agile-text2">
          <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Non-Earthling">Non-Earthling</option>
            <option value="Other">Other</option>
        </select>
        </div>

        <label>Name: <input type="text" name="name" /></label>
        <label>Phone Number: <input type="text" name="phone" /></label>
        <label>Email: <input type="text" name="email" /></label>

        <div class="radio-section">
          <h6>Click to Accept our Terms and Conditions</h6>
          <ul class="radio-buttons-w3-agileits">
            <li>
              <input type="radio" id="a-option" name="selector1">
              <label for="a-option">I Accecpt</label>
              <div class="check"></div>
            </li>
            </ul>
          <div class="clear"></div>
        </div>

      </fieldset>
      <br />
      <input type="submit"value="add new person" />
    </form>
		</div>


	<!--copyright-->

	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- Time Js -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker,.timepicker1').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time Js -->
	<!-- Calendar Js -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->

</body>
</html>
