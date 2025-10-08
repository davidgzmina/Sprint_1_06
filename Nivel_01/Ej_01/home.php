<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <style>
        body{ 
            background-color: blue;
            color: aliceblue;
        }
    </style>
</head>
<body>
    <h1>This is the home page</h1>
 
</body>
</html>
<?php

    echo "Your username: " . $_SESSION["username"] ."<br>";
    echo "Your password: " . $_SESSION["password"] ."<br>";

?>