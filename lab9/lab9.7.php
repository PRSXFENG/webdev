<?php
$arrBean = file("productFile.txt");
foreach($arrBean as $bean){ #$bean : string
	list($id,$name,$country) = explode("-",$bean);
?>
<p>id: <?php echo $id?></p>
<p>name: <?php echo $name?></p>
<p>country: <?php echo $country?></p>
<hr>
<?php	
}

?>