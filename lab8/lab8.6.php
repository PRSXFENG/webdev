<?php
session_start();
echo "<br>Session Name: " . session_name();
echo "<br>Current Session ID: " . session_id();
session_regenerate_id();
echo "<br>New Session ID: " . session_id();
?>
<br>
<a href="lab8.4.php">Home</a> |
<a href="lab8.7.php">UNSET</a> |
<a href="lab8.8.php">DESTROY</a> |