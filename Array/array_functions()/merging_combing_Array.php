<!--1. `array_merge() `: This function merges one or more arrays into a new array. It appends the values of the second array to the first array. If duplicate keys exist, the values from the second array will overwrite the values in the first array. -->

<!-- 2. `+` Operator: You can use the + operator to combine two arrays. It appends the values of the second array to the first array, but it does not overwrite values with the same keys. -->

<!--3.`array_merge_recursive()`: This function merges arrays recursively. If the same key exists in both arrays, it merges them recursively. -->

<!--4.`array_replace()`: This function replaces the values of the first array with the values from the second array if they have the same keys. If a key exists in the second array but not in the first, it is added. -->

<!--5.`array_replace_recursive()`: Similar to array_replace(), but it works recursively. -->

<!--6. `array_combine()`: function in PHP is used to create a new array by using one array for keys and another array for values. It takes two arrays as input and combines them to create an associative array, where the values from the first array become the keys, and the values from the second array become the corresponding values. -->

<?php

                                        #array merge()
$player1 = ['alif','limon','karim','faisal'];
$player2 = ['himel','porosh','naim','rimon'];

$player3 = array_merge($player2,$player1);

print_r($player3);


echo '<br>';


                                        # + operator
$player4 = ['a','l','k','f'];
$player5 = ['h','p','n','r'];
                                        
$player6 = ($player4 + $player5);
                                        
print_r($player6);


echo '<br>';

                                        #array merge_recursive()
$player7 = ['alif','limon','karim','faisal'];
$player8 = ['himel','karim','naim','rimon'];
                                        
$player9 = array_merge_recursive($player7,$player8);
                                        
print_r($player9);
                                        
                                        
echo '<br>';




                                        #array_replace()
$array1 = ['a' => 'apple', 'b' => 'banana'];
$array2 = ['b' => 'blueberry', 'c' => 'cherry'];
$mergedArray = array_replace($array1, $array2);

print_r($mergedArray);
                                    
echo '<br>';

$fruits1 =['a'=> 'apple', 'b'=> 'banana', 'c'=> 'cherry', 'd'=> 'dragon'];
$fruits2 =['d'=> 'dumur', 'e'=> 'elderberry', 'f'=> 'fig', 'g'=> 'Grape','h'=> 'Huckleberry'];

$fruits3 = array_replace($fruits1,$fruits2);
print_r($fruits3);

echo '<br>';

                                        #array_replace_recursive()
$array1 = ['a' => ['apple', 'apricot'], 'b' => 'banana'];
$array2 = ['a' => 'avocado', 'c' => 'cherry'];
$mergedArray = array_replace_recursive($array1, $array2);
print_r($mergedArray);

echo '<br>';


                                    #array combine
$keys = ['name', 'age', 'city'];
$values = ['John', 30, 'New York'];

$combinedArray = array_combine($keys, $values);
print_r ($combinedArray);




?>