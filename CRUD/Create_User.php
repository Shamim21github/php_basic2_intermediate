<?php

include 'connect_db.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    //$sql= insert query ; `crud_1`=table_name; (name,email,mobile,password)= column name ;
$sql="insert into `crud_1`(name,email,mobile,password)values('$name','$email','$mobile','$password')";

    //to execute the insert query ($sql) to create a new variable ($result)
    $result=mysqli_query($con,$sql);

    if($result){
        //echo "data inserted successfully";
        header('Location:read_display.php');
    }else{
        die(mysqli_error($con));
    }


} 





?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>New_Crud</title>
</head>

<body>
    <div class="container my-5"></div>

    <form method="Post" class="container mx-auto" >

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your Name" name="name"autocomplete="off">    
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your Email" name="email"autocomplete="off">    
        </div>

        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" placeholder="Enter your Mobile" name="mobile"autocomplete="off">    
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Enter your Password"name="password" autocomplete="off">    
        </div>
        
    
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>


</body>

</html>







