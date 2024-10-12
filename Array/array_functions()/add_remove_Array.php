            <!-- Adding Elements: -->

<!-- 1. array_unshift(): Adds one or more elements to the beginning of an array.
2. array_push(): Adds one or more elements to the end of an array. -->

<?php
                    #array unshift
$name =['tamim','naim','sakib'];
array_unshift($name, 'shamim');
print_r ($name); //shamim,tamim,naim,sakib

echo '<br>';
                    #array push
$name =['tamim','naim','sakib'];
array_push($name,'qurishi');
print_r ($name); //tamim,naim,sakib,qurishi

echo '<br />';

?>


            <!-- Removing Elements: -->

<!-- 1.array_shift(): Removes and returns the first element from an array.

2.array_pop(): Removes and returns the last element from an array.

3.unset(): Unsets (removes) a specific element by its key. This function does not return the removed value, but it effectively removes the element from the array. -->


<?php


                    #array shift
$name =['tamim','naim','sakib'];
array_shift($name, );
print_r ($name); //naim,sakib

echo '<br>';

                    #array pop
$name =['tamim','naim','sakib'];
array_pop($name);
print_r ($name); //tamim,naim

echo '<br>';

                    #unset
$name =['tamim','naim','sakib','qurishi','zakir','limon','abbas'];
unset($name[3]);//remove 3no index(qurishi)
print_r ($name); //tamim,naim,sakib,zakir,limon,abbas


echo '<br>';

$player= ['sakib','tamim','mushi','mash','riyad','mehedi','liton'];
unset($player[5]);

// echo $player;
print_r ($player);

echo '<br>';

// If you want to print the elements of the modified array after removing an element, you should use a loop or implode the array to create a string representation before echoing it.

$player = ['sakib', 'tamim', 'mushi', 'mash', 'riyad', 'mehedi', 'liton'];
unset($player[5]);

// Use a loop to print each element
foreach ($player as $name) {
    echo $name . ', ';
}

echo '<br>';

$player = ['sakib', 'tamim', 'mushi', 'mash', 'riyad', 'mehedi', 'liton'];
unset($player[5]);

// Use implode to create a string representation
$playerString = implode(' - ', $player);
echo $playerString;

 















?>