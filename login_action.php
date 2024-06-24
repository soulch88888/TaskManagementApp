<?php
    include('db-config/connection.php');
    $username=$_POST['username']; 
    $pass=$_POST['pass'];
    session_start();

    $query="SELECT * FROM `user` WHERE `username` LIKE '$username' AND `password` LIKE '$pass'";
    
    $result=mysqli_query($con,$query);

    $row_num=mysqli_num_rows($result);

    if($row_num>0){
        $data = mysqli_fetch_assoc($result);
        $_SESSION["user_info"]=$data;

        if($_SESSION["user_info"]["Role"]=="Team Member"){
            header("location:member_view.php");
        }elseif($_SESSION["user_info"]["Role"]=="Team Leader"){
            header("location:lead_project_view.php");
        }elseif($_SESSION["user_info"]["Role"]=="admin"){
            header("location:admin_view.php");
        }

        
    }else{
        header("location:login.php?error=1");
    }
?>