<?php
session_start();
    $task_id=$_SESSION["task_id"];
    $task_title = $_POST['task_title'];
    $task_priority = $_POST['task_priority'];
    $task_body = $_POST['task_body'];
    $status = $_POST['task_status'];
    echo $status;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['change_stat'])){
        $status = $_POST['status'];
        include('db-config/connection.php');
        $query="UPDATE `task` SET `status` = '$status' WHERE `id` = '$task_id'";
        echo $query;
        $result=mysqli_query($con,$query);

    
    // header("Location: member_view.php");
        
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
                    <input list="stat" name="task_status" placeholder="status">
                    <datalist id="stat">
                        <option value="in progress">
                        <option value="done">
                    </datalist>
                        <button type="submit" name="change_stat">Apply</button>
                    </form>
                </td>
            </tr>
        </table>

</body>
</html>