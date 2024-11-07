Fruit in Jin Hao's Shop:
<select name="opFruit">
<?php
$fList = file("ProductData.txt",FILE_IGNORE_NEW_LINES);#data in array
foreach($fList as $f){ #$f -> string 
	$fItem = explode("-",$f) #convert $f into array 
	?>
	<option value="<?php echo $fItem[0]?>"><?php echo $fItem[1]?></option>
	<?php
}
?>
</select>
<ol>
<?php
foreach($fList as $f){ #$f -> string 
	echo "<li>$f</li>";
}
?>
</ol>