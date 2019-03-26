<?php 
class Product {
    public $name;
    public $price;

    public static $color ='blue';

    public function __construct($x = 'Vietname')
    {
        $this->name = 'Iphone 6';
        $this->price = 2000;
        // $this->branch = $this->getPrice('Huawei');
        $this->size = 150;
        $this->country = $x;

    }
    public function getPrice()
    {
        $this->branchName = self::__destruct();
        return $this->branchName;
    }
    public function __destruct()
    {
        $this->location = 'Asia';
        return $this->location;
    }
}
$myProduct = new Product('China');


var_dump($myProduct->getPrice());