<!DOCTYPE html>
<html>
<head>
	<title>Signup - NTAKOMISIYO</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="files/style.css">
</head>
<body>
 <div class="wrapper">
 	<div class="heading">
 		<h1>NTA KOMISIYO Signup</h1>
 	</div>
	<div class="form">
 		<form action="files/signup-process.php" method="POST">


 			<span>
 				<input type="text" placeholder="Enter Your Full Name here..." name="signup_name">
 			</span><br>
      <span>
 				<input type="text" placeholder="Enter Your Email here..." name="signup_email">
 			</span><br>


 			<span>
                <i class="fa-solid fa-lock"></i>
 				<input type="password" placeholder="Enter Password here..." name="signup_password">
 			</span><br>
      <span>
                <i class="fa-solid fa-lock"></i>
 				<input type="password" placeholder="Repeat Password here..." name="signup_password_repeat">
 			</span><br>

 				<button type="submit" name="submit">SIGN-UP</button>
		</form>
    <p class="login_or_signup">Already have an account? &nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">LOGIN</a> instead</p>
	</div>
 	</div>
</body>
</html>
