<?php

$input_num = 15;

if (gettype($input_num) != 'integer') {
    echo "Invalid input type! \n";
    echo "Input Type : Numbers Only!";
    return;
}

$count = 3;

$n1 = 0;
$n2 = 1;

$nextTerm = $n1 + $n2;

echo "$n1 $n2 $nextTerm ";

while ($count < $input_num) {
    
    $n1 = $n2;
    $n2 = $nextTerm;
    $nextTerm = $n1 + $n2;
    
    if ($nextTerm >= 100) {
        break;
    }

    echo $nextTerm . " ";

    $count++;
}
