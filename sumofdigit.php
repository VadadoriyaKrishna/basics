<?php
// write a program for sum of numbers ex 123 ans 6.

$number  = 123;
$sum = 0;
while ($number > 0) {
    $sum += $number % 10;    // 3                   
    $number = (int)($number / 10);   // 12

}
echo "sum of numbers " .$sum;


$number = 12;

$sum = 0;
$lengthofnumber = strlen($number);
echo "<br>".$lengthofnumber;

for ($i = 0; $i < $lengthofnumber ; $i++)
{

    $sum += (int)$number[$i];
    // $sum += $sum + $number[$i];
 

}
echo "Sum of numbers : $sum";


$num = 12;
$numarray = str_split((string)$num);
$sum = 0;
foreach ($numarray as $values)
{
    // echo "<br>$values";
    $sum += $values;
   
}
echo "<br>sum of numbers=".$sum;


?>