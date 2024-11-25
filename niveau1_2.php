<?php

//palindrome : mot qui se lit dans les 2 sens




function checkPalindrom ($word)
{

if (strrev($word) == $word) {

echo 'Ce mot est un Palindrome';
}
else {
    echo 'Ce mot n\'est pas un palindrome';
}
}

echo "Donner un nom : ";
$word = trim(fgets(STDIN));


$check = checkPalindrom($word);

