<?php
#associative
$result = array("c++"=>89, "java"=>82, "php"=>77);
print_r($result);
echo "<br><br>";
var_dump($result); //show dummy info of variable
$var = "Dummy";

echo "<br><br>";
var_dump($var);

echo "<br><br>";
$result['python'] = 59;
$result['html'] = 75;
print_r($result);

echo "<br><br>";
echo '<table border="1">';
echo '<tr><th>Subject</th><th>Score</th></tr>';
foreach($result as $s => $m){
    echo "<tr><td>$s</td><td>$m</td></tr>";
}

echo "</table>";

# lost

?>