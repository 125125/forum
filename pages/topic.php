<table border="1">
<?php
include('config/db_config.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$page = $_GET['p'];

$sql = "SELECT title FROM posts WHERE topic_name='$page'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$title = $row['title'];
		echo "<tr>";
		echo "<td><a href='?p=$title'>$title</a></td>";
		echo "</tr>";
    }
} else {
    echo "0 results";
}
?>
</table>