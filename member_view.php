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
    <title>Document</title>
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
        <tr>
            <td>
                task1 author1 status
            </td>
            <td>
                <button>Edit</button>
            </td>
        </tr>
        <tr>
            <td>
                task2 author2 status
            </td>
            <td>
                <button>Edit</button>
            </td>
        </tr>
        <tr>
            <td>
                task3 author3 status
            </td>
            <td>
                <button>Edit</button>
            </td>
        </tr>
        </table> 
        <?php endif;?>
    </div>
    <?php  else:
        echo("you are not part of any projects");
        endif;
        ?>
    <div class="bt2">
        <button> logout </button>
    </div>
</body>
</html>