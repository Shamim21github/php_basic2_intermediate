<!--1.sort(): This function sorts an array in ascending order based on values. It directly modifies the original array. -->

<!--2.rsort(): This function sorts an array in descending order based on values. It also modifies the original array. -->

<!--3. asort(): This function sorts an associative array in ascending order based on values, maintaining key-value associations. -->

<!-- arsort(): This function sorts an associative array in descending order based on values while maintaining key-value associations. -->

<!-- ksort(): This function sorts an associative array in ascending order based on keys, maintaining key-value associations. -->

<!-- krsort(): This function sorts an associative array in descending order based on keys while maintaining key-value associations. -->

<!-- usort() and uasort(): These functions allow you to perform custom sorting by specifying a user-defined comparison function for sorting arrays based on values. -->

<!-- array_multisort(): This function is used for sorting multiple arrays based on the values of one of the arrays. It is commonly used in situations where you need to sort multiple arrays in parallel. -->


<?php

                                            #sort (ascending order based on values)

$numbers1 = [4,6,3,8,12,5,15];
sort($numbers1);
print_r($numbers1); //3,4,5,,6,8,12,15
echo '<br>';

                                            #rsort (means reversing the order of numbers)

$numbers1 = [4,6,3,8,12,5,15];
rsort($numbers1);
print_r($numbers1); //15,12,8,6,5,4,3
echo '<br>';

                                            #asort (ascending order based on values)

$fruits = ['apple' => 3, 'banana' => 2, 'cherry' => 5];
asort($fruits);
print_r($fruits);//2,3,5
echo '<br>';


                                            #arsort (descending order based on values)

$fruits = ['apple' => 3, 'banana' => 2, 'cherry' => 5];
arsort($fruits);
print_r($fruits);//5,3,2
echo '<br>';


                                            #ksort(assending order by keys)

$fruits = ['banana' => 5, 'cherry' => 9, 'apple' => 2];
ksort($fruits);
print_r($fruits);//apple,banana,cherry
echo '<br>';

$fruits = [ 3=> 'banana', 2 => 'cherry', 7 => 'apple'];
ksort($fruits);
print_r($fruits);//2,3,7
echo '<br>';



                                            #krsort(decending order by keys)

$fruits = ['banana' => 5, 'cherry' => 9, 'apple' => 2];
krsort($fruits);
print_r($fruits);
echo '<br>';

$fruits = [ 3=> 'banana', 2 => 'cherry', 7 => 'apple'];
krsort($fruits);
print_r($fruits);//7,3,2
echo '<br>';


                                            #usort() and uasort()
$fruits = ['apple', 'banana', 'cherry'];
usort($fruits, function($a, $b) {
    return strlen($a) - strlen($b);
}); //
print_r($fruits);
echo '<br>';

                                            #array_multishort

$names = ['John', 'Alice', 'Bob'];
$scores = [85, 92, 78];
$a= array_multisort($scores, $names); // Sorts $names based on $scores
print_r($names);




?>