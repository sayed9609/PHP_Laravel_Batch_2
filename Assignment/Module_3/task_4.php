<?php

function calculateAndAverages($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        echo "\n\nStudent: $student\n";
        echo " Math: {$grades['Math']} \n English: {$grades['English']} \n Science: {$grades['Science']}\n";
        printf("Average Grade Number : %d \n", $average);

        if ($average >= 80 && $average <= 100) {
            echo "Average Grade Point : 5.00 \n";
            echo "Average Letter Grade : A+ \n \n";
        } else if ($average >= 70 && $average < 80) {
            echo "Average Grade Point : 4.00 \n";
            echo "Average Letter Grade : A \n \n";
        } else if ($average >= 60 && $average < 70) {
            echo "Average Grade Point : 3.50 \n";
            echo "Average Letter Grade : A- \n \n";
        } else if ($average >= 50 && $average < 60) {
            echo "Average Grade Point : 3.25 \n";
            echo "Average Letter Grade : B \n \n";
        } else if ($average >= 40 && $average < 50) {
            echo "Average Grade Point : 2.00 \n";
            echo "Average Letter Grade : C \n \n";
        } else if ($average >= 33 && $average < 40) {
            echo "Average Grade Point : 1.00 \n";
            echo "Average Letter Grade : D \n \n";
        } else {
            echo "Average Grade Point : 0.00 \n";
            echo "Average Letter Grade : F \n \n";
        }
    }
}


$studentGrades = [
    'Alice' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Bob' => ['Math' => 64, 'English' => 70, 'Science' => 80],
    'Charlie' => ['Math' => 50, 'English' => 67, 'Science' => 70]
];


calculateAndAverages($studentGrades);