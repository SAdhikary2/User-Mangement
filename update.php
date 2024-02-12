<?php

include 'connect.php';

$id=$_GET['updateid'];

//for autometically inserting the value in the value field
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];



if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "UPDATE `crud` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";


    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data updated successfully ";
    //    header('location:display.php');
    }
    if ($result) {
        // Data updated successfully, redirect after showing pop-up
        echo '<script>alert("Data updated successfully"); window.location.href = "display.php";</script>';
        exit;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
</head>

<body>

    <div class="container my-5 ">
        <h1 class="text-center">Add User</h1>
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" autocomplete="off" value="<?php echo $name ?>">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" autocomplete="off" value="<?php echo $email ?>">
            </div>

            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobile" autocomplete="off" value="<?php echo $mobile ?>">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" autocomplete="off" value="<?php echo $password ?>">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script>
     
    </script>


</body>

</html>