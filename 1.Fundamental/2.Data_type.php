<?php

//PHP coding standard/convention is fixed with : Php-FIG(Php framework interupt group)

#special characters : "\n"=new line; "\t"=tab;"\v"=vertical character; "\d"=delete character;  "\s"=space characters; "\e"=escape character



                    //Data types (8):
//string, integer,float,boolean,Array, Object, Null,Resource 

//PHP data types are used to hold different types of data or values. PHP supports 8 primitive data types that can be categorized further in 3 types: Scalar Types (predefined), Compound Types (user-defined), Special Types.

#Scalar Types : It holds only single value. There are 4 scalar data types in PHP. (string, boolean,integer, float)

#Compound Types: There are 2 compound data types in PHP. (array, object)

#Special Types :There are 2 special data types in PHP. (resource, null)


//to know the data types of php using : gettype() function

// practise-1
$abc = 'abcdefghijklmnopqrstuvwxyzABC';
$num = 20;
$pi = 3.1415;
$bool = true;

echo gettype($pi); // double/float













