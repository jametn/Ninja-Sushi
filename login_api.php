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
	$username = $_POST["username"];
	$password = $_POST["password"];
	include "config.php";
	if($conn->connect_error){
		exit();
	}
	else{
		$sql = "SELECT * FROM customer WHERE cus_username = '".$username."' AND cus_password = '".$password."' ";
		$result = $conn->query($sql);
		//exit();
		if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
				setcookie("cus_id",$row["cus_id"],time()+3600,'/');
				?>

					<div class="true">
						<i class="fa fa-check fa-5x"></i><br>
						Login Successful
					</div>
				<?php
				header("Refresh:3;url=index.php");
			}
		}else{
				?>

					<div class="true">
						<i class="fa fa-times fa-5x"></i><br>
						Login Failed
					</div>
				<?php
				header("Refresh:3;url=login.php");
		}

	}


 ?>
 </body>
</html>