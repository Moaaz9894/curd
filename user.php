<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `curd2` (name,email,mobile,password) values ('$name','$email','$mobile','$password')"; 
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>mobile</label>
                <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" autocomplete="off">
            </div>

            <div class="form-group">
                <label>password</label>
                <input type="text" class="form-control" placeholder="Enter password" name="password" autocomplete="off">
            </div>




            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>



</html>