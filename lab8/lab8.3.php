<?php
session_start();
if(isset($_SESSION["count"]))
    $_SESSION["count"]++;
else
    $_SESSION["count"] = 1;

?>
<h2>Home Page</h2>
<a href="lab8.4.php">View Session</a> |