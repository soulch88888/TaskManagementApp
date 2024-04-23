<?php
    include('db-config/connection.php'); //connecting to database
    $username=$_POST['username']; //function post takes the name of the element 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $query="INSERT INTO `user`(`username`,`first_name`,`last_name`, `email`, `password`) VALUES ('$username','$fname','$lname','$email','$pass')";
    mysqli_query($con,$query);
    
    header("Location: login.php"); 
?>