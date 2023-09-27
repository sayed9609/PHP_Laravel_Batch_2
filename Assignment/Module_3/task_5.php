<?php

function generatePassword($length)
{

    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';


    $allChars = $lowercase . $uppercase . $numbers . $specialChars;

    $password = '';

    $charCount = strlen($allChars);


    for ($i = 0; $i < $length; $i++) {

        $randomIndex = mt_rand(0, $charCount - 1);

        $password .= $allChars[$randomIndex];
    }

    return $password;
}

$generatedPassword = generatePassword(12);

echo "Generated Password: $generatedPassword";


