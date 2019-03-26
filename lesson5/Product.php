<?php 
require_once "interface.php";
require_once "AbstractClass.php";
require_once "Trait.php";

class Product extends Pizza implements IProduct {
    use MyTrait;
    public function getAll($x){
        return 1245;
    }
    public function getOne(){}
    public function All() {
        echo 'All method';
    }
    public function get(){}
    public static function getSome(){}
    public function getPizza(){}
}
$n = new Product();

echo $n->na;

// $xxx = new Pizza();