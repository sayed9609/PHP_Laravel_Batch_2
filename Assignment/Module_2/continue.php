<?php

$input_num_start = 1;
$input_num_end = 50;


for ($i = $input_num_start; $i <= $input_num_end; $i++) {

    if ($i % 5 == 0) {

        continue;
    }

    echo $i . "\n";
}