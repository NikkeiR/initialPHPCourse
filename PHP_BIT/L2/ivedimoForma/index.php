<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivedimo forma</title>
</head>
<body>

    <?php

    // var_dump($_POST["lname"]);

    if (isset($_POST["lname"]) && $_POST["lname"] != "") {
        print("Hello " . $_POST["lname"] . "!");
    }

    ?>
    
    <form action="" method="POST"> <!-- galima iskelti action nuoroda i atskira faila (form-handler.php) -->
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="<?php print($_POST["lname"]) ?>"><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>