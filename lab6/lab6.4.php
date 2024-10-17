<?php

// Retrieve & check element's value using ?:
$cust = empty($_POST["cust"]) ? "" : $_POST["cust"];

// Retrieve & check element's value using IF..ELSE
if (isset($_POST["based"])) {
    $based = $_POST["based"];
} else {
    $based = "";
}

$type = !empty($_POST["type"]) ? $_POST["type"] : "";

// Retrieve & check element's value using ?? (null coalescing operator)
$src1 = isset($_POST["src1"]) ? $_POST["src1"] : "";
$src2 = isset($_POST["src2"]) ? $_POST["src2"] : "";

// Retrieve data from listbox
$top = ["", "", "", ""];
$topping = empty($_POST["top"]) ? array("") : $_POST["top"];
foreach ($topping as $item) {
    if ($item == "cucumber") {
        $top[0] = "cucumber";
    }
    if ($item == "tomato") {
        $top[1] = "tomato";
    }
    if ($item == "corn") {
        $top[2] = "corn";
    }
    if ($item == "edamame") {
        $top[3] = "edamame";
    }
}

$remark = empty($_POST["descr"]) ? "" : $_POST["descr"];
$odate = empty($_POST["odate"]) ? "" : $_POST["odate"];
$tqvm = empty($_POST["txtSecret"]) ? "" : $_POST["txtSecret"];

$delivery = date_create($odate);
date_add($delivery, date_interval_create_from_date_string("1 days"));

$ddate = date_format($delivery, "Y-m-d"); // Convert date from timestamp to string

// Set-up db connection
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "dbwdev";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tborder
(cust, based, type, src1, src2, top1, top2, top3, top4, remark, odate, delivery, secret) 
VALUES 
('$cust', '$based', '$type', '$src1', '$src2', '$top[0]', '$top[1]', '$top[2]', '$top[3]', '$remark', '$odate', '$ddate', '$tqvm');";

echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>