<?php

function familyName($fname)
{
  echo "$fname singh.<br>";
}

familyName("udit");
familyName("rajeev");
familyName("sunita");
familyName("anshika");
familyName("anjali");
familyName(fname: "sakshi");


function sumTwoNumbers($num1,$num2){
  return $num1 + $num2;
}
echo sumTwoNumbers(20,30);

echo "<br>";
function add_five($value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

echo "<br>";
// A function that do not know how many arguments it will get:
function sumMyNumbers(...$x)
 {
  echo var_dump($x);
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;