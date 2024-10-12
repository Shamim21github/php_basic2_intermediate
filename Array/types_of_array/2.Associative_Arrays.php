<!-- An array with a string index where instead of linear storage, each value can be assigned a specific key -->
<!-- Arrays with named keys -->
<!-- Associative arrays use named keys (strings) to access elements instead of numeric indices.  -->

<!-- Associative arrays have keys and values -->

<?php


$name = array(
        
        'name'=> 'Shamim',
        'degrees'=> 'Honours',
        'cgpa'=> 3.43,
        'department'=> 'Geography & Environment',
        'passing_year'=> '2019'

); 

echo implode(',' , $name);
echo "<br/>";
print_r($name);
echo "<br/>";
var_dump($name);

echo "<br/>";


$person = [
    'first_name' => 'tamim',
    'last_name' => 'hasan',
    'age' => 27,
    'profession' => 'Gis Specialist',
];
// echo implode(',' , $person);

$n= $person['first_name']. ' ' . $person['last_name'];
$s= $person['age']. ', ' . $person['profession'];
echo $n . ', ' . $s;
echo "<br/>";



// $fullName = $person['first_name'] . ' '. $person ['last_name'];     
// $agePro  = $person['age'] . ', ' . $person['profession'];

// echo $fullName . ', ' . $agePro;






















?>