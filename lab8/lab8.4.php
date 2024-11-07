<?php
session_start();
if(isset($_SESSION["count"]))
    echo "Hits: " . $_SESSION["count"];
else
    echo "Hits: -";

echo "Session Nmae: " . session_name();
echo "Session ID: " . session_id();
?>
<br>
<a href="lab8.3.php">Home</a> |
<a href="lab8.4.php">SID/SNAME</a>