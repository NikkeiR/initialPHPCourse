<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apdorojimas</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["xx"];
        } 
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $name = $_REQUEST["xx"];
        } 
    ?>
    <a href="./form.php">
        <button>Go to forms example!</button>
    </a>
    <p>
        <?php
            if(empty($name)) {
                print("Name is empty");
            } else print($name);
        ?>
    </p>
    
</body>
</html>