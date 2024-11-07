<?php
#glob() grab file names in a directory based on pattern
#* - wildcard
$imgFile = glob("image/*.png");
foreach($imgFile as $pic){
	#basename(): strips any leading directory from file path info
	print basename($pic,".png") . "<br>"; #2nd param is to cutoff ext. name
	echo '<img src="image/' .  basename($pic) . '" width="10%"><br>';
}

?>