<?php
require_once 'dbconnect.php';


$signup_name = $_POST["signup_name"];
$signup_email = $_POST["signup_email"];
$signup_password = $_POST["signup_password"];
$signup_password_repeat = $_POST["signup_password_repeat"];

$sql = "INSERT INTO ntakomisiyo_users (user_names, user_email, user_password) VALUES (?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if( mysqli_stmt_prepare($stmt, $sql))
{
  mysqli_stmt_bind_param($stmt, "sss", $signup_name, $signup_email, $signup_password);
  mysqli_stmt_execute($stmt);
    header("location: ../login.php?msg=signup_success");
    exit();
  }

else{
  header("location: ../signup.php?msg=db_error");
  exit();
}
