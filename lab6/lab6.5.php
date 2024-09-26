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

$sql = "SELECT * FROM tborder";
$result = ______;

if (______ > 0) {
  // output data of each row
  ______
?>
    <p> 
	ID: ______<br>
	Name: ______ <br>
	Delivery: ______ <br>
	Action: <a href="______">edit</a> 
	<a href="______">delete</a> </p>
<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
______
