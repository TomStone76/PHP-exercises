<?php

// Create a function that takes an array of numbers between 1 and 10 
// (excluding one number) and returns the missing number.

function missingNums($arr) {
    $sum = array_sum($arr);
      return 55 - $sum;
  }