<?php

$x = 5;
$y = "5";
 if($x === $y) {
    echo "x is equal to y";
} else {
    echo "x is not equal to y";
 }
 echo "<br>";

 $x = 1;
 $y = 2;

 echo  $x>$y ? " $x is greater than $y" : " $x is not greater than $y";

 echo "<br>";

 $num =  5;
 $num2 = 10;
 if($num < $num2 and $num2 > $num) {
    echo "true";
 } else { 
  echo " false";
  }
 echo "<br>";

//  shortend if 
  $num3 = 5;
  if($num3 < 10) $greet = "Welcome";
  echo $greet; 


  echo "<br>";
  $a = 13;

if ($a > 10) {
  echo " $a is Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}


// switch statement

echo "<br>";

$favcolor = "yellow";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br>";

// one more exaple

$day = 7;

switch($day){
  case "1":
    echo "Monday";
    break;
    case "2":
      echo "Tuesday";
      break;
      case "3":
        echo "wednesday";
        break;
        case "4":
          echo "Thursday";
          break;
          case "5":
            echo "Friday";
            break;
            case "6":
              echo "Saturday";
              break;
              case "7":
                echo "Sunday";
                break;
                default:
                  echo "Invalid day";
}