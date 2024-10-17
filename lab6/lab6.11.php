<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbwdev";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

/*$sql="INSERT INTO tborder (cust,based,type,odate,delivery) 
VALUES ('John','pasta','fish','2024-08-18','2024-08-19'),
('Peter','rice','prawn','2024-08-18','2024-08-19')";*/
$sql="INSERT INTO tborder (cust,based,type,odate,delivery) 
VALUES ('John','pasta','fish','2024-08-18','2024-08-19')";

if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);
	echo "Successfully. Last inserted ID is: " . $last_id;
} else {
echo "Error: " . $sql. "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

