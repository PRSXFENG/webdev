<?php
//intro technology use
$servername ="localhost";
$username = "root";
$password ="";
$dbname="dbwdev";
//1. create connection
//2. open connection 
//3. connect to db
//4. construct SQl stmt & execute
//5. close connection
// Create connection - with database
$conn = my_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . __________);
}
else{
	echo "Sucessfully connected to database $dbname.";
}

__________

?>
