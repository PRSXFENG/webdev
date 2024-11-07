<?php
if(isset($_POST['bsubmit'])){
	$name=!empty($_POST['pname'])?$_POST['pname']:"";
	$type=isset($_POST['ptype'])?$_POST['ptype']:"";

	if($name!="" && $type!=""){
		$text = "$name is a $type\n";
		#existing content will be override
		#file_put_contents("productRpt.txt",$text);
		
		#write at the end
		file_put_contents("productRpt.txt",$text,FILE_APPEND);
	}
}

?>
<h1>Product Data</h1>
<form action="lab9.4.php" method="post">
Product Name: <input type="text" name="pname" required>
<br>
Category: <br>
<input type="radio" name="ptype" value="fruit" checked>
Fruit<br>
<input type="radio" name="ptype" value="vegetable">
Vegetable<br> 
<input type="radio" name="ptype" value="meat">
Meat<br>
<input type="submit" name="bsubmit" value="submit">
</form>
