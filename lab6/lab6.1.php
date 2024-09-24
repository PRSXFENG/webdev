<?php
if(isset($_POST["submit"]) && $_POST["submit"]==="GO"){
	$page=isset($_GET["menu"])?$_GET["menu"]:"";

	if($page=="view"){
		__________
	}else{
		__________
	}
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']" method="POST">
<input type="radio" id="add" name="menu" value="add"> ADD
<input type="radio" id="view" name="menu" value="view"> VIEW
<input type="submit" id="submit" name="submit" value="GO">
</form>