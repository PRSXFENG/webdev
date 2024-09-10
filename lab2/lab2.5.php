<?php
#arithmetic - + - * / % .
#auto conversion: string -> num; int/int -> double
# % can use double / int
$x = 50;
$y = 6;
echo "$x/$y =" . ($x/$y);
echo "<br>$x%$y =" . ($x%$y);
echo "<br>" . 5.0%2;

#assignment = += -= *= /= %= .=
echo "<hr>";
$txt = "Why ";
$txt .= "we learn PHP?";
echo $txt;

#relational == != > >= < <= === !== <=>
# === : data type & value are the same
# !== : data type or value are different
# <=> : == return 0; > return 1; < return -1
echo "<hr>";
echo (10 == "10"); #true
echo "<br>" . (10 === "10");
echo "<br>" . (10 === 100);
echo "<br>" . ("10" === 100);
echo "<br>" . ("10" === "10");
echo "<hr>";
echo (10 != "100"); #true
echo "<br>" . (10 !== "10"); #true
echo "<br>" . ("10" !== "10");
echo "<br>" . (10 !== 100); #true
echo "<hr>";
echo (10 <=> "10");
echo "<br>" . (100 <=> 10);
echo "<br>" . (10 <=> 100);

#logical && || ! AND OR XOR
echo "<hr>";
echo !(10 == 20); #true
echo "<br>" . ((10 == 20) or (20 !== 0)); #true
echo "<br>" . ((10 < 20) and (20 === "20")); #false

#unary ++ --
$i = 5;
$j = -1;
echo "<hr>";
echo $i++;
echo "<br> . $i";
echo "<br> . --$j";
echo "<br> . $j";

?>
