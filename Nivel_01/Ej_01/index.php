<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">

        <h2>Username: </h2>
        <input type="text" name="username" ><br>
        <h2>Password:</h2> 
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php

if(isset($_POST["login"]))
{

    if(!empty($_POST["username"]) && !empty($_POST["password"]))
    {
         
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: home.php");
    }
    else
    {
        echo "Username or password missing out";
    }
}