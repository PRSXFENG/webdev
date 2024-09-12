<?php 
#embedded PHP < ? = expression ? >
?>
<!DOCTYPE html>
<html>
<head>
    <title>Embedded PHP</title>
</head>
<body>
<?php
    $text="C++";
    echo "<h3>I like " . $text . "</h3>"; #bad    
    echo "<h3>I like $text</h3>"; #bad    
?>
    <h3>I like <?=$text?></h3> <!--good-->
<?php 
    $pay=2000;
    define("EPF",0.11);
?>
    <h3>NET PAY: <?=$pay*(1-EPF)?></h3> <!--good-->
<?php
    if($pay>10000){
?>
    <p> You are <?=$pay?> T20</p>
<?php } else{ ?>
    <p> <?=$pay?> : B40</p>
<?php } ?>
</body>
</html>