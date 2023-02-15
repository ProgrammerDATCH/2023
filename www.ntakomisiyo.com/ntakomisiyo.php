<?php
session_start();
require_once 'files/dbconnect.php';
$sql = "SELECT * FROM ntakomisiyo_users WHERE user_id = ?;";
$stmt = mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($stmt, $sql))
{
  mysqli_stmt_bind_param($stmt, "s", $_SESSION["user_id"]);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($result);
}
else{
  header("location: login.php?msg=home_db_error");
  exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>NTAKOMISIYO - Home</title>
	<link rel="stylesheet" type="text/css" href="files/style.css">
</head>
<body>
 <div class="wrapper">
 	<div class="heading">
 		<h1>NTA KOMISIYO HOME for
      <br><br><br>User:
        <?php
        if(isset($_SESSION["user_id"]))
        {
           echo $row["user_names"];
         }
           else{
             echo "Not LOGGED IN";
           } ?>
       </h1>

 	</div>
	<div class="form">
  <?php
    if(isset($_SESSION["user_id"]))
    {
      echo "<a href='files/logout-process.php'><button>LOGOUT</button></a>";
    }
    else {
      echo"<a href='login.php'><button>LOGIN</button></a> <a href='signup.php'><button>SIGNUP</button></a>";
    }
    ?>
	</div>
 	</div>
</body>
</html>
