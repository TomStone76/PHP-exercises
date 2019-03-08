<?php

// Create a function that accepts a string (of a persons first and last name)
// and returns a string with the first and last name swapped.

function nameShuffle($str) {
    return explode(" ", $str)[1] . " " . explode(" ", $str)[0];
}