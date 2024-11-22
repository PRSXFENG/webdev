<?php
    require 'lab10.7.php';
    class TuitionFee implements Fee{
        private $fee;
        public function __construct($fee=1){
            $this->fee = $fee;
        }
    }