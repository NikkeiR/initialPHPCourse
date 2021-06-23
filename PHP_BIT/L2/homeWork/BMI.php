<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Index</title>
</head>
<body>
    <section>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(!isset($_POST["height"]) || empty($_POST["height"])) {
                    print("<h4>Please enter your height!</h4>");
                }
                if(!isset($_POST["weight"]) || empty($_POST["weight"])) {
                    print("<h4>Please enter your weight!</h4>");
                } else {
                    $bmi = round(($_POST["weight"] / ($_POST["height"] * $_POST["height"])));
                    switch ($bmi) {
                        case ($bmi < 18.5); print("Your BMI is: {$bmi} -> Insufficient weight");
                            break;
                        case ($bmi >= 18.5 && $bmi < 25); print("Your BMI is: {$bmi} -> Normal weight");
                            break;
                        case ($bmi >= 25 && $bmi < 30); print("Your BMI is: {$bmi} -> Overweight");
                            break;
                        case ($bmi >= 30); print("Your BMI is: {$bmi} -> Obesity");
                            break;
                        default: print("Wrong input :/");
                    }
                }
            }
        ?>
        <form action="" method="POST">
            <label for="height">Enter your height:</label>
            <input type="text" id="height" name="height"><br>
            <label for="weight">Enter your weight:</label>
            <input type="text" id="weight" name="weight"><br>
            <input type="submit" value="Calculate">
        </form>
        <div>
            <h4 style="color: lightskyblue;">BMI</h4>
            <p style="font-size: 10px;">Less than 18.5 -> Insufficient weight</p>
            <p style="font-size: 10px;">18.5 <= BMI < 25 -> Normal weight</p>
            <p style="font-size: 10px;">25 <= BMI < 30 -> Overweight</p>
            <p style="font-size: 10px;">More than 30 -> Obesity</p>
        </div>
    </section>
</body>
</html>