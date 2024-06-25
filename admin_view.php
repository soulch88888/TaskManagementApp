<?php
include('db-config/connection.php');
$query2="SELECT * FROM `user`";
$query1="SELECT * FROM `project`";
$result1=mysqli_query($con,$query1);
$result2=mysqli_query($con,$query2);
$data1=mysqli_fetch_assoc($result1);
$data2=mysqli_fetch_assoc($result2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin_view.css">
</head>
<body>
    <table class="tasks_table">
        <?php while(!is_null($data1)){?>
        <tr>
            <td>
                <?php printf ("Project_id: %s \n", $data1["id"]) ?>
            </td>
            <td>
                <?php printf ("Project_title: %s \n", $data1["name"]) ?>
            </td>
            <td>
                <?php printf ("Project_description: %s \n", $data1["description"]) ?>
            </td>
            <td> 
                <?php printf ("Deadline: %s \n", $data1["deadline"]) ?>
                 </td>
                    </tr>
                 <?php $data1=mysqli_fetch_assoc($result1);}?>
    </table>
    <table class="users_table">
    <?php while(!is_null($data2)){ ?>
        <tr>
            <td>
                <?php printf ("User_id: %s \n", $data2["id"]) ?>
            </td>
            <td>
                <?php printf ("Username: %s \n", $data2["username"]) ?>
            </td>
            <td>
                <?php printf ("Email: %s \n", $data2["email"]) ?>
            </td>
                    </tr>
                 <?php $data2=mysqli_fetch_assoc($result2);}?>
    </table>
</body>
</html>