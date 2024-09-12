<?php
/*
isset() check variable has been initialized && !null
empty() check variable is considered "empty" 
 -> null, 0, false, or an empty string or array
*/

//retrieve & checked element's value using ?:
$cust=empty($_GET["cust"])?"":$_GET["cust"];

//retrieve & checked element's value using IF..ELSE
if(isset($_GET["base"]))
	$base=$_GET["base"];
else
	$base="";

$type = !empty($_GET["type"])?$_GET["type"]:"";

//retrieve & checked element's value using ?? (null coalescing operator)
$src1 = $_GET["src1"]??"";
$src2 = $_GET["src2"]??"";

?>
<p>Customer Name: <?php echo $cust?></p>
<p>Base: <?php echo $base?></p>
<p>Type: <?php echo $type?></p>
<p>Source: <?php echo $src1;?>&nbsp;&nbsp;<?php echo $src2;?></p>
<p>Topping:
<?php
//retrieve data from listbox
$topping = empty($_GET["top"])?array(""):$_GET["top"];
foreach ($topping as $item){
	echo $item, "<br>";
}
$remark=empty($_GET["descr"])?"":$_GET["descr"];
$odate=empty($_GET["odate"])?"":$_GET["odate"];
$tqvm=empty($_GET["txtSecret"])?"":$_GET["txtSecret"];

$delivery = date_create($odate);
date_add($delivery,date_interval_create_from_date_string("1 days"));

?>

<p>Remark: <?php echo $remark?></p>
<p>Order Date: <?php echo $odate?></p>
<p>ETA: <?php echo date_format($delivery,"Y-m-d");?></p>
<p><?php echo $tqvm?></p>