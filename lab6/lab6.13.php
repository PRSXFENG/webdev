<?php
$uname=empty($_POST["uname"])?"":$_POST["uname"];
$pwd=empty($_POST["pwd"])?"":$_POST["pwd"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = ______;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row=mysqli_fetch_assoc($result)){
		$role = $row["role"];
	}
	if(______)
		header("Location:lab6.4.php");
	else
		header("Location:lab6.2.php");	
}else{
	echo "Invalid user...Please login again....";
?>
	<a href="lab6.10.php">Click Here</a>
<?php
}
mysql_close($conn);
?>


