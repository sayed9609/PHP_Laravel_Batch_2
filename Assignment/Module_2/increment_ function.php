<?php 

function evenIncrement ($start, $end, $step = 2) {

    if (gettype($start) != 'integer' || gettype($end) != 'integer' || gettype($step) != 'integer') {

        echo "Invalid input type! \n";
        echo "Input type : Numbers Only!";
        return;
        
    } else if ($start > $end) {

        echo "Invalid input! \n";
        echo "Input formet: \n";
        echo "(Starting value, Ending value, Step leangth)";
        return;

    } else if ($step % 2 != 0) {

        echo "Invalid input! \n";
        echo "'Step' Input type : Even Numbers Only!";
        return;

    } else if ($start % 2 != 0) {

        for ($start += 1; $start <= $end; $start += $step) {
            echo $start;
            echo PHP_EOL;
        }

    } else if ($start % 2 == 0) {

        for ($start = 0; $start <= $end; $start += $step) {
            echo $start;
            echo PHP_EOL;
        }

    }
    
}

evenIncrement(2,10,2);