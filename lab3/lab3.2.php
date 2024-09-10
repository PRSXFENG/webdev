<?php
/*Selection
if
if-else
if-elseif-else
switch
?: - conditional assignment operator
?? - null coalescing operator
   - whether variable is set / declared
   - requires certain versions of PHP (7.4)
*/

$pay = 10000;

#if
if($pay > 10000){
    echo "High pay <br>";
}

#if-else
if($pay > 10000){
    echo "High pay <br>";
}else{
    echo "Low pay <br>";
}

#if..elseif
if($pay > 10000){
    echo "T20 <br>";
}elseif($pay > 5000){
    echo "M40 <br>";
}else{
    echo "B40 <br>";
}

#switch
$fruit = "banana";
switch($fruit){
    case "apple":
    case "mango":
        echo "Vit-A <br>";
        break;
    case "banana":
    case "avocado":
        echo "Vit-B <br>";
        break;
    default:
        echo "??<br>";
}

echo "<hr>";
#?: $var = (expression) ? value_T : value_F;
$age = 4;
$msg = ($age > 18) ? "Can Vote<br>" : "Can't vote <br>";
echo $msg;

#?? $var = $varX ?? define_value;
$x = null;
$num = $x??0;
echo $num;

echo "<hr>";
$val = isset($x) ? $x : 0; //same logic as line 59
echo $val;

?>