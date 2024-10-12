<!-- An array with a numeric index where values are stored linearly -->

<!-- PHP index is represented by number which starts from 0. We can store number, string and object in the PHP array. All PHP array elements are assigned to an index number by default. -->

<!-- Indexed arrays are the most common type of array in PHP. They use numeric keys to access elements, starting from 0. -->

<!-- ------------------------ -->
<!-- example : -->
<?php
$fruits = array('apple','banana','jack-fruits','orange',45,3.50);
echo $fruits[0]; //apple
echo '<br />';
echo $fruits[1]; //banana
echo '<br />';
echo $fruits[2]; //jack-fruits
echo '<br />';
echo $fruits[3]; //orange
echo $fruits[4]; //45
echo $fruits[5]; //3.50

echo '<br />';

$name = ['shamim','Honours',3.43,'Geograpy & Environment','2019-20'];
echo $name[0]; //shamim
echo '<br />';
var_dump($name);
echo '<br />';

echo '<pre>';
print_r($name);
echo '</pre>';
// echo '<br />';

// $size=array("Big","Medium","Short");  
// echo "Size: $size[0], $size[1] and $size[2]"; 




















?>