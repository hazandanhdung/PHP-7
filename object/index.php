<?php
class Game
{
    public $price;
    public $name;
    public $photo;
    public $dir = 'game/';

    public function print_game()
    {
        echo $this->name;
        echo $this->price;
        echo $this->photo;
    }
}
$game = new Game; // $game is the object type of Game class
$game->name = 'Bioshock Infinite';
$game->price = 14.999;
$game->photo = ' bioshock-infinite.jpg';

$game->print_game();
echo "<br>";
echo "<br>";

//
class Customer
{
    public $id = 1;
    public $name;
    public $email;
    public $balance;
    public function getCustomer($id)
    {
        $this->id = $id;
        return $this->id;
    }
    public function __construct($id, $name, $email, $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
    }
    public function getEmail()
    {
        //    return $this -> email;
        return $this->email;
    }
    public function getId()
    {
        return $this->id;
    }
    // public function __destruct() {
    //     echo "Destruct Ran...";
    // }

}
// $customer = new Customer(1000,"DungNguyen", "hazandanhdung@gmail.com" ,1);

// echo $customer -> getId();

class Subscriber extends Customer
{
    public $plan;
    //
    public function __construct($id, $name, $email, $balance, $plan)
    {
        parent::__construct($id, $name, $email, $balance);
        $this -> plan = $plan;
    }
    public function getEmail(){
        return $this -> email;
    }
}
 $subscriber = new Subscriber(1000,"DungNguyen", "hazandanhdung@gmail.com" ,1, "Pro");
 echo $subscriber -> getEmail();