<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="font-awesome.css">
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
	<title></title>
</head>
<body>
<?php


?>
	<script type="text/javascript">
		'use strict';

window.addEventListener('load', windowLoaded, false);

function windowLoaded() {
	var 
		tabs = document.querySelectorAll('.cd-tabs')[0],
		login = document.querySelectorAll('a[data-content=\'login\']')[0],
		signup = document.querySelectorAll('a[data-content=\'signup\']')[0],
		tabContentWrapper = document.querySelectorAll('ul.cd-tabs-content')[0],
		currentContent = document.querySelectorAll('li.selected')[0];

	login.addEventListener('click', clicked, false);
	signup.addEventListener('click', clicked, false);

	function clicked(event) {
		event.preventDefault();
    
		var selectedItem = event.currentTarget;
		if (selectedItem.className === 'selected') {
      // ...       
		} else {
			var selectedTab = selectedItem.getAttribute('data-content'),
				selectedContent = document.querySelectorAll('li[data-content=\'' + selectedTab + '\']')[0];

			if (selectedItem == login) {
				signup.className = '';
				login.className = 'selected';
			} else {
				login.className = '';
				signup.className = 'selected';
			}

			currentContent.className = '';
			currentContent = selectedContent;
			selectedContent.className = 'selected';

		}
	}

	var inputs = document.querySelectorAll('input');
	for (var i = 0; i < inputs.length; i++) {
		inputs[i].addEventListener('focus', inputFocused, false);
	}

	function inputFocused(event) {
		var label = document.querySelectorAll('label[for=\''+ this.name +'\']')[0];
		label.className = 'focused';
	}
}	


	</script>
    <div class="cd-tabs">
    
      <nav>
        <ul class="cd-tabs-navigation">
          <li><a href="#" data-content="login" class="selected">login</a></li>
          <li><a href="#" data-content="signup">signup</a></li>
        </ul>
      </nav>
      <ul class="cd-tabs-content">
        <li data-content="login" class="selected">
          <form name="login-form" method="POST" action="login_api.php">
         
          
          <div class="form-box">
            <div class="form-fild">
              <label for="username">Username</label>
              <input type="text" name="username">
            </div>
            <div class="form-fild">
              <label for="password">Password</label>
              <input type="password" name="password">
            </div>
            <label class="pull-left">
                <input type="checkbox">Remember me
              </label>
              <label class="pull-right">
                 <a href="#">Forgot password ?</a>
              </label>
          </div>


            
            <button type="submit">Submit</button>
            <div class="line-box"></div>       	
          	<div class="oror">or</div>	
          	<button type="facebook" class="face"><i class="fa fa-facebook"></i>&nbsp&nbsp&nbspFacebook</button>
            
          
          
          </form>
        </li>
        <li data-content="signup">
          <form name="signup-form" method="POST" action="regis_api.php">
          <h1>PERSONAL INFO</h1>
          <div class="form-fild">
              <label for="firstname">Firstname</label>
              <input type="text" name="firstname">
            </div>
            <div class="form-fild">
              <label for="lastname">Lastname</label>
              <input type="text" name="lastname">
            </div>
            <div class="form-fild">
              <label for="email">Email</label>
              <input type="email" name="email">
            </div>
            <div class="form-fild">
              <label for="phonenumber">phone Number</label>
              <input type="text" name="phonenumber">
            </div>
            
            <h1>CREATE ACCOUNT</h1>
            <div class="form-fild">
              <label for="susername">Username</label>
              <input type="text" name="susername">
            </div>
            <div class="form-fild">
              <label for="spassword">Password</label>
              <input type="password" name="spassword">
            </div>
            <div class="form-fild">
              <label for="spassword2">Confirm Password</label>
              <input type="password" name="spassword2">
            </div>
            <span class="error"></span>
            <button type="submit">Submit</button>
          </form>
        </li>
      </ul>
    </div> <!-- end cd-tabs -->
   <footer>
   
   </footer>
</body>
</html>