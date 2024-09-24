<?php

//retrieve & checked element's value using ?:
$id=empty($_POST["txtid"])?"":$_POST["txtid"];

$cust=empty($_POST["cust"])?"":$_POST["cust"];

//retrieve & checked element's value using IF..ELSE
if(isset($_POST["based"]))
	$based=$_POST["based"];
else
	$based="";

$type = !empty($_POST["type"])?$_POST["type"]:"";

//retrieve & checked element's value using ?? (null coalescing operator)
$src1 = isset($_POST["src1"])?$_POST["src1"]:"";
$src2 = isset($_POST["src2"])?$_POST["src2"]:"";
/*
$src1 = $_POST["src1"]??"";
$src2 = $_POST["src2"]??"";
*/

//retrieve data from listbox
$top = array("","","","");
$topping = empty($_POST["top"])?array(""):$_POST["top"];
foreach ($topping as $item){
	if($item=="cucumber")
		$top[0] = "cucumber";
	if($item=="tomato")
		$top[1] = "tomato";
	if($item=="corn")
		$top[2] = "corn";
	if($item=="edamame")
		$top[3] = "edamame";
	
}

$remark=empty($_POST["descr"])?"":$_POST["descr"];
$ddate=empty($_POST["ddate"])?"":$_POST["ddate"];
$tqvm=empty($_POST["txtSecret"])?"":$_POST["txtSecret"];


//set-up db connection
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

$sql = ______

echo $sql;
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

