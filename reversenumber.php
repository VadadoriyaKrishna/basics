<?php
// reverse number.

$number = 1234;
echo "reverse number is :".strrev($number);


$reverse_number = 0; 
while($number > 1)
{
    $rem = $number % 10;    //4
    // echo "<br>".$rem;
    $reverse_number = $reverse_number * 10 + $rem;   //4
    $number = $number / 10;       //123
   
}
echo "<br>reverse number is : $reverse_number";





?>