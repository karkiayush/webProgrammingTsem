<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        echo 'landing page';
        echo ' for portfolio';
        ?>
    </title>
</head>

<body>
    <?php
    echo 'hello world<br>';

    // php variables 
    $name = 'aayush';
    echo "$name is a good boy<br>";
    echo 'hello guys<br>';


    // var_dump function 
    $passedResult = true;
    $isTop = false;
    echo $passedResult;
    echo $isTop . '<br>';

    // using echo to print the variable value is not the best practise 
    var_dump($passedResult);
    var_dump($isTop . '<br>');

    $listofFriends = array('joe', 'steve', 'kane');

    var_dump($listofFriends);


    // String Functions 
    $stringFun = 'methodForString';
    echo '<br>';
    echo '<br>';
    echo 'String function in php<br>';

    echo strlen($stringFun) . '<br>';
    echo str_word_count($stringFun) . '<br>';
    echo strrev($stringFun) . "<br>";
    ?>
</body>

</html>