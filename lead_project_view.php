<?php
include('db-config/connection.php');
session_start();
$project_id=$_SESSION["user_info"]["project_id"];
$query1="SELECT `title`,`priority`,`user_id`,`status` FROM `task` WHERE `project_id` LIKE '$project_id' ";
$result1=mysqli_query($con,$query1);
$task_info=mysqli_fetch_assoc($result1);
$query2="SELECT `name` FROM `project` WHERE `id` LIKE '$project_id' ";
$result2=mysqli_query($con,$query2);
$project_name=mysqli_fetch_assoc($result2);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Leader</title>
    <link rel="stylesheet" href="lead_project_view.css">
</head>
<body>
    <?php require("sidebar.php"); ?>
    <div class="main">
        <header>
            <a href="profile.php" class="header"> 
                Profile
            </a>   
        </header>
            <?php if(mysqli_num_rows($result2)>0): ?>
                <div class="pname">
                     <h2>
                     <?php printf ("%s \n", $project_name["name"]);?>
                    </h2>
                </div>
                <?php if(mysqli_num_rows($result1)>0): ?>
                    <div class="table">
    <table>
            <?php while(!is_null($task_info)){ ?>
        <tr>
            <td>
                <?php printf ("User_id: %s \n", $task_info["user_id"]) ?>
            </td>
            <td>
                <?php printf ("Task_title: %s \n", $task_info["title"]) ?>
            </td>
            <td>
                <?php printf ("Task_priority: %s \n", $task_info["priority"]) ?>
            </td>
            <td> 
                <?php printf ("Task_status: %s \n", $task_info["status"]) ?>
                 </td>
                    </tr>
                 <?php $task_info=mysqli_fetch_assoc($result1);}?>
    </table> 
            <?php else:?>
                <div style="display:flex; justify-content:center;">there is no tasks in this project</div>
            <?php endif;?>
            </div>
            <?php  else:?>
                <div style="display:flex; justify-content:center;">you are not part of any projects</div>
             <?php endif;?>

             <form action="add_task.php" method="post" class="Add">
            <button type="submit" >Add Task</button>
            </form>
        <form action="logout.php" method="post" class="bt2">
            <button type="submit">logout</button>
        </form>
    </div>
</body>
</html>