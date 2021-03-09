<?php
$servername = "site_mysql";
$username = "root";
$password = "strongrootpassword";
// Create connection
$conn = new mysqli($servername, $username, $password, 'mydatabase');

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}

$sql = "SELECT * FROM test_table";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}

foreach ($rows as $row) {
	echo "{$row['name']} says \"{$row['description']}\"<br>";
}

$conn->close();

