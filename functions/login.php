<?php
include('../config/db_config.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

function md5_encryption($user,$pass)
{
    $user = strtoupper($user);
    $pass = strtoupper($pass);
    return md5($user.':'.$pass);
}

$username = $_POST['user'];
$password = md5_encryption($username,$_POST['pass']);

$query = "SELECT * FROM `accounts` WHERE username='$username' AND md_password='$password'";

if ($result=mysqli_query($conn,$query)) {
  $rowcount=mysqli_num_rows($result);
  if($rowcount == 1) {
	$_SESSION['username'] = $username;
	header('location: ../?p=home');
  }else{
	echo "Failed to Login";
  }
}