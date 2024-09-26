<?php
/*
isset() check variable has been initialized && !null
empty() check variable is considered "empty" 
 -> null, 0, false, or an empty string or array
*/

//REQUEST to retreive web form data
//retrieve & checked element's value using ?:
$cust=!empty($_REQUEST['cust']) ? $_REQUEST['cust'] :"";

//retrieve & checked element's value using IF..ELSE
if(isset($_POST['base']))
    $base = $_POST['base'];
else
    $base = "";

$type = !empty($_POST['type']) ? $_POST['type'] : "";

//retrieve & checked element's value using ?? (null coalescing operator)
$src1 = $_POST['src1'] ?? ""; # $src1 = isset($_POST['src1'] ?? "";)?$_POST['src1']:"";
$src2 = $_POST['src2'] ?? "";

?>
<p>Customer Name: <?php echo $cust?></p>
<p>Base: <?=base?></p>
<p>Type: <?=type?></p>
<p>Source: <?=$src1?>&nbsp;&nbsp;<?=$src2?></p>
<p>Topping:
<?php
//retrieve data from listbox
$topping = !empty($_POST['top']) ? $_POST['top'] : array("");
foreach($topping as $item)
    echo $item."&nbsp;&nbsp;";
$remark=!empty($_POST['descr']) ? $_POST['descr'] : "";
$odate=!empty($_POST['odate']) ? $_POST['odate'] : "";
$tqvm=!empty($_POST['txtSecret']) ? $_POST['txtSecret'] : "";

$delivery = date_create($odate); #datetime
date_add($delivery, date_interval_create_from_date_string('1 days'));

?>

<p>Remark: <?=$remark?></p>
<p>Order Date: <?=$odate?></p>
<p>ETA: <?=date_format($delivery, "Y-m-d")?></p>
<p><?=$tqvm?></p>