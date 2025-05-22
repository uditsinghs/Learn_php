<?php
$num = 12.3;
echo var_dump(value: $num);
echo "<br>";

$str = "udit";
echo var_dump($str);
echo "<br>";

$bool = true;
echo var_dump($bool);
echo "<br>";

$arr = array(1, 2, "udit", 4.5, true);
echo var_dump($arr);
echo "<br>";

class Car{
  public $color;
  public $model;
  public function __construct($color, $model){
    $this->color = $color;
    $this->model = $model;
  }

  public function showCarDetails(){
    return "Car color is: " . $this->color . " and model is: " . $this->model;
  }
}

$myCar = new Car("red", "BMW");
echo var_dump($myCar);
echo "<br>";
echo $myCar->showCarDetails();
echo "<br>";

// we cna change the dataTtype of a a variable
$myCar = 12.3;
echo var_dump($myCar);
echo "<br>";
$myCar = (string)$myCar;
echo "<br>";
echo $myCar;
echo "<br>";
echo var_dump($myCar);

