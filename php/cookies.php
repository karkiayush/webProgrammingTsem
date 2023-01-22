<?php
$cookieName = "aayuhs";
$cookieValue = "john doe";

/*
i>SetCookie:  setCookie() is used to set/create/sent cookies. 
ii>This function must appear before the <html> tag.
iii>Syntax: setCookie(name, value, expire, path, domain, secure, httponly); note: the parameter must be stricly in same order
iv>Ex:-setCookie( "username", "geeky);
v>Note: name and value is necessary and other are optional
vi> Whenever you omit the optional cookie fields, the browser fills them in automatically with reasonable default value
vii> It describes the time when cookie will be expire. If this parameter is not set or set 0 then cookie
will automatically expire when the Web Browser is closed.
viii> Session Cookies -Cookies that are set without the expire field are called session
cookies. It is destroyed when the user quits the browser.
Persistent Cookies The browser keeps it up until their expiration date is reached.
*/
setcookie(
    $cookieName,
    $cookieValue,
    time() + (86400 * 30),
    "/"
);

if (isset($_COOKIE[$cookieName])) {
    echo "cookie name: \n" . $cookieName . "<br/>";
    echo "\ncookie value:" . $cookieValue;
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