<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";

    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully ";
       header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5 ">
        <h1 class="text-center">Add User</h1>
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobile" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" autocomplete="off">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


  

</body>

</html>