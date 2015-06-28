<?php
include('../config/db_config.php');
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

function md5_encryption($user, $pass) {
	$user = strtoupper($user);
	$pass = strtoupper($pass);
	return md5($user.':'.$pass);
}

$username = mysqli_real_escape_string($conn, $_POST['user']);
$password = md5_encryption($username, $_POST['pass']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

if($_POST['pass'] == $_POST['pass2']) {
	$sql = "INSERT INTO accounts (username, md_password, email)
	VALUES ('$username', '$password', '$email')";
	
	if(mysqli_query($conn, $sql)) {
		header('location: ../?p=home');
	}else{
		echo "Sorry, Something went wrong \n" . mysqli_error($conn);
	}
}else{
	echo "Password Mismatch";
}