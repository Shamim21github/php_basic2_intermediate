<?php

//PHP coding standard/convention is fixed with : Php-FIG(Php framework interupt group)

#special characters : "\n"=new line; "\t"=tab;"\v"=vertical character; "\d"=delete character;  "\s"=space characters; "\e"=escape character



//PHP functions are one of the core building blocks for organizing code into reusable and maintainable components


#Basic Syntax
function functionName() {
    // Code to be executed
}

// You can call a function by its name:
functionName();

// ----------------------

#Function Naming Rules
// Function names must start with a letter or underscore, followed by any number of letters, numbers, or underscores.
// Function names in PHP are case-insensitive, so foo() and FOO() are the same.

// ------------------


#3.Return Values
function sub($x, $y){
    return ($x - $y);
}

$subtract = sub(20, 14);
echo $subtract;
echo "<br>";

//If no return is provided, the function returns NULL by default

// --------------------------------

#4.Function Parameters

// You can pass data into a function via parameters inside the parentheses.
// Default parameters: If you want to provide default values, you can do so:

function Greetings($name){
    return "Hello! $name";
}
$wel = Greetings('Sister');

echo $wel;
echo "<br>" ;

// -------------

#5. Variable Scope

function test(){
    $x =10; //local variable
    return $x;
}

echo test();
// echo $x; // Error: Undefined variable $x


echo "<br>" ;

#6.Global Scope

$y =20;

function testGlobal(){
    global $y;
    return $y;
}

echo testGlobal(); // Outputs: 20

echo "<br>" ;

// -------------------

#7.Anonymous Functions (Closures)

// Anonymous functions, or closures, allow you to define functions without a name.

$message = function($name2){
    return "Ami, $name2!";
};
echo $message("valo achi");



echo "<br>" ;
// ------------

#8.Arrow Functions

$double = fn($x) => $x *2;
echo $double (5);


echo "<br>" ;
// ------------------

#What is the difference between a function and a method in PHP?
// A function is a standalone block of code, while a method is a function defined inside a class and associated with an object in object-oriented programming.


#What is the scope of variables inside a function in PHP?
// Variables inside a function are local to that function and cannot be accessed outside of it.

#What is the difference between local and global variables in PHP?
// Local variables are defined within a function, while global variables are defined outside any function. To access a global variable inside a function, you must use the global keyword.



#`````````````````````````````````````30 PHP Function-Related Practical Interview Questions``````````````````````````````````````

/*
Write a function that returns the square of a number.
Create a function that takes two arguments and returns their sum.
How would you write a function that calculates the factorial of a number?
Write a function that takes a string and returns its length.
How can you create a function to reverse a string?
Write a function that checks if a number is even or odd.
Create a function that takes an array of numbers and returns the maximum value.
Write a function that concatenates two strings.
How would you create a function that returns the sum of all numbers in an array?
Write a function that checks if a string contains a specific substring.
How would you write a recursive function to calculate the Fibonacci sequence?
Create a function that returns the first n prime numbers.
Write a function that takes a string and capitalizes the first letter of each word.
How can you write a function that converts a string to lowercase without using PHP’s built-in strtolower() function?
Write a function that takes an array and returns it sorted in ascending order.
How do you create a function that returns the current date and time in the Y-m-d H:i:s format?
Write a function that checks if an array is associative or not.
How would you create a function that returns the sum of the digits of an integer?
Write a function that removes all spaces from a string.
Create a function that accepts a string and returns the number of vowels in it.
Write a function that generates a random password of a given length.
How would you write a function that checks if a number is prime?
Create a function that flattens a multidimensional array.
Write a function that finds and returns the second largest number in an array.
How would you create a function that returns the longest word in a sentence?
Write a function that counts the number of words in a string.
How can you create a function that checks if a string is a palindrome?
Write a function that removes duplicate elements from an array.
How would you write a function that merges two arrays without duplicating values?
Write a function that checks if a string is a valid email address.


*/



// 1.Write a function that returns the square of a number.

function square($number) {
    return $number * $number;
}
$a = square(5);
echo "Square of a number is" . " : " . $a;

echo "<br>" ;


//2.Create a function that takes two arguments and returns their sum.
function mul($m,$n){
    return $m * $n;
}

$multiplication = mul(5,3);

echo $multiplication;

echo "<br>" ;

//3.How would you write a function that calculates the factorial of a number?

function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo "<br>" ;

//#4.Write a function that takes a string and returns its length.
function stringLength($str){
    return strlen($str);
}

$abc = stringLength('abckdld');
echo $abc;



echo "<br>" ;
// ----------------

#5.Write a function that checks if a number is even or odd
function isEven($number){
    return $number %2 ==0 ?  "Even" : "Odd";
}

$evenNumberCheck = isEven(27);

echo $evenNumberCheck;

echo "<br>" ;


// ----------------

//6. Write a function that concatenates two strings

function concatenateStrings($str1, $str2) {
    return $str1 . $str2;
}

//7.How would you create a function that returns the sum of all numbers in an array?

function sumArray($arr) {
    return array_sum($arr);
}




















