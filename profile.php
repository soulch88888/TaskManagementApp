<?php
    session_start();
    print_r($_SESSION["user_info"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name=$_SESSION["user_info"]["name"];
        echo("<h1>Welcome to our website $name</h1>");
    ?>
</body>
</html>