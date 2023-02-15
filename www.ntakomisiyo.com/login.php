<!DOCTYPE html>
<html>
<head>
	<title>login - NTAKOMISIYO</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="files/style.css">
</head>
<body>
 <div class="wrapper">
 	<div class="heading">
 		<h1>NTA KOMISIYO Login</h1>
 	</div>
	<div class="form">
 		<form action="files/login-process.php" method="POST">
 			<span>
 				<i class="fa fa-user"></i>
 				<input type="text" placeholder="Enter Your Email here..." name="login_email">
 			</span><br>
 			<span>
                <i class="fa-solid fa-lock"></i>
 				<input type="password" placeholder="Enter Your Password here..." name="login_password">
 			</span><br>
 				<button type="submit" name="submit">LOGIN</button>
		</form>
    <p class="login_or_signup">Not yet have an account? &nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.php">SIGN-UP</a> instead</p>
	</div>
 	</div>
</body>
</html>
