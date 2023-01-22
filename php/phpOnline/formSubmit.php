<!-- Scripting with php    -->
<?php
if (isset($_POST["submit"])) {
    $userName = $_POST["userName"];
    $password = $_POST["passKey"];
    echo "displaying using the php vars\n";
    echo $userName;
    echo $password;

    echo "\ndisplaying using post method\n";
    echo $_POST["userName"];
    echo $_POST["passKey"];
}
?>

