<ul>
<?php
#. - current dir & .. - parant dir
foreach(scandir("image") as $pic){
	
	echo "<li>$pic</li>";
	
}


?>


</ul>