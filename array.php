<?php
//1.numeric/index array.

$fruits=  array("apple", "banana", "cherry");
$odd_number = [1,3,5,7];
$myarray =array_merge($fruits,$odd_number);

// print_r($myarray);
//using for each loop.
// foreach($fruits as $fruit)
// {
//     echo $fruit."<br>";
// }

//using for loop.

for($i =0 ;$i < count($fruits) ;$i++)
{
    echo $fruits[$i]."<br>";
}




//access value of array using index value.

print_r($fruits[1]);

//Associative array.

$employee = ["id" => 1,"name" => "abc","age" => 20];

// print_r($employee['name']);

foreach ($employee as $x => $y)
{
    echo "<br> $x : $y ";
}

echo "<br>-----------------------------------";

$staff = [
    [1,"staff1",20],
    [2,"staff2",40]
];

//  print_r($staff[0]['name']);
// print_r($staff);

//using for loop
$arraylen = count($staff);
print_r($arraylen);


echo "<br>";
for($row = 0 ; $row < $arraylen; $row++)
{
    for($col =0 ; $col < 3 ;$col++)
    {
    echo "  ".$staff[$row][$col];
    }
    echo "</br>";
}


echo "-----------------------------------";

$Staffs = [
    [
        'Name' => 'Derek Emmanuel',
        'Reg_No' => 'FE/30304',
        'Email' => 'derekemmanuel@gmail.com'
    ],
    [
        'Name' => 'Rubecca Michealson',
        'Reg_No' => 'FE/20003',
        'Email' => 'rmichealsongmail.com'
    ],
    [
        'Name' => 'Frank Castle',
        'Reg_No' => 'FE/10002',
        'Email' => 'fcastle86@gmail.com'
    ]
];
echo "<br>";
echo $Staffs[1]["Name"];


?>