<?php

$car = array(
  0 =>"car1",
  1=> "car2",
  2=> "car3",
  3=> "car4",
  4=> "car5",
  5=> "car6",
);
echo "<pre>";
print_r( $car );
echo  "</pre>";
//  array_push($car,"car7","car8");
// echo "<pre>";
// print_r( $car );
// echo  "</pre>";


// implode

$arr = [
  "hii",
  "I",
  "am ",
  "udit"

];


$str = implode(" ", $arr ); 
echo $str;

$Arr2 = explode(" ", $str );
  print_r( $Arr2 ); 