<?php
#free all session variables
session_start();
session_unset();

if(isset($_SESSION["count"]))
    echo "Hits: " . $_SESSION["count"];
else
    echo "Hits: -";

#cannot rename session
echo "<br>Session Name: " . session_name();
echo "<br>Session ID: " . session_id();
?>
<br>
<a href="lab8.4.php">Home</a> |