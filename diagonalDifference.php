<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr)
{

    $leftToRight = 0;
    $rightToLeft = 0;

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if (1 < count($arr[$i])) {
                $firstRowLength = count($arr[$i]);
                $lastRowLength = count($arr[$i + ($firstRowLength - 1)]);
                if ($firstRowLength === $lastRowLength) {
                    $currentIForLeftToRight = $i;
                    $currentJForLeftToRight = $j;
                    $currentIForRightToLeft = $i;
                    $currentJForRightToLeft = $j + ($firstRowLength - 1);
                    for ($k = 0; $k < $firstRowLength; $k++) {
                        $leftToRight += $arr[$currentIForLeftToRight][$currentJForLeftToRight];
                        $rightToLeft += $arr[$currentIForRightToLeft][$currentJForRightToLeft];
                        $currentIForLeftToRight++;
                        $currentJForLeftToRight++;
                        $currentIForRightToLeft++;
                        $currentJForRightToLeft--;
                    }
                    return abs($leftToRight - $rightToLeft);
                }
            }
        }
    }
}


$arr = [
    [3],
    [11, 2, 2, 4],
    [4, 5, 3, 4,],
    [10, 8, -12, 3],
    [10, 8, -12, 3],
];
echo diagonalDifference($arr);