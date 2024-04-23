<?php
    include('db-config/connection.php'); //connecting to database
    $username=$_POST['username']; //function post takes the name of the element 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];


    /* 
    This method gives the query to insert rows in the table
    echo("The att are: $username, $email, $pass");
    $query="INSERT INTO `user`(`name`, `email`, `pass`) VALUES ('$username','$email','$pass')";
    echo($query);
    */

    //This method inserts the row automatically in the table
    $query="INSERT INTO `user`(`username`,`first_name`,`last_name`, `email`, `password`) VALUES ('$username','$fname','$lname','$email','$pass')";
    mysqli_query($con,$query);
    
    header("Location: login.php"); //for redirection to the login page after inserting the row
?>