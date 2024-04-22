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
        <link rel="stylesheet" type="text/css" href="profile.css">
    </head>
    <body>
        <h2>User Profile</h2>
        <?php if ($user_info): ?>
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
        <p>No user information available.</p>
        <?php endif; ?>
    </body>
    </html>
</html>