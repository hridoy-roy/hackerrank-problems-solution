<?php

/*
 * Complete the 'countApplesAndOranges' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER s
 *  2. INTEGER t
 *  3. INTEGER a
 *  4. INTEGER b
 *  5. INTEGER_ARRAY apples
 *  6. INTEGER_ARRAY oranges
 */

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
{
    $totalApples = 0;
    $totalOranges = 0;

    foreach ($apples as $apple) {
        $apple += $a;
        if ($apple >= $s && $apple <= $t) {
            $totalApples++;
        }
    }
    foreach ($oranges as $orange) {
        $orange += $b;
        if ($orange >= $s && $orange <= $t) {
            $totalOranges++;
        }
    }

    print $totalApples."\n".$totalOranges."\n";
}

echo countApplesAndOranges(7, 10, 4, 12, [2, 3, -4], [3, -2, -4]);