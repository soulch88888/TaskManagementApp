<?php
    include('db-config/connection.php'); //connecting to database
    $username=$_POST['username']; //function post takes the name of the element 
    $pass=$_POST['pass'];
    session_start();

    $query="SELECT * FROM `user` WHERE `username` LIKE '$username' AND `password` LIKE '$pass'";
    
    $result=mysqli_query($con,$query);

    $row_num=mysqli_num_rows($result);

    if($row_num>0){
        $data = mysqli_fetch_assoc($result);
        $_SESSION["user_info"]=$data;
        header("location:profile.php");
    }else{
        header("location:login.php?error=1");
    }
?>