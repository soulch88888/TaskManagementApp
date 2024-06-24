<?php
session_start();
    $task_id = $_POST['task_id'];
    $task_title = $_POST['task_title'];
    $task_priority = $_POST['task_priority'];
    $task_body = $_POST['task_body'];
    $status = $_POST['task_status'];
    echo $task_id;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['status'])){
        $status = $_POST['status'];
        echo $status;
        include('db-config/connection.php');
        $query="UPDATE `task` SET `status` = '$status' WHERE `task`.`id` = '$task_id'";
        mysqli_query($con,$query);
    
    //  header("Location: member_view.php");
        
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit task</title>
    <link rel="stylesheet" href="member_task_edit.css">
</head>
<body>
    <h3>Task Information</h3>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>ID</td>
                <td><?php echo $task_id; ?></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><?php echo $task_title; ?></td>
            </tr>
            <tr>
                <td>Body</td>
                <td><?php echo $task_body; ?></td>
            </tr>
            <tr>
                <td>Priority</td>
                <td><?php echo $task_priority; ?></td>
            </tr>
            <tr>
                 <td>Status</td>
                 <td>
                    <form action="" method="post">
                        <button type="submit" name="status" value="done">Set as done</button>
                    </form>
                </td>
            </tr>
        </table>

</body>
</html>