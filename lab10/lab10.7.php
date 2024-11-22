<?php
    interface Fee {
        public function discountAmmount($rate);
        public function afterDiscount($rate);
    }
?>