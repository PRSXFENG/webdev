<?php
/*
3 types - index, associative, multidimensional
*/
# create array - index is auto assigned

$aVal = array(12,-14,6,-8);
#print_r() - print human readable info of variable
#print conent of an array for debugging

print_r($aVal);

#create array with empty element
$aName = array();
$aName[0] = "bubu";
$aName[1] = "dudu";
$aName[2] = "quby";
$aName[] = "buttercup"; #appened

echo "<hr>";
print_r($aName);

#array with mix type
$aMix = array("Justin", "DIIT", 20, 3.67, false);
echo "<hr>";
print_r($aMix);

echo "<hr>";
#for
for($i=0; $i<count($aMix); $i++){
    echo "$aMix[$i]<br>";
}

echo "<hr>";
#foreach - data only
foreach($aMix as $n){
    echo "$n<br>";
}

echo "<hr>";
#foreach - key & data
foreach($aMix as $k=>$v){
    echo "aName[$k] : $v <br>";
}

echo "<hr>";
#count() / sizeOf() - get array sizeOf
echo "Size of aName array: " . sizeof($aName);

echo "<br><br>";

#pop,push,unshift,shift
array_push($aName, "bubbles", "blossom"); #1st vaue goes 1st
print_r($aName);

echo "<br><br>";
array_pop($aName);
print_r($aName);

echo "<br><br>";
array_unshift($aName, "tom", "jerry"); #1st value goes last
print_r($aName);

#merge
$avege = array("carrot", "tomato");
$bvege = array("potato", "eggplant");
$cvege = array("pak choi", "corn", "cabbage");

$vege = array_merge($avege, $bvege, $cvege);
echo "<br><br>";
print_r($vege);

#return arrya in reverse order - no override
echo "<br><br>";
print_r(array_reverse($vege));

#asc,desc - override
$num = array(5,-8,-2,10);
sort($num);
echo "<br><br>";
print_r($num);

rsort($num);
echo "<br><br>";
print_r($num);

#total, multiplication, average
echo "<br><br>";
echo "Multiplication: " . array_product($num); #10*5*-2*-8
echo "<br><br>";
echo "Total: " . array_sum($num);
echo "<br><br>";
echo "Average: " . array_sum($num)/count($num);

#check if data exists
$car = array("x50", "x70", "persona" , "saga" , "x90");
if (in_array("saga", $car)){
    echo "Proton's car";
}else{
    echo "Not Proton's car";
}

?>