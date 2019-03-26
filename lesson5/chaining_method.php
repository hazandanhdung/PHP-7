<?php 
// 5kg tao (30k), 4kg mit(25k), 7kg chuoi(19), 15kg xoai(12k);

// chuoi(7)->mit(4)->tao(5)->xoai(15)->bill;
class Bill {
    public $apple_price = 30000;
    public $jack_price = 25000;
    public $banana_price = 19000;
    public $mango_price = 12000;
    public $bill = 0;

    public function getApple($kg)
    {
        $this->bill += $this->apple_price*$kg;
        return $this;
    }

    public function getJack($kg)
    {
        $this->bill += $this->jack_price*$kg;
        return $this;
    }

    public function getBanana($kg)
    {
        $this->bill += $this->banana_price*$kg;
        return $this;
    }

    public function getMango($kg)
    {
        $this->bill += $this->mango_price*$kg;
        return $this;
    }
}


$myBill = new Bill();
$myBill->getApple(5)->getBanana(7)->getJack(4)->getMango(15);
var_dump($myBill->bill);