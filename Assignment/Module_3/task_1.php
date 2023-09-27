<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($text) {

    $lowerText = strtolower($text);    
    $modifyText = str_replace("brown", "red", $lowerText);
    echo $modifyText;
}

modifyText($text);
