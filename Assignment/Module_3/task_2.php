<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumbers($numbers) {
    
    $result = [];

    foreach ($numbers as $numberItem) {

        if ($numberItem % 2 != 0) {
            
            $result[] = $numberItem;
        }
    }
    
    print_r($result);
}

removeEvenNumbers($numbers);

