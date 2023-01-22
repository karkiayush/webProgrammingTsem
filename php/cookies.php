<?php
$cookieName = "aayuhs";
$cookieValue = "john doe";

setcookie(
    $cookieName,
    $cookieValue,
    time() + (86400 * 30),
    "/"
);

if (isset($_COOKIE[$cookieName && $cookieValue])) {
    echo "cookie name:" . $cookieName;
    echo "cookie value:" . $cookieValue;
} else
    echo "cookie is not set";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>

</body>

</html>