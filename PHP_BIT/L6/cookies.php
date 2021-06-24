<?php

    /*
    Superglobalusis: $_COOKIE - naudojamas sausainiukams perskaityti is PHP kodo ($_COOKIE["name"])
    Sausainiukui sukurti naudojamas: setcookie(name, value, expire, path, domain, security);
    security (true arba false - 1 arba 0)
    */
    if(!isset($_COOKIE["name"])) {
        setcookie("name", "Petriukas", time() +3600, "/", "", 0);
    }
    if(!isset($_COOKIE["age"])) {
        setcookie("age", "25", time() + 3600, "/", "", 0);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting cookies with PHP</title>
</head>
<body>
    <?php 
        
        if(isset($_COOKIE["name"])) {
            print("Welcome " . $_COOKIE["name"] . "<br />");
        }
        
        // print($_COOKIE["name"]. "<br />");
        // print($_COOKIE["age"] . "<br />");
        
    ?>
</body>
</html>