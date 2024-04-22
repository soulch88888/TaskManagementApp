<?php
session_start();
$user_info = isset($_SESSION["user_info"]) ? $_SESSION["user_info"] : null;
$task_info = isset($_SESSION["task_info"]) ? $_SESSION["task_info"] : null;
$current_display_mode = isset($_SESSION["display_mode"]) ? $_SESSION["display_mode"] : "user_info";

if (isset($_GET['toggle'])) {
    $current_display_mode = ($current_display_mode === "user_info") ? "task_info" : "user_info";
    $_SESSION["display_mode"] = $current_display_mode;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
    <h2>User Profile</h2>
    <?php if ($current_display_mode === "user_info"): ?>
        <!-- Display user information -->
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>ID</td>
                <td><?php echo $user_info['id']; ?></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo $user_info['first_name']; ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo $user_info['last_name']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $user_info['email']; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo $user_info['password']; ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $user_info['username']; ?></td>
            </tr>
        </table>
    <?php else: ?>
        <!-- Display task information -->
        <h3>Task Information</h3>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>ID</td>
                <td><?php echo $task_info['id']; ?></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><?php echo $task_info['title']; ?></td>
            </tr>
            <tr>
                <td>Body</td>
                <td><?php echo $task_info['body']; ?></td>
            </tr>
            <tr>
                <td>Priority</td>
                <td><?php echo $task_info['priority']; ?></td>
            </tr>
        </table>
    <?php endif; ?>
    <!-- Toggle button -->
    <form action="" method="GET">
        <input type="hidden" name="toggle" value="true">
        <button type="submit">Toggle Display</button>
    </form>
</body>
</html>
