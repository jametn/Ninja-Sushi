<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="reset.css">
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" type="text/css" href="font-awesome.css">
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
</head>

<body>
<div class="menu">
    <div class="logo"><img src="img/802323y59_13570113_bp04.png" class="image" width="60" height="60"></div>

  <div id="bar">
  <div id="slider"></div>
    <div alt="1" class="menuItem">Home</div>
    <div alt="2" class="menuItem">Menu</div>
    <div alt="3" class="menuItem">Contact</div>
    <div alt="4" class="menuItem">Logout</div>
    <a href="basket.php"><div alt="5" class="menuItem"><i class="fa fa-shopping-basket fa-lg"></i></div></a>
</div>
</div>


  <div class="intro-pic">
    <div class="cloud"><h1 class="header">SET MENU</h1></div>
  </div>



  <div class="wrap1">
    <?php
      include "config.php";
      if($conn->connect_error){
        exit();
      }
      else{
        $sql = "SELECT * FROM product WHERE 1 ORDER BY pro_name";
        $result = $conn->query($sql);// รันคอมมาน sql

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          ?>
            <div class="food-box">
              <div class="menu-pic">
                <img src="img/<?php echo $row["pro_pic"]?>">
              </div>
              <div class="box-des">
                <div class="menu-name"><?php echo $row["pro_name"]?></div>
                <div class="menu-des"><?php echo $row["pro_des"]?></div>
                <div class="money">฿<?php echo $row["pro_price"]?></div>
                <button class="addplus">+ ADD</button>
              </div>
            </div>
          <?php
          }
        }
      }
    ?>
    
    
    

    
    <div style="clear: both; height: 50px;"></div>
  </div>






  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
