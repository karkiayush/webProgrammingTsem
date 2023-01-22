<?php
session_start();
?>

<!-- Html starts -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: brown;
            color: white;
        }

        .logincard {
            padding: 25% 0px 0px 20%;
        }

        .name {
            margin: 30px 0px 20px 0px;
        }

        .pw {
            margin-bottom: 30px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <form action="dataSaver.php" method="get">
        <div class="logincard">
            <!-- For username   -->
            <div class="name">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" />
            </div>

            <!-- For password   -->
            <div class="pw">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" />
            </div>
        </div>
    </form>

    <!-- For saving the default username and password  -->
    <?php
    $_SESSION['username'] = 'Aayushkrk';
    $_SESSION['password'] = '1234567qwerty';
    echo "session variable are set\n";
    echo "<br>" . session_id();
    ?>
</body>

</html>