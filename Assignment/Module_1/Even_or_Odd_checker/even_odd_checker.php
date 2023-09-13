<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd & Even Checker</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Odd & Even Checker</h2>
        <form method="post" action="">

            <input type="number" name="num" placeholder="Enter Number" required><br>

            <button type="submit">Check</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["num"];

                if ($num % 2 == 0) {
                    echo "The Number ( $num ) is : Even";
                } else {
                    echo "The Number ( $num ) is : Odd";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>