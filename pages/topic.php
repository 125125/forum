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
		echo "<td style='width:600px; text-align:left;'><a href='?p=$title'>$title</a></td>";
		echo "<td>Started By: Tok124</td>";
		echo "<td>Replies: 0</td>";
		echo "</tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
<?php
if($_SESSION['username'] == "") {}else{
?>
<div class="newthread">
	<div class="newthreadtitle">
	Start new Thread
	</div>
	<div class="newthreadform">
		<form action="functions/newthread.php" method="POST">
			<input type="hidden" name="topic" value="<?php echo $_GET['p']; ?>">
			<input type="text" name="title" placeholder="title">
			<textarea name="content" placeholder="Your Message"></textarea>
			<input type="submit" value="Post">
		</form>
	</div>
</div>
<?php
}
?>