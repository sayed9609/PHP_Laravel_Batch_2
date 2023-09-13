<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Grade Calculaotr</h2>
        <form method="post" action="">

            <input type="number" name="num1" placeholder="Physics Mark" required><br>
            <input type="number" name="num2" placeholder="Chemistry Mark" required><br>
            <input type="number" name="num3" placeholder="Biology Mark" required><br>

            <button type="submit">Check</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];

                $average = ($num1 + $num2 + $num3)/3;

                if ( $average >= 80) {
                    echo "Letter Grade: A+ <br>";
                    echo "GPA : 5 ";
                } else if ($average >= 70) {
                    echo "Letter Grade: A <br>";
                    echo "GPA : 4 ";
                } else if ($average >= 60) {
                    echo "Letter Grade: A- <br>";
                    echo "GPA : 3.5 ";
                } else if ($average >= 50) {
                    echo "Letter Grade: B <br>";
                    echo "GPA : 3 ";
                } else if ($average >= 40) {
                    echo "Letter Grade: C <br>";
                    echo "GPA : 2 ";
                }else if ($average >= 33) {
                    echo "Letter Grade: D <br>";
                    echo "GPA : 1 ";
                }else {
                    echo "Letter Grade: F <br>";
                    echo "Fail!";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>