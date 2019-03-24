<?php
// Create a function that takes a string, checks if it has the same number of
// 'x's and 'o's and returns either true or false.

function XO($str) {
    $numX = 0; $numO = 0; 
    $lower = strtolower($str);
    for ($i = 0; $i < $lower; $i++) {
        if ($lower[$i] === 'x') {
            $numX += 1;
        } else if ($lower[$i] === 'o') {
            $numO += 1;
        }
    }
    return $numX === $numO;
}

echo XO('');