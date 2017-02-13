<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	@font-face {
    font-family: 'gotham_mediumregular';
    src: url('fonts/gotham-medium-webfont.woff2') format('woff2'),
         url('fonts/gotham-medium-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'komika_axisregular';
    src: url('fonts/komikax-webfont.woff2') format('woff2'),
         url('fonts/komikax-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
  font-family: 'FontAwesome';
  src: url('fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}

		.true{
			margin: 200px auto 0;
			font-size: 24px;
			color: #000;
			width: 500px;
			text-align: center;
			font-family: 'komika_axisregular';
		}
	</style>
<link rel="stylesheet" type="text/css" href="font-awesome.css">
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
</head>
<body>
<?php 
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$phonenumber = $_POST["phonenumber"];
	$username = $_POST["susername"];
	$password = $_POST["spassword"];

	include "config.php";
	if($conn->connect_error){
		exit();
	}
	else{
		$sql = "INSERT INTO customer(cus_firstname, cus_lastname, cus_email, cus_phone, cus_username, cus_password) VALUES ('".$firstname."','".$lastname."','".$email."','".$phonenumber."','".$username."','".$password."');";
		//exit();
		if($conn->query($sql)){
			?>

					<div class="true">
						<i class="fa fa-check fa-5x"></i><br>
						Register Successful
					</div>
				<?php
			header("Refresh:3;url=login.php");

		}else{
			?>

					<div class="true">
						<i class="fa fa-times fa-5x"></i><br>
						Register Failed
					</div>
				<?php
			header("Refresh:3;url=login.php");
		}

	}


 ?>
 </body>
 </html>