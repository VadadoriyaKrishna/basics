<?php
//1. Using array function.


$arr1 = [8,4,2,2,3,6,5,10,8];
var_dump($arr1);
sort($arr1);
print_r('<pre>');
print_r($arr1);

//2. without array function.

// echo count($arr2);
// while (count($arr1) > 1)
// {
//     $arr2 =[];
    // for ($i = 0 ; $i < count($arr1) ; $i++)
    // {
    //     echo $arr1[$i];
    // }
// }


$arr2 = [7,3,1,2,9];
print_r($arr2);
for ($i =0 ; $i  < count($arr2) ; $i++)
{
    for($j =  $i + 1 ; $j < count($arr2) ; $j++)
    {
        if ($arr2[$i] > $arr2[$j])
        {
            $temp = $arr2[$i];               //7
            echo "<br>".$temp;
            $arr2[$i] = $arr2[$j];           //3
            echo "<br>".$arr2[$i];
            $arr2[$j] = $temp;               //7
            echo "<br>".$arr2[$j];
            echo "<br>------------<br>";
        }
        // echo "<br>________<br>";
        // echo  $arr2[$i];
        // echo  "<br>".$arr2[$j];
    }
    // echo "<br>after ascending order : "  . implode(",",$arr2);    //array into str
}
print_r($arr2);
        

        // if ($arr2[$i]  > $arr2[$i+1])
        // {
        //     $arr2[$i] = $arr2[$i+1];

        //     echo $arr2[$i];
         
        //     // $arr2[$i +1] =  $arr2[$i];

            


        // }

        echo "  ".$arr2[$i];









?>