<table border="1">
<tr>
<th class='category' colspan='5'>English</th>
</tr>
<?php
include('config/db_config.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM topics WHERE lang = 'english'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$topic = $row['topic_name'];
		echo "<tr colspan='5'>";
		echo "<td class='icon'><img src='#' /></td>";
		echo "<td class='topic'><a href='?p=$topic'>$topic</a></td>";
		echo "<td class='post'>Posts: </td>";
		echo "<td class='last-post'>Last post: </td>";
		echo "</tr>";
    }
} else {
}
$conn->close();
?> 
<tr>
<th class='category' colspan='5'>Swedish</th>
</tr>
<?php
include('config/db_config.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM topics WHERE lang = 'swedish'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$topic = $row['topic_name'];
		echo "<tr colspan='5'>";
		echo "<td class='icon'><img src='#' /></td>";
		echo "<td class='topic'><a href='?p=$topic'>$topic</a></td>";
		echo "<td class='post'>Posts: </td>";
		echo "<td class='last-post'>Last post: </td>";
		echo "</tr>";
    }
} else {
}
$conn->close();
?> 
</table>