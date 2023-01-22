<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

    <?php

    $unamePassword = array(
        'ramesh' => 'j123',
        'shyam' => '234',
        'rakesh' => '4566'
    );


    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // $_SESSION["username"] = $_POST["username"];
        // $_SESSION["password"] = $_POST["password"];
    
        if (array_key_exists($_POST["username"], $unamePassworduname) && $_POST("password") == $unamePassword[$_POST["username"]]) {
            $_SESSION["loggedin"] = true;
        } else {
            $_SESSION["loggedin"] = false;
        }
    }

    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
        echo "<h1>Welcome! " . $_SESSION["username"] . "</h1>";
        echo "<p><a href=\"profile.php\">View Profile</p>";
        echo "<p><a href=\"logout.php\">log out</p>";

    } elseif (isset($_SESSION["username"]) && $_SESSION["loggedin"] == false) {
        echo "<h1>Invalid Username or password!</h1>";
        echo "<p><a href=\"login.php\">Go to Login Page</a></p>";
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);

    } else {
        echo "<h1>Not logged in!</h1>";
        echo "<p><a href=\"login.php\">Go to Login Page</a></p>";
    }

    ?>

</body>

</html>