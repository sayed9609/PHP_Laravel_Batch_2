<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Comparison Tool</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
            <button type="submit">Compare</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];

                $largestValu = $num1 > $num2 ? $num1 : $num2;

                echo "Number 1 : $num1 <br>";
                echo "Number 2 : $num2 <br>";
                echo "Largest Number : $largestValu <br>";
            }
            ?>
        </div>
    </div>
</body>

</html>