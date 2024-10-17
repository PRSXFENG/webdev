<?php
$myfood = array("fish burger", "chicken burger", 
"beef burger", "fried chicken", 
"waffle", "chicken wrap", 
"ice-cream");

foreach($food as $f){
	if(preg_match("/CHICKEN/i",$f)){
		echo $f . "<br>";
	}
	
}

?>