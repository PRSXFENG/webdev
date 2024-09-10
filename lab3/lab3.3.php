<?php
/*
white
do-while
for
foreach
*/

$i = 0;
# get year number from live date
$y = date("Y", strtotime(date("Y-m-d")));
echo "<ul>";
while ($i <= 5){
    $z = $y + $i;
    echo "<li>$z</li>";
    $i++;
}
echo "</ul>";
echo "<hr>";
$j = 0;
echo '<table border="1">';
echo "<tr><th>j</th><th>j^2</th></tr>";
do{
    $j++;
    echo "<tr><th>$j</th><th>".pow($j,2)."</th></tr>";
} while ($j < 10);
echo "</table>";
echo "<hr>";
echo '<ol style="list-style-type: lower-roman;">';
for ($k = 0; $k <= 12; $k++){
    echo "<li>$k X 5 = ".($k*5);
}
echo "</ol>";

?>
