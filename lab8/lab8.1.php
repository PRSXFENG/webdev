<!-- $_POST/$_GET: single-request data handling, single page-->
<?php 
if(isset($data))
	echo $data,"<br>";
else
	echo "Info is not avaible...<br>";
?>
<a href="lab8.2.php?info=Haiyah">Next</a>