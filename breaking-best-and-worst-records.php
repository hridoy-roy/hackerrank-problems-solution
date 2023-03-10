<?php

/*
 * Complete the 'breakingRecords' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY scores as parameter.
 */

function breakingRecords($scores)
{

    $totalMin = 0;
    $totalMax = 0;
    $min = null;
    $max = null;

    foreach ($scores as $score) {
        if ($score < $min && $min !== null) {
            $min = $score;
            $totalMin++;
        } elseif ($score > $max && $max !== null) {
            $max = $score;
            $totalMax++;
        } elseif ($min === null && $max === null) {
            $min = $score;
            $max = $score;
        }
    }

    return [$totalMax, $totalMin];
}

print_r(breakingRecords([3, 4, 21, 36, 10, 28, 35, 5, 24, 42]));