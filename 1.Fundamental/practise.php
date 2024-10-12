<?php

// $cars = array('Mecedes Benz', 'Hilux', 'Highlander', 'Hummer', 'Limozien');
// var_dump($cars);



// $var = 50;
// if ($var>0){
//     echo ("Positive as <br>");
//     echo ("greater than 0");
// }


//     $abc = 'abcdefghijklmnopqrstuvwxyzABC'; // string(15) "abcdefghijklmnopqrstuvwxyzABC"
//     $num = 20;      // number(20)
//     $pi = 3.1415;   // double(3.141)
//     $bool = true;   // boolean(true)

//     $sabnaz_result = array(5,4.0,'a',true,1,5,5);

// //    echo  gettype($sabnaz_result);
//    var_dump($abc);
//    echo '<br>';
//    var_dump($num);
//    echo '<br>';
//    var_dump($pi);
//    echo '<br>';
//    var_dump($bool);
//    echo '<br>';
//    var_dump($sabnaz_result);

// $good = "Good Morning.";
// $day = "Have a nice day!";

// echo $good . ' ' .  $day;











?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        $abc = 'abcdefghijklmnopqrstuvwxyzABC';
        $num = 20;
        $pi = 3.1415;
        $bool = true;
       console.log(typeof ($abc));
       alert(typeof($num));
        
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>

    <form action="#" method="Post">
        <h3>Please Input Your name</h3> <br>
        <input type="text" name="name"> 
        <button type="submit">Submit Now</button>
    </form>



    <?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>
    
</body>
</html>