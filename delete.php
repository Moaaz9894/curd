<?php
include 'connect.php';
if(isset($_GET['del'])){
    $id= $_GET['del'];
    $sql = "delete from `curd2` where id=$id";
    $result = mysqli_query($con,$sql);

    if($result){
        header('location:display.php');
    }
        else{
            die(mysqli_error($con));
        }
    }
