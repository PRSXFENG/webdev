<?php
//from previous lesson
$id= isset($_GET["id"])?$_GET["id"]:"";

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

$sql = "DELETE FROM tborder WHERE id = $id";

if (mysqli_query($conn,$sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

