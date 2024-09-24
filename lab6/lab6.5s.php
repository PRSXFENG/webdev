
<?php
error_reporting(E_ALL & E_NOTICE);
$key=______
?>

<form name="fSearch" id="fSearch" action="lb6.5s.php" method="post">
	<input type="text" name="search" value="______">
	<input type="submit" name="submit" value="Find">
</form>


<table border="1">
<tr>
	<th>ID</th>
	<th>Customer</th>
	<th>Delivery</th>
	<th>Action</th>
</tr>

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

______

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row=mysqli_fetch_assoc($result)) {
?>
    <tr> 
		<td><?php echo $row['id']?></td>
		<td><?php echo $row["cust"]?> </td>
		<td> <?php echo $row["delivery"]?></td>
		<td>
			<a href="lab6.6.php?id=<?php echo $row["id"]?>">edit</a> 
			<a href="lab6.8.php?id=<?php echo $row["id"]?>">delete</a>
		</td>
	</tr>
<?php
  }
} 
else {
?>
	<tr><td colspan="4">0 results</td></tr>
<?php

}
mysqli_close($conn);

?>
</table>
<p><a href="lab6.3.php">add</a></p>
