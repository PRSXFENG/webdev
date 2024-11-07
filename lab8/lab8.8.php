<?php
#destroy all data link with the current session
session_start();
session_destroy();
if(isset($_SESSION["count"]))
    echo "Hits: " . $_SESSION["count"];
else
    echo "Hits: -";
#rename session
echo "<br>Session Name: " . session_name();
echo "<br>Session ID: " . session_id();
?>
<br>
<a href="lab8.4.php">Home</a> |