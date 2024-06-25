<?php
session_start();
$project_id=$_SESSION['user_info']['project_id'];
include('db-config/connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])){
    $username=$_POST['username']; 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $Role='Team Member';
    $query="INSERT INTO `user`(`username`,`first_name`,`last_name`, `email`, `password`,`project_id`,`Role`) VALUES ('$username','$fname','$lname','$email','$pass','$project_id','$Role')";
    $result=mysqli_query($con,$query);
    if($result==true){header("Location: lead_member_view.php");}
    else{
        header("location:add_member.php?error=1"); 
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Team Member</title>
    <link rel="stylesheet" href="add_member.css">
</head>
<body>
<?php require("sidebar.php"); ?>
<center>
    <div style="max-width:600px">
        <h1>ADD Member</h1>
        <form action="" method="post">
            <input type="text" name="username" placeholder="UserName">
            <input type="text" name="fname" placeholder="First Name">
            <input type="text" name="lname" placeholder="Last Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="Password">
            <br><br>
            <?php
                if(isset($_GET['error'])){
                    $i=$_GET['error'];
                    echo('<h2 style="color:red;">Username already taken</h2>');
                }
            ?>
            <button type="submit" name="add">ADD</button>
        </form>
    </div>
    </center>
</body>
</html>