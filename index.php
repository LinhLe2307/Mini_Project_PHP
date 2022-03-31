<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mini Project 1</title>
</head>
<body>
    <h1>Converter</h1>

    <!--........ Temperature converter .........-->

    <form class="converter" method="post">
        <h2>Temperature converter 🌡️❄️🔥</h2>
        <span>From:</span>
        <select name="initialTemp">
            <option value="C">Celsius</option>
            <option value="F">Fahrenheit</option>
            <option value="K">Kelvin</option>
        </select>
        <span>To:</span>
        <select name="targetTemp">
            <option value="C">Celsius</option>
            <option value="F">Fahrenheit</option>
            <option value="K">Kelvin</option>
        </select>
        <h3><label for="degrees">Enter degrees:</label></h3>
        <input type="number" name="degrees">
        <p><input type="submit" value="Submit"></p>

        <!--...... Temperature converter formula .......-->
        <?php
            include 'convert-temp.php';

            $initialTemp = isset($_POST["initialTemp"]) ? $_POST["initialTemp"] : "";
            $targetTemp = isset($_POST["targetTemp"]) ? $_POST["targetTemp"] : "";
            $degrees = isset($_POST["degrees"]) ? (float) $_POST["degrees"] : 0;

            $result = convertTemp($initialTemp, $targetTemp, $degrees);
        ?>
        <?= $degrees."°".$initialTemp." is ". round($result, 2)."°".$targetTemp?>
    </form>

    <!--........ Speed converter .........-->
    <form class="speed-converter" method="post" action="index.php">
        <h2>Speed converter 🚀🏎 🛵</h2>
        <div>
            <label for="kilometers"><span>From: Kilometers per hour</span></label>
            <input type="number" name="kilometers" id="kilometers" step="any"/>
        </div>
        <div>
            <span>To</span>
            <select name="units">
                <option value="meters per seconds" required>Meters per second</option>
                <option value="knots">Knots </option>
            </select>
        </div>
        <input type="submit" value="Submit">
        <?php 
            require "convert-speed.php";
            $kilometersInput = isset($_POST["kilometers"]) ? $_POST["kilometers"] : "";
            $unitsOption = isset($_POST["units"]) ? $_POST["units"] : "";
        ?>
        <p><?= covertSpeed($kilometersInput, $unitsOption); ?></p>
    </form>
</body>
</html>