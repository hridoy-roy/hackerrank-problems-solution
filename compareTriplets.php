<?php

/*
 * Complete the 'compareTriplets' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function compareTriplets($a, $b)
{
    $aWin = 0;
    $bWin = 0;

    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] > $b[$i]) {
            $aWin++;
        } elseif ($a[$i] < $b[$i]) {
            $bWin++;
        }
    }

    return [$aWin, $bWin];
}


$a = [17, 28, 30];
$b = [99, 16, 8];

compareTriplets($a, $b);