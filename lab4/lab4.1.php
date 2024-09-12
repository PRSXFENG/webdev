<?php
#intepretation string
$v = 15;
echo "This is my {$v}th years in Sunway.";

#string function
#strtolower() convert a string to lowercase
$str = strtolower("Taylor Swift"); #Java: toLowerCase()
echo "<hr>Text: ".$str;
#strtoupper() convert a string to lowercase
$str = strtoupper("Taylor Swift"); #Java: toUpperCase()
echo "<br>Text: ".$str;
#strlen() - get length of te text
echo "<br>Size: ".strlen("Taylor Swift"); #Java: length()
#strpos() - index for the 1st occurence
$position = strpos("Taylor Swift", "S");
echo "<br>Find letter S: ".$position;

$position = strpos("Taylor Swift","S");

echo "<br>Find letter S: ".$position;

#strcmp return 0 if same & case sensitive
#Java: equals()
echo "<hr>";
echo "Compare:";
echo "<br>Pencil VS Pen: ".strcmp("Pencil","Pen"); 
echo "<br>PEN VS Pen: ".strcmp("PEN","Pen");
echo "<br>Pen VS Pen: ".strcmp("Pen","Pen");

#substring
#substr() - partial of the text
echo "<hr>";
echo "Substring:";
echo "<br>" . substr("Taylor Swift",7);
echo "<br>" . substr("Taylor Swift",0,6);

$text1=" Monday blue! ";

#trim - Remove characters from both sides of a string tab, spacing, newline
echo "Trim:". trim($text1);

#trim - Remove specific character(s)
echo "<br>Remove text: " . trim($text1," Monday");

?>