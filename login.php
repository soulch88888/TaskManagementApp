<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require("header.php"); ?>
    <center>
    <div style="max-width:600px">
        <h1>login</h1>
        <form action="login_action.php" method="post">
            <input type="text" name="username" placeholder="UserName">
            <input type="password" name="pass" placeholder="Password">
            <?php
                if(isset($_GET['error'])){
                    $i=$_GET['error'];
                    echo('<h2 style="color:red;">Please check username and password</h2>');
                }
            ?>
            <button>login</button>
    </div>
    <?php require("footer.php"); ?>
    <center>
</body>
</html>