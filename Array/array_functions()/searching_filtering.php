                        <!-- Searching and Filtering -->

<!-- Searching and filtering arrays is a common operation in PHP, and there are various function techniques you can use to achieve this. Here are some common methods for searching and filtering arrays: -->

<!--1.in_array(): This function checks if a specific value exists in an array and returns a boolean (true or false). -->

<!--2.array_search(): This function searches for a value in an array and returns the corresponding key if found or false if not found. -->

<!-- 3.array_filter(): This function filters an array based on a callback function and returns a new array containing the elements that meet the specified criteria. -->

<!--4.array_map(): This function applies a callback function to each element in an array and returns a new array with the modified elements. -->

<!--5.array_reduce(): This function reduces an array to a single value using a callback function. It iteratively processes the elements and accumulates the result. -->


<?php 
                            #in_array (function checks if a specific value exists in an array)

$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
echo '<br>';

$result = [1,2,3,4,5,6,7,8,9];

if(in_array(2,$result)){
    echo 'true/found';
}else{
    echo 'false/not found';
}
echo '<br>';

                            #array_search (function checks if a specific value exists in an array)

$color=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("green",$color);

echo '<br>';

                            #array_filter(based on a callback function and returns a new array)

$numbers = [1, 2, 3, 4, 5, 6];
$filtered = array_filter($numbers, function($value)
                            {return $value % 2 == 0;}
                        );
print_r($filtered);












?>


                        