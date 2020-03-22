<?php
include 'contact-handle.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Login Form</title>
</head>
<body style="background-color: #e4edf2;">
  <div class="outer-container">
    <div class="inner-container">
      <div class="box1">
	  	<!--<img src="img/logo.jpg" style="width: 50px;height: 50px"">-->
	  	<img src="img/logo.jpg">
      </div>
      <div class="box2">
        <form action="" method="post">
          <div class="form-group">
            <label for="firstname"></label>
            <?php if(isset($msg)){echo "<div  style='color:white;background-color: green;'>".$msg."</div>";}?>
          </div>
          <div class="form-group">
            <label for="firstname"></label>
            <input type="text" name="firstname" id="firstname" required="" placeholder="Enter your firstname">
          </div>
          <div class="form-group">
            <label for="lastname"></label>
            <input type="text" name="lastname" id="lastname" required placeholder="Enter your lastname">
          </div>
          <div class="form-group">
            <label for="email"></label>
            <input type="email" name="email" id="email" required placeholder="Enter your email">
          </div>
	        <p>
	          Male &nbsp; <input type="radio" value="male" required="" name="gender"> &nbsp;&nbsp;&nbsp;&nbsp;
	          Female &nbsp;<input type="radio" value="female" required name="gender">
	       </p>
          <div class="form-group">
		  	<label for="msg"></label>
            <textarea name="message" required rows="5" cols="40%">Your message!!!</textarea>
        </div>
        <p>Forgot your password?</p>
        <div class="form-group">
          <input type="checkbox" id="remember">
          <label class="remtext" for="remember">By Checking this box you agree to our terms and conditions</label>
        </div>
        <button type="submit" name="send">Send message</button>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>