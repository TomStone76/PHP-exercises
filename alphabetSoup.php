<?php
// Create a function that takes a string and returns a string with its letters in alphabetical order.

function AlphabetSoup($str) {
    return str_split($str);
}

echo AlphabetSoup('hello');