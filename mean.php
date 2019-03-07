<?php

// Create a function that takes an array of numbers and returns the mean value as a string.

function mean($arr) {
    $sum = array_sum($arr);
      return round($sum / count($arr), 2);
  }