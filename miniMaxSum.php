<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr)
{

    $allSum = [];
    for ($i = 0; $i < count($arr); $i++) {

        $currentArray = $arr;
        unset($currentArray[$i]);
        $sum = array_sum($currentArray);
        array_push($allSum, $sum);
    }

    $min = min($allSum);
    $max = max($allSum);
    printf($min . " " . $max);
}

$arr = [1, 2, 3, 4, 5];
miniMaxSum($arr);