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