<?php
#int
$i = 20;
echo "$i is int?" . is_int($i);
echo "<br>-5 is int?" . is_int(-5);
#hexa: 0x
#octa: 0
$j = 0xAA;
echo "<br>$j is int?" . is_int($j);
$k = 021;
echo "<br>$k is int?" . is_int($k);

#float
$p = 20.66;
echo "<br>$p is double?" . is_double($p);
$q = -2E4;
echo "<br>$q is double?" . is_double($q);
$r = 2E-4;
echo "<br>$r is double?" . is_double($r);

#boolean
$x=true;
$y=false;
echo "<br>$x is boolean?" . is_bool($x);
echo "<br>$y is boolean?" . is_bool($y);
echo "<br>1 is boolean?" . is_bool(1);
echo "<br>0 is boolean?" . is_bool(0);
?>
