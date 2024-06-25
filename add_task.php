<?php
session_start();
include('db-config/connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])){
$project_id=$_SESSION['user_info']['project_id'];
$title=$_POST['title'];
$body=$_POST['body'];
$priority=$_POST['priority'];
$username=$_POST['username'];
$query1="SELECT `id` FROM `user` WHERE `username` LIKE '$username'";
$result1=mysqli_query($con,$query1);
$user_id_row=mysqli_fetch_assoc($result1);
if (mysqli_num_rows($result1)>0){
$user_id=$user_id_row['id'];



$query2="INSERT INTO `task`(`title`,`body`,`priority`, `user_id`,`project_id`) VALUES ('$title','$body','$priority','$user_id','$project_id')";
    mysqli_query($con,$query2);
    
    header("Location: lead_project_view.php");
}else{
    header("location:add_task.php?error=1"); 
}}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link rel="stylesheet" href="add_task.css">
</head>
<body>
<?php require("sidebar.php"); ?>
<center>
    <div style="max-width:600px">
        <h1>ADD Task</h1>
        <form action="" method="post">
            <input type="text" name="title" placeholder="title">
            <input type="text" name="body" placeholder="body">
            <input list="prio" name="priority" placeholder="priority">
            <datalist id="prio">
                <option value="low">
                <option value="medium">
                <option value="high">
            </datalist>
            <input type="text" name="username" placeholder="user">
            <br><br>
            <?php
                if(isset($_GET['error'])){
                    $i=$_GET['error'];
                    echo('<h2 style="color:red;">Username does not exist</h2>');
                }
            ?>
            <button type="submit" name="add">ADD Task</button>
        </form>
    </div>
    </center>
</body>
</html>