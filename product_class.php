<?php
class product {
    public $name;
    public $price; 
    public $infor;
    function set_name($name) {
        $this->name =  $name;
    }
    function set_price($price) {
        $this -> price = $price;
    }
    function set_infor($infor) {
        $this ->infor = $infor;
    }
} 
?>