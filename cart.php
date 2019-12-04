<?php

session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <?php
        $value = 'something from somewhere';

        setcookie("Skateboard", $value);
        setcookie("Basketbal", $value, time()+3600);
        setcookie("Skeelers", $value, time()+3600, "", "", 1);

        $_SESSION['Skateboard'] = "12";
        ?>

    </body>
</html>