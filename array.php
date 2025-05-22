<?php
// index array
$array = ["a", "b", "c", "d", "e"];
echo "<pre>";
print_r($array);  
echo "</pre>";


// associative array
$array = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

echo "<pre>";
print_r($array);
echo "</pre>";


// multiDiemnsional  array
$array = [
    "name" => "John",
    "age" => 30,
    "contact" => array("534535344646","6443535446"),
    "city" => "New York"
];

echo "<pre>";
print_r($array);
echo "</pre>";