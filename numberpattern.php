<?php
echo "<br>----------------<br>";
$n = 4;
for($i = 0; $i < $n; $i++)
{
    for($j = $i + 1; $j <= $n * 3 ; $j = $j + 4)
    {
        echo " ".$j;
    }
    echo "<br>";
}
echo "<br>----------------<br>";
$n = 5 ;
for($i = 1; $i <= $n; $i++)
{
    for ($j = 1; $j <= $n; $j++)
    {
        echo " *";


    }
    echo "<br>";
}
echo "<br>----------------<br>";
for($i = 1; $i <= $n; $i++)
{
    for ($j = 1; $j <= $n; $j++)
    {
        if($i == 1 OR $i == $n){
            echo " *";
        }
        elseif($i == 2 && $j == 1 OR $i == 3 && $j == 1 OR $i == 4 && $j == 1 )
        {
        	echo " *";
        	
		}
        elseif($i == 2 && $j == 5 OR $i == 3 && $j == 5 OR $i == 4 && $j == 5 )
        {
        	echo " #";
        	
		}
        else{
        	echo $j;
		}


    }

    echo "<br>";
}
echo "<br>----------------<br>";
$n = 5;
        for($i=0;$i<$n;$i++){
            for($j=0;$j<$n;$j++){
                if($i==0 || $i==$n){
                    echo "* ";
                }else{
                    if($j==0 || $j==$n){
                        echo "* ";
                    }else{
                        echo "$j ";
                    }
                }
            }
            echo "<br/>";
        }




echo "<br>----------------<br>";
$n = 5;
        for($i=0;$i<$n;$i++){
            for($j=0;$j<$n;$j++){
                if($i==0 || $i==$n){
                    echo "* ";
                }else{
                    if($j==0 || $j == $n -2){
                        echo "* ";
                    }else{
                        echo "$j ";
                    }
                }
            }
            echo "<br/>";
        }


?>
