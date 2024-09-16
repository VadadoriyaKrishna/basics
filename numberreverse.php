<?php

//write a program for reverse a number .

$num  = 12345;
$reversed_num = 0;
while ($num > 1) {
   
    $rem =  $num % 10;
  
    $reversed_num = $reversed_num * 10 + $rem;  
   
    $num  = $num / 10;       //1234
   

                 //5
    // echo  $num . "\n";
             //1234     

 
    }

    echo "Reverse Numver Is : $reversed_num";
    
    







?>