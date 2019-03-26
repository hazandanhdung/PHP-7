<?php
//Array
$cars = array("Volvo", "BMW", "Totoya");
echo "I like" . $cars[0] . "," . $cars[1] . "and " . $cars[2] . ".";

//Get The Length of an Array
// count()
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";
echo "<br>";
//Loop Through an Indexed Array

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
// Loop

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
// /PHP Associative Arrays

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo $age['Peter'];
echo "<br>";
echo $age['Ben'];
//Multidimensional Array
echo "<br>";
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

 echo $cars[0][2];
 echo "<br>";
 echo $cars[1][1];
 echo "<br>";
 echo $cars[2][1];