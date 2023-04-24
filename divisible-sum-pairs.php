<?php

/*
 * Complete the 'divisibleSumPairs' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER k
 *  3. INTEGER_ARRAY ar
 */

function divisibleSumPairs($n, $k, $ar)
{
    $count = 0;
    $forInc = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = $forInc; $j < $n; $j++) {
            if ($i !== $j && (($ar[$i] + $ar[$j]) % $k === 0)) {
                $count++;
            }
        }
        $forInc++;
    }
    return $count;
}


divisibleSumPairs(6, 3, [1, 3, 2, 6, 1, 2]);