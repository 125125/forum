<?php
$page = $_GET['p'];

switch($page) {
	case"home":
		include('pages/home.php');
		break;
		
	case"register":
		include('pages/register.php');
		break;
}

include('config/db_config.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM topics WHERE topic_name='$page'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$topic = $row['topic_name'];
    }
} else {
}

if($page == $topic) {
	include('pages/topic.php');
}

include('config/db_config.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title FROM posts WHERE title ='$page'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$title = $row['title'];
    }
} else {
}

if($page == $title) {
	include('pages/content.php');
}
?>