<?php
    #parameter, X parameter, return value & X return value
    /* 
        function functionName(param list){
            return valueToReturn;
        }
    */

    #not return value but has param
    function findPrice($price){
        echo $price;
    }

    #return value & has param
    function findTotalPrice($price,$quantity){
        return $price*$quantity;
    }

    #return value & has param & has default param
    function findPriceDiscount($price,$quantity,$discount=0){
        return $price*$quantity(100-$discount)/100;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Function</title>
</head>
<body>

<?php 
    $upc=10000;
    $qty=2;
?>

Unit Price: <?=number_format($upc)?><br>
Total Price: <?=findTotalPrice($upc,$qty)?><br>
Price w/o Discount: <?=findPriceDiscount($upc,$qty)?><br>
Price w/ 10% Discount: <?=findPriceDiscount($upc,$qty,30)?><br>
Unit Prioce: <?=number_format($upc,2,".",",")?><br>

</body>
</html>