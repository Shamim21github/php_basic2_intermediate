<!-- <?php...?> this is called : Canonical PHP tags -->


<?php

// PHP code illustrate the whitespace insensitivity
$var1         =     15;
$var2 =
30;
$sum = $var1
+
$var2;
 
// "\n" for new line
echo $sum, "\n";
-----------------------------


// Here we can see that all echo 
// statements are executed in the same manner
  
$variable = 25;
echo $variable;
ECHO $variable;
EcHo $variable;
 
// but this line will show RUNTIME ERROR as
// "Undefined Variable"
echo $VARIABLE;

// Multiline comments : /* */

/* avvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
gggggggggggggggggggggggg
rrtttttttttttttttttttt
hggggggggggggggggggg
*/
// single line comments : (//) (#)
//hhhhhh
#rrrrrr

?>