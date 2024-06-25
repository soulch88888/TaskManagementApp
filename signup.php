<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require("header.php"); ?>

    <center>
    <div style="max-width:600px">
        <h1>Sign Up</h1>
        <form action="signup_action.php" method="post">
            <input type="text" name="username" placeholder="UserName">
            <input type="text" name="fname" placeholder="First Name">
            <input type="text" name="lname" placeholder="Last Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="Password">
            <input type="text" name="p_id" placeholder="Project_ID">
            <br><br>
            <button>Sign Up</button>
        </form>
    </div>
    </center>

</body>

</html>