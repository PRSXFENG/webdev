<?php
$text = "The quick brown fox jumps over the lazy dog. 
<br> The lazy dog is sleeping in front of my house";

$text2 = preg_replace("/lazy dog/", 
'<span style="background-color:lightPink">lazy cat</span>', 
$text);

echo $text;
echo "<br>$text2";
?>

