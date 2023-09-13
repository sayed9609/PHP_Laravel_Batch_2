<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Temperature Conversion</h2>
        <form method="post" action="">
            <input type="number" name="temp" placeholder="Enter Temperature" required><br>
            <select name="operation">
                <option value="c_to_f">°C TO °F</option>
                <option value="f_to_c">°F TO °C</option>
            </select><br>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temp = $_POST["temp"];
                $operation = $_POST["operation"];

                if ($operation == "c_to_f" ) {

                    $result = ($temp * 9 / 5) + 32; // Celsius to Fahrenheit
                    echo "$temp °C ⇨ $result °F";
                } else if ($operation == "f_to_c" ) {

                    $result = ($temp - 32) * 5 / 9; // Fahrenheit to Celsius
                    echo "$temp °F ⇨ $result °C";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>