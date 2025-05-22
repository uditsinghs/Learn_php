<?php

$i = 1;

while($i < 10){
  echo "The number is: $i <br>";  
  $i++;

  if($i == 5){
    break;
  }


}


$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "<h1 style='color:$x'>$x</h1>";

}

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  // echo "$x : $y <br>";
  $keyValue = $x . " : " . $y;
  echo "<h1 style='color:red'>$keyValue</h1>";
}

// object forech

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x +_%^&$#@!~% $y <br>";
}



$myArr = [1, 2, 3, 4, 5];

foreach ($myArr as $num) {
  if ($num == 4) {
    break;
  }
  echo "The number is: $num <br>";
}
