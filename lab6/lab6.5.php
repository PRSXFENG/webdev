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
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { #return table
  // output data of each row
  while(mysqli_fetch_assoc($result)) {
?>
    <p> 
	ID: <?=$row['id']?><br>
	Name: <?=$row['cust']?> <br>
	Delivery: <?=$row['delivery']?> <br>
	Action: <a href="______">edit</a> 
	<a href="______">delete</a> </p>
<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
<a href="lab6.3.php">Add</a>
