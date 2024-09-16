<?php
//sum of two numbers.

$a = 10;
$b  = 20.02;
$total  = $a + $b;
echo  "Sum of two numbers is $total";
echo "<br>";

//multiplication of two numbers.
$n1 = 10.0;
$n2  = 20;
$mul  = $n1 * $n2;
echo "multiplication of two numbers is $mul";
echo "<br>";

//division of two numbers.
$n1 = 1;
$n2 = 0;
if  ($n2 == 0) {
    echo "<br>Error! Division by zero is not allowed";
}
else{
$div = $n1 / $n2;
echo "division of two numbers is $div";
}

//Program for find number is odd or even.
$n = 2;
if ($n % 2 == 0)
{
    echo "<br>$n is even number";

}
else{
    echo "<br>$n is odd number";
}








?>