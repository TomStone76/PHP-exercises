<?php
// Create a function that takes a string, checks if it has the same number of
// 'x's and 'o's and returns either true or false.

function XO($str) {
    $numX = 0; $numO = 0; 
    $arr = explode(' ', $str);

    for ($i = 0; $i < $arr; $i++) {
        
    }

    return $numX === $numO;
    return $arr;
}

echo XO('x');