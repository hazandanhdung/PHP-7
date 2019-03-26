<?php 

class NguoiVietNam {

    // Hang so
    const NAME = 'dung';

    public $location = 'Hanoi';

    // Thuoc tinh tinh
    public $address = 'Vietnam';

    // thuoc tinh
    public $name = 'dung';

    private $myAccount = 200;

    public $age = 40;

    private $height = 160;
    // phuong thuc
    public $color = 'Yellow';


    // public $myname =  NguoiVietNam::NAME;
    public function getMyNames() 
    {
        // $model =  new static();
        // $model->color;
        $this->age = 20;
        $this->name = $this;
        return $this;
    }

    public static function getName() 
    {
       // return NguoiVietName::$address;
        // $model = new NguoiVietNam();
        // $model = new static();
        // $model = new self();
        // return $model->color;
        // return self::$address;
        // return $this;
        return static::$address;
    }

    public function withDraw($account){

        if($account > ($this->myAccount-10)) {
            return 'Ban rut qua so tien cho phep';
            //return 200;
        }else {
            return $account;
        }

    }

    public function getAge() 
    {
        if($this->age > 100) {
            return 100;
        } else {
            
            return $this->age;   
        }

    }
    public static function test(){
        return 'PHuong thuc tinh';
    }


}

// class NguoiHaNoi extends NguoiVietNam {
//     public static $name = 'dung con';
//     public static function getHeight(){
//         return self::$name;
//     }
// }

// $thangTeo = new NguoiVietNam();
// var_dump($thangTeo->getMyNames()->name->location);
// echo $thangTeo->age;
// $thangTom = new NguoiVietNam();
// echo(NguoiVietNam::getName()); // scope resolution operator
// var_dump( $thangTom->withDraw(195) );

// echo(NguoiVietNam::test());

// 1. tinh ke thua (inheritance)

// 2. Tinh truu tuong (abstraction)

// 3. Da hinh (polymophism)

// 4. Dong goi (encasulation)
// thuoc tinh tinh.
// phuong thuc tinh

class Product {

    public $name;
    public $price;
    public $address;
    // public $color;

    public function getName(){

    }
    public function getPrice() {

    }
}

$chily = new Product();
$chily->color = 'blue';

class Pizza extends Product {

}

class Lotte extends Pizza {

}