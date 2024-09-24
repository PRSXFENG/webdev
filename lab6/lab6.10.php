<?php

//retrieve & checked element's value using ?:
$cust=empty($_POST["cust"])?"":$_POST["cust"];

//retrieve & checked element's value using IF..ELSE
if(isset($_POST["based"]))
	$based=$_POST["based"];
else
	$based="";

$type = !empty($_POST["type"])?$_POST["type"]:"";

//retrieve & checked element's value using ?? (null coalescing operator)
$src1 = $_POST["src1"]??"";
$src2 = $_POST["src2"]??"";

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
$odate=empty($_POST["odate"])?"":$_POST["odate"];
$tqvm=empty($_POST["txtSecret"])?"":$_POST["txtSecret"];

$delivery = date_create($odate);
date_add($delivery,date_interval_create_from_date_string("1 days"));

$ddate = date_format($delivery,"Y-m-d"); //convert date from timestamp to string

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


// prepare and bind: s-string, i-integer, d-double, b-blob (binary large object)
$sql = "INSERT INTO tborder
(cust,based,type,src1,src2,top1,top2,top3,top4,remark,odate,delivery,secret) 
VALUES 
(______);";

$stmt = mysqli_prepare($conn, $sql);

______

______

______

mysqli_close($conn);


?>

