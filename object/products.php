<?php

class Product{
    public $name;
    public $price;
    // public static $color = 'blue';
    public function __construct($x = 'Viet Nam')
    {
        $this -> name = 'Iphone 10';
        $this -> price = 2000;
        $this -> branch = $this ->getPrice();
        $this -> size = 150;
        $this -> address = "Toan Thang Kim Dong Hung Yen";
        $this -> country = $x;
    }
    public function getPrice(){
        return $this -> branch = "Aplle";
    }
}
$myProduct = new Product();
// $myProduct -> name = "Iphone";
var_dump($myProduct);
// var_dump(Product::$color);