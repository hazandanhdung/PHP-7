
<?php 
// class truou tuong
abstract class Pizza {
    public $name = 'pizza';
    const BRANCH = 'Lotte';
    public function getName()
    {
        $this->name = 'I love Pizza';
    }
    protected abstract function getPizza();
}


// 1. Abstract class khong duoc khoi tao doi tuong
// 2. chi co abstract class moi chua abstract method
// 3. tat ca class ke thua abstract class phai khai bao lai toan bo abstract method
// 4. chi co method abstract, khong co thuoc tinh abstract

// $xxx = new Pizza();