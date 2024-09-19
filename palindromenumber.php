<?php

// number is palindrome or not.
// $n = 121;
// $reversed = strrev($n);
// if ($n == $reversed) {
//     echo "number is palindrome";
// }
// else{
//     echo "number is not palindrome.";
// }


$number = 141       ;
// $num =  $number;

while ($number >=  1) {
    $rem = $number  % 10;       //1
    // echo "<br>remainder is : $rem";
    
    $rev = $rev * 10 + $rem ;      //1
    // echo "<br>rev is : $rev";
    $number = (int)($number / 10);       //12
    // echo "<br>number is : $number";
    

}
// echo "reverse number is : $rev";
// echo  "<br> $num";
// if ($num == $rev)
// {
//     echo "<br>$num number is palindrome";

// }
// else 
// {
//     echo "<br>$num number is not palindrome";
// }

// if ($number == $rev)
// {
// echo "<br>palindrome number :  $rev";
// }
// else
// {
//     echo "<br>not palindrome number : $rev"; 
// }




// $num = $tets = 123456;
// $reversed_num = 0;
// while ($num > 1) {
   
//     $rem =  $num % 10;
  
//     $reversed_num = $reversed_num * 10 + $rem;  
   
//     $num  = $num / 10;       //1234
//     print("-------");
//     print($num); 
//     print("======");
//                  //5
//     // echo  $num . "\n";
//              //1234     

 
//     }
    // print($reversed_num);
    // print($num);
    //  


$number = (string)121;
// echo "<br>Number is : $number";

$strlen = strlen($number);
// $reversed_num = 0;

// echo "<br>length of number :".$strlen;

for( $i = $strlen - 1 ; $i >= 0 ; $i--)
{
    $reversed_num .= $number[$i];
    // echo "<br> $reverse_num";
}
echo "<br>Reverse Number is  : $reversed_num";
if( $reversed_num == $number){
    print("number is true");
}
else{
    print("number is false");
}

?>