<?php

$con=new mysqli('localhost','root','','newcrud');

    // if($con){
    //     echo "Connect Successfully";
    // }else{
    //     die(mysqli_error($con));
    // }

    // or

    if(!$con){
        die(mysqli_error($con));
     }

?>