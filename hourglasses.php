<?php

/*
 * Complete the 'hourglassSum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function hourglassSum($arr)
{
    $allSum = [];
    $sum = 0;



    for ($i = 0; $i < count($arr) - 2; $i++) {
        for ($j = 0; $j < count($arr[$i]) - 2; $j++) {

            $sum += $arr[$i][$j];
            $sum += $arr[$i][$j + 1];
            $sum += $arr[$i][$j + 2];

            $sum += $arr[$i + 1][$j + 1];

            $sum += $arr[$i + 2][$j];
            $sum += $arr[$i + 2][$j + 1];
            $sum += $arr[$i + 2][$j + 2];
            array_push($allSum, $sum);
            $sum = 0;
        }
    }
    return (max($allSum));
}

$arr = [
    [-9, -9, -9, 1, 1, 1],
    [-9, -9, -9, 1, 2, 3],
    [0, 0, 8, 6, 6, 0],
    [0, 0, 0, -2, 0, 0],
    [0, 0, 0, 2, 0, 0],
    [0, 0, 1, 2, 4, 0],
];
print_r(hourglassSum($arr));