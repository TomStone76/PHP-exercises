<?php

// Create a function that takes an array of numbers and returns the following statistics:

// Minimum Value
// Maximum Value
// Sequence Length
// Average Value

function minMaxLengthAverage($arr) {
    $min = min($arr);
      $max = max($arr);
      $length = count($arr);
      $ave = array_sum($arr) / $length;
      return [$min, $max, $length, $ave];
  }