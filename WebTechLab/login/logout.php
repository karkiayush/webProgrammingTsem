<?php
    session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Logout</title>
    </head>

    <body>

        <?php
            
            
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true)
            {
                session_unset();
                session_destroy();
                echo "<h1>Successfully logged out!</h1>";
                echo "<p><a href=\"login.php\">Go to Login Page</a></p>";

            }
            else
            {
                echo "<h1>Already logged out!</h1>";
                echo "<p><a href=\"login.php\">Go to Login Page</a></p>";
            }
            
        ?>

    </body>
</html>
        