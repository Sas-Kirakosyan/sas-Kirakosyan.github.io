<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div id="myregister-form" class="register-form">
  <div class="header-login">
  	<h2>Register</h2>
  </div>
  	<form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
		<button type="submit" class="btn" name="reg_user">Register</button>
		<button class="cancelbtn btn"><a href="login.php">Cancel</a></button>
  	</div>
  	<p>
  		Already a member? <a href="login.php" id="mysignin">Sign in</a>
  	</p>
  </form>
  </div>



<script>


let signin = document.getElementById('mysignin');
let modal = document.getElementById('mylogin-form');
signin.onclick = function(){
modal.style.display = "block"
}
	

 let canselbtn = document.querySelector('.cancelbtn');
 canselbtn.onclick = function(){
	modal.style.display = "none";
 }
 

</script>
</body>

</html>