<?php
#variable - int float/double string boolean array object null

$name = "Uncle Roger"; #string
$age = 32;
$rating = 4.5; #float/double

echo "My name is $name."; # "" can interpret variable
echo '<br>I am $age years old.'; # '' cannot interpret variable
echo '<br>I am ',$age,' years old.';

#is_type() - check variable data type
echo "<hr>";
echo is_string($name); #check $name is string type
echo "<br>";
echo is_string($rating); #check $rating is string type    
echo "<br>";
echo is_float($rating); #check $rating is float/double type

#auto conversion
echo "<hr>";
$sum = "49" + 7;
echo "49+7 = $sum";

#gettype() - see the data type
echo "<br>";
echo gettype($sum);
echo "<br>";
echo gettype($age);

#. - concatenation
echo "<hr>";
$str = (5)."9";
echo $str;
echo "<br>";
echo gettype($str);
echo "<br>" . $name . " is an expert in making fried rice with " . $rating . " stars rating.";

#casting - force conversion
echo "<hr>";
$num = (int) "999.88";
echo $num;
echo "<br>";
echo gettype($num);
?>