<?php
session_start();
$user_info = isset($_SESSION["user_info"]) ? $_SESSION["user_info"] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <h2 style="display: flex; justify-content:center;"><u>User Profile</u></h2>
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
            <tr>
                <td>Role</td>
                <td><?php echo $user_info['Role']; ?></td>
            </tr>
        </table>
        <form action="logout.php" method="post" class="bt2">
        <button type="submit">logout</button>
    </form>
</body>
</html>
