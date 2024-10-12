<!-- Q1. $color = array('white', 'green', 'red', 'blue', 'black');
Write a script which will display the following string -
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
and the words 'red', 'green' and 'white' will come from $color. -->

<?php
    $color = array('white','green','red','blue','yellow');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>The memory of that scene for me is like a frame of film forever frozen at that moment: the <?php echo $color[2]; ?> carpet, the <?php echo $color[1] ?> lawn, the <?php echo $color[0] ?> house, the leaden sky. The new president and his first lady. - Richard M. Nixon"</p>
</body>
</html>



<!-- ---------------Problem 1 solution ends------------------- -->

<!-- Q2. $color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,

. green
. red
. white -->

<?php
    $color2 = array('white','green','red');
    echo implode(',', $color2);
    echo '<br />';
    
    echo '<ul>';
    foreach ($color2 as $color) {
    echo "<li>$color</li>";
}
echo '</ul>';

?>



<!-- ---------------Problem 2 solution ends------------------- -->

<!-- Q3. $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.

Sample Output :
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin  -->

<?php

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

echo  "The capital of Netherlands is" . ' '. $ceu["Netherlands"] . "<br>";
echo  "The capital of Netherlands is" . ' '. $ceu["Greece"] . "<br>";
echo  "The capital of Germany is" . ' '. $ceu["Germany"] . "<br>";

?>


<!-- ---------------Problem 3 solution ends------------------- -->