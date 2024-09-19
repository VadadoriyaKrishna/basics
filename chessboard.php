<!DOCTYPE html>
<html>
<body>
<?php
echo '<table width="300" cellspacing="0" cellpadding="0" border="1">';
for($row = 0 ;$row < 8 ; $row++)
{
	echo "<tr>";
	for($col  = 0 ; $col < 8 ; $col++)
    {	
    	if(($row + $col) % 2 == 0)
        {
        	//echo " black";
            echo "<td width='40' height='40' bgcolor='black'></td>";
        }
        else{
        	echo "<td width='40' height='40' bgcolor='white'></td>";
        }
        //echo (" ". $col);
    }
    echo "</tr>";
    echo "<br>";
	
}
echo "</table>";
?>
</body>
</html>
