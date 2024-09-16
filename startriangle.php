<?php
//program of print star triangle.
$n = 5;
for ($j = 0; $j <= $n ; $j++)
{

for($i = 5- $j ;$i > 0;  $i--){
    echo " *";
}

echo "<br>";
}

print_r("--------------<br>");

for ($i = 1 ; $i <= 5 ;$i++)
{
    for($j = 0 + $i; $j <= 5 ; $j++)
    {
        echo "* ";
    }
    echo "<br>";
}

print_r("-------------<br>");

for ($i = 5 ; $i >= 1 ;$i--)
{
    for($j = 0 + $i; $j <= 5 ; $j++)
    {
        echo "* ";
    }
    echo "<br>";
}

?>