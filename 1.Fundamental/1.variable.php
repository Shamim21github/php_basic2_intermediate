<?php

//PHP coding standard/convention is fixed with : Php-FIG(Php framework interupt group)

#special characters : "\n"=new line; "\t"=tab;"\v"=vertical character; "\d"=delete character;  "\s"=space characters; "\e"=escape character

//variable:
//         variable is just like a container/space. it can continously change.

//Php is a loosly type language.That's why you have not to worry about assigning variables types directly.

//condition of assign variable in php
// 1st using dollar($)sign;
// don't use space middle of the variable name($my name is not correct); 
// don't use dot of the variable name($my.name is not correct);
// don't use any punctuation between the variable name($my-/;:name is not correct);
// don't use any numeric sign between the variable name($my+-*/name is not correct);
// don't start with underscore/numeric number between the variable name($_/1/2myname is not correct);
//always using semi-colon at the end of the string
// ----------------------------------------------------------------

//style for variable names
#TitleCase/pascal case : $MyNameIs = starting with capital letter

#camelCase : $myNameIs = starting with small letter but the middle is capital letter

#normarl_case/snake_case : $my_name_is = using small letter with underscore

//----------------------------------------------------------------

//Coding Practise :

// #1.
// $name= "Bangladesh";
// $age= 25;

// $word="age";
// echo $word;  //output: 25
----------------------------------------------------------------

#2.
// $name= "Bangladesh";
// $age= 25;

// $word="age";

//echo $$word; //output: 25
//explain : $word= age; and $age=25
----------------------------------------------------------------

#3.
// $name= "Bangladesh";
// $age= 25;

// $word="age";

//echo 'Hello'.$name; //output: Hello Bangladesh
//explain : using dot is to concate/add to the word name
//echo "\n"; //that means new line
//or
//echo "Hello $name";//output: Hello Bangladesh


----------------------------------------------------------------

***//difference between single quote and double quoute in php
#4
//----single quote----
//$name= "Bangladesh";
// $age= 25;

// $word="age";

//echo 'Hello $name';//output:Hello $name
//explain: singe quote er modde jodi dollar($)sign thake php sheita variable hisebe treat kore na/ run kore na,$sign tai diye dei, karon php oita re sentence/normal string hisebe treat kore
.................
echo "\n"; //output: new line
................
//----double quote----
//$name= "Bangladesh";
// $age= 25;

// $word="age";

//echo "Hello $name";//output: Hello Bangladesh

//explain: double quote er modde jodi dollar($)sign thake php sheita k variable hisebe niye variable er modde ja rakha hoi tai print kore.

------------------------------------

//another updated way to print a variable
#5
//$name= "Bangladesh";
// $age= 50;

// $word="age";

//echo "Hello {$name}";//output: Hello Bangladesh
//or, echo "Hello {$name},{$age}; //output: Hello Bangladesh,50


----------------------------------------------------------------

//variable is always changable (The value of php variable is mutable/changeable)
#6

// $task="Read";
// echo $task; //output: Read

// echo "\n"; //output: new line

// $task="Write"; //output: Write
// echo $task;

//explain: at first,$task will print Read and then $task will print Write,the variable value is changing

----------------------------------------------------------------





// Problem solving Start

    //question source :  https://tutorialsclass.com/exercises/php/php-variables/

// 1. Ques : Write a program to print “Hello World” using echo only?
// Ans : echo "Hello World";
----------------------------------------------
// 2. Ques : Write a program to print “Hello PHP” using php variable?

$hello = "Hello PHP";
echo $hello;
----------------------------------------------

//3. Write a program to print “Welcome to the PHP World” using some part of the text in variable & some part directly in echo.

$world= "PHP World";

echo "Welcome to the " . $world;

-----------------------------------------------

//4. Write a program to print 2 php variables using single echo statement



$hello = "Hello, Shamim.";
$how = "How are you?";

echo $hello. ' ' .  $how ;

---------------------------------------------

//5. Write a program to print 2 php variables using single echo statement fulfillment these conditions

//Conditions:
#First variable have text “Good Morning.”
#Second variable have text “Have a nice day!”
#Your output should be “Good morning. Have a nice day!”
#You are allowed to use only one echo statement in this program.



$good = "Good Morning.";
$day = "Have a nice day!";

echo $good. ' ' .  $day ;



---------------------------------------------





// Problem solving End

?>
