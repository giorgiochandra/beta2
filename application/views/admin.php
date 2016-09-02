<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="style.css"> 
	<link rel="stylesheet" type="text/css" href="tes.css">
</head>
<body>
<div class="container-fluid">
	
	<div id="header"></div>


 <div class="container" >

 	<div class="col-md-3 col-sm-2"></div>
 	<div class="col-md-6 col-sm-8" id="login_container">
 		<div class="row">
	  		<div class="col-sm-2 "></div>
			<div class="col-sm-8 col-xs-12">	
			    <form class="omb_loginForm" action="process.php" method="POST">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="user" placeholder="Username">
					</div>
										
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="pass" placeholder="Password">
					</div>

					<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-4 col-xs-12">
				<label class="checkbox">
					<input type="checkbox" value="remember-me">Remember Me
				</label>
			</div>
			<div class="col-sm-4 col-xs-12">
				<p class="forgot_pwd">
					<a href="#">Forgot password?</a>
				</p>
			</div>
		</div>	
 	</div>
	    	
</div>
	</div>

	


<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>