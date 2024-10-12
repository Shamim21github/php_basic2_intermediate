<!-- Multidimensional arrays are arrays that contain other arrays. They are useful for representing tabular data or nested structures. -->

<!-- The multidimensional array is an array in which each element can also be an array and each element in the sub-array can be an array or further contain array within itself and so on. -->

<!-- An array containing one or more arrays and values are accessed using multiple indices -->

<!-- PHP multidimensional array is also known as array of arrays. It allows you to store tabular data in an array. PHP multidimensional array can be represented in the form of matrix which is represented by row * column. -->

<?php 



$employee = array
    (
        array(1,"sonoo",400000),  
        array(2,"john",500000),  
        array(3,"rahul",300000)
    );

for($row=0;$row<3; $row++){
    for($col=0;$col<3;$col++){
        echo $employee[$row][$col].' ';
    };
    echo "<br/>";  
}

$cars = array (
    array("Volvo",22,1),
    array("BMW",15,2),
    array("Saab",25,3),
    array("Land Rover",17,4)
  );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>"; //Volvo: In stock: 22, sold: 18.
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>"; //BMW: In stock: 15, sold: 13.
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";//Saab: In stock: 5, sold: 2.
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";//Land Rover: In stock: 17, sold: 15.

//print Row Number
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }

//print Column Number  

  for ($col = 0; $col < 3; $col++) {
    echo "<p><b>Column number $col</b></p>";
    echo "<ul>";
    for ($row = 0; $row < 4; $row++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}











?>