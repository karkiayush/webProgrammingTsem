<!DOCTYPE html>

<head>
    <title>Form data saver</title>
    <style>
        body {
            background-color: grey;
        }

        .pwSection {
            position: relative;
            top: 20px;
        }

        .submitBtn {
            margin-top: 9px;
            font: 10px;
            font-weight: bold;
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <form name="register" action="process1.php" method="post">

        <!-- for name  -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <!-- for user id  -->
        <label for="uid">User ID:</label>
        <input type="text" id="uid" name="uid">

        <!-- for password-->
        <div class="pwSection">
            <label for="pw">Password:</label>
            <input type="password" id="pw" name="pw">
        </div>

        <p>
            <input class="submitBtn" type="submit" name="submit" value="Sign In" />

        </p>
    </form>
</body>

</html>