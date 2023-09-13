<?php

// Use this block for Celsius Values

$tempInC = 25; // Please Input Celsius Value Here
$tempInF = ($tempInC * 9 / 5) + 32;


/*

// Use this block for Fahrenheit Values

$tempInF = 60; // Please Input Fahrenheit Value Here
$tempInC = ($tempInF - 32) * 5 / 9;

*/


  if (($tempInC > 35) || ($tempInF > 95)) {
    echo "It's Too Hot 🥵";
} else if (($tempInC > 25) || ($tempInF > 77)) {
    echo "It's hot 😓";
} else if (($tempInC >= 20 && $tempInC <= 25) || ($tempInF >= 68 && $tempInF <= 77)) {
    echo "It's feel Fresh 😎";
} else if(($tempInC >= 10 && $tempInC < 20) || ($tempInF >= 50 && $tempInF < 68)){
    echo "It's cold 😬";
} else if(($tempInC >= 0 && $tempInC < 10) || ($tempInF >= 32 && $tempInF < 50)){
    echo "It's Too cold 😰";
} else if($tempInC < 0 || $tempInF < 32) {
    echo "It's frezzing 🥶";
}

