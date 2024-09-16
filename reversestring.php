<?php
// reverse string using php functions.

$str  = "Krishna";
echo "String Reverse : ".strrev($str);
// echo "<br>Upper String:".strtoupper($str);

//without string functions.

$string  = "JAVATPOINT";
$stringlength = strlen($string);
echo "<br>".$stringlength."<br>"; 

for($i = $stringlength - 1 ; $i >= 0 ; $i--)
{

    echo "i value $i = ".$string[$i]. "<br/>";
    // $reverse .= $string[$i];

}
// echo "<br>Reverse string is : $reverse";


?>