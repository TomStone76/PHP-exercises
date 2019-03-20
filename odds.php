<?php
function noOdds($arr) {
    $newArr = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 === 0) {
            array_push($newArr, $arr[$i]);
        }
    }
    return $newArr;
}

echo noOdds(1, 2, 3, 4, 5, 6, 7, 8);