<?php
include('db-config/connection.php');
session_start();
$user_id=$_SESSION["user_info"]["id"];
$project_id=$_SESSION["user_info"]["project_id"];
$query1="SELECT * FROM `task` WHERE `user_id` LIKE '$user_id' ";
$query2="SELECT `name` FROM `project` WHERE `id` LIKE '$project_id' ";;
$result1=mysqli_query($con,$query1);
$result2=mysqli_query($con,$query2);
$project_name=mysqli_fetch_assoc($result2);
$task_info=mysqli_fetch_assoc($result1);
$row_num1=mysqli_num_rows($result1);
$row_num2=mysqli_num_rows($result2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Member</title>
    <link rel="stylesheet" href="member_view.css">
</head>
<body>
    <header>
        <a href="profile.php" class="header"> 
            Profile
        </a>   
    </header>
    <?php if($row_num2>0): ?>
    <div class="pname">
        <h2>
            <?php printf ("%s \n", $project_name["name"]);?>
        </h2>
    </div>
    <?php if($row_num1>0): ?>
    <div class="table">
    <table>
            <?php while(!is_null($task_info)){ ?>
        <tr><form action="member_task_edit.php" method="post">
            <td>
                <?php echo $task_info["id"]; ?>
                <input type="hidden" name="task_id" value="<?php echo $task_info["id"]; ?>">
            </td>
            <td>
                <?php echo $task_info["title"]; ?>
                <input type="hidden" name="task_title" value="<?php echo $task_info["title"]; ?>">
            </td>
            <td>
                <?php echo $task_info["priority"]; ?>
                <input type="hidden" name="task_priority" value="<?php echo $task_info["priority"]; ?>">
            </td>
            <td>
                <?php echo $task_info["status"]; ?>
                <input type="hidden" name="task_status" value="<?php echo $task_info["status"]; ?>">
            </td>
            <td>
            <input type="hidden" name="task_body" value="<?php echo $task_info["body"]; ?>">
                <button type="submit" name="edit">Edit</button>
                </form> 
            </td>
        </tr>
        <?php $task_info=mysqli_fetch_assoc($result1);}?>
        </table> 
        
        <?php else:?>
            <div style="display:flex; justify-content:center;">you have no assigned tasks</div>
           <?php endif;?>
    </div>
    <?php  else:?>
        <div style="display:flex; justify-content:center;">you are not part of any projects</div>
       <?php endif;?>
    
    <form action="logout.php" method="post" class="bt2">
        <button type="submit">logout</button>
    </form>
</body>
</html>