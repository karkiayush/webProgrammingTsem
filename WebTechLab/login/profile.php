<?php
    session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
    </head>

    <body>

        <?php
            
            
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true)
            {
                echo "<h1>Welcome! " . $_SESSION["username"] . "</h1>";
                echo "<p><a href=\"dashboard.php\">Goto Dashboard<a></p>";
                echo "<p>Username: user</p>";
                echo "<p>Password: pass</p>";
            }
            else
            {
                echo "<h1>Not logged in!</h1>";
                echo "<p><a href=\"login.php\">Go to Login Page</a></p>";
            }
            
        ?>

    </body>
</html>
        