<?php

$grades = [85, 92, 78, 88, 95];

function sortGradesDescendingOrder($grades) {

    rsort($grades);
    print_r($grades);
    
    foreach ($grades as $grade) {
        echo $grade . " ";
    }
}

sortGradesDescendingOrder($grades);