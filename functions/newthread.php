<?php
include('../config/db_config.php');

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$title = mysqli_real_escape_string($conn, $_POST['title']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$topic = $_POST['topic'];

$query = "INSERT INTO posts (title, content, username, topic_name)
VALUES ('$title', '$content', '" . $_SESSION['username'] . "', '$topic')";

if(mysqli_query($conn, $query)) {
	header('location: ../?p=home');
}else{
	echo "Failed<br>" . mysqli_error($conn);
}