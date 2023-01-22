<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .submit {
            text-align: center;
            position: relative;
            top: 20vh;
        }

        .userInput {
            position: relative;
            top: 5vh;
            padding: 0px 10px 0px 10px;
        }
    </style>
    <title>HTML Forms with php</title>
</head>

<body>
    <form action="./formSubmit.php" name="userInfo" method="post">
        <div class="userInput">
            <label for="userName">User Name: </label>
            <input type="text" id="userName" name="userName" />

            <div>
                <label for="email">Email Address: </label>
                <input type="email" id="email" name="email" />
            </div>

            <div class="pw">
                <label for="passKey">Password: </label>
                <input type="password" id="passKey" name="passKey" />
            </div>
        </div>

        <div class="submit">
            <input type="button" name="submit" value="submit">
        </div>
    </form>
</body>

</html>