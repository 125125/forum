<?php
include('config/db_config.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$page = $_GET['p'];
$sql = "SELECT * FROM posts WHERE title='$page'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$title = $row['title'];
		$content = $row['content'];
		$user = $row['username'];
		$date = $row['post_date'];
		echo $title . "<br>";
		echo $content . "<br>";
		echo $user . "<br>";
		echo $date . "<br>";
    }
} else {
    echo "0 results";
}
?>