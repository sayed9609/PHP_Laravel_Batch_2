<?php

function fibonacchi($num)
{
    if (gettype($num) != 'integer') {

        echo "Invalid input type! \n";
        echo "Input Type : Numbers Only!";
        return;
    }

    $n1 = 0;
    $n2 = 1;

    $nextTerm = $n1 + $n2;

    echo "$n1 $n2 $nextTerm ";

    for ($i = 3; $i < $num; $i++) {

        $n1 = $n2;
        $n2 = $nextTerm;
        $nextTerm = $n1 + $n2;

        echo $nextTerm . " ";
    }
}

fibonacchi(15);
