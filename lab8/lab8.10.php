<?php
if (!empty($_POST["guest"])) {
    setcookie ("visotor", $_POST["guest"]);
    echo "Cookie created.";
}
?>
<a href="lab8.11.php">View Cookie</a>
