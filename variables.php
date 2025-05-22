<?php
// $x = 5;
// $y = 10;

// function myTest() {
//   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// myTest();
// echo $y + $x;

function myTest(): void{
    static $x = 0;  // staic is used to declare a static variable
    // static variables retain their value between function calls
    // $x = 0; // this will reset the value of x to 0 every time the function is called
  
    echo $x;
    $x++;
  
}

myTest();
echo "<br>";  
myTest();
echo "<br>";  
myTest();
echo "<br>";  
myTest();
echo "<br>";  
myTest();



