<!-- We know the types of variable&  all types of information on variable is var_dump function -->

<?php


$name = "Shamim";
$age = 27; $weight = 54;
$height = 5.4;
$student = true;
$cgpa = array(3.43,3.05,3.44,3.71);

var_dump($name); //output : datatype name:string, total character:6, "Shamim" = string(6) "Shamim"
echo '<br>';
var_dump($age); //output : datatype name : int, value:27  = int(27)
echo '<br>';
var_dump($height); //output : datatype name: float, value: 5.4 = float(5.4)
echo '<br>';
var_dump($student); //output : datatype name : bool, value: true = bool(true)
echo '<br>';
var_dump($cgpa); //output : datatype name : array, array numbers: 4 ,index-> { [0]=> float(3.43) [1]=> float(3.05) [2]=> float(3.44) [3]=> float(3.71) }= array(4) { [0]=> float(3.43) [1]=> float(3.05) [2]=> float(3.44) [3]=> float(3.71) }

$alfa = 'abcdef';
echo '<pre>';
print_r ($alfa);
echo '</pre>';



$abc = 'abcdefghijklmnopqrstuvwxyzABC'; // string(15) "abcdefghijklmnopqrstuvwxyzABC"
$num = 20;      // number(20)
$pi = 3.1415;   // double(3.141)
$bool = true;   // boolean(true)

$sabnaz_result = array(5,4.0,'a',true,1,5,5);

//    echo  gettype($sabnaz_result);
var_dump($abc);
echo '<br>';
var_dump($num);
echo '<br>';
var_dump($pi);
echo '<br>';
var_dump($bool);
echo '<br>';
var_dump($sabnaz_result);


?>