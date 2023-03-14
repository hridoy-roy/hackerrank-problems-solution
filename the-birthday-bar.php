<?php

/*
 * Complete the 'birthday' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY s
 *  2. INTEGER d
 *  3. INTEGER m
 */

function birthday($s, $d, $m)
{

    $i = 0;
    $total = 0;
    while (isset($s[$i])) {
        $sum = 0;
        for ($k = 0; $k < $m; $k++) {
            if (isset($s[$i + $k]))
                $sum += $s[$i + $k];
        }

        if ($sum == $d)
            $total++;
        $i++;
    }

    return $total;
}

echo birthday([4], 4, 1);