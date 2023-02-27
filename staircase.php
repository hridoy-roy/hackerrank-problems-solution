<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n)
{
    $spaceSize = $n - 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($k = $spaceSize; $k > 0; $k--) {
            print " ";
        }
        for ($j = 1; $j <= $i; $j++) {
            print "#";
        }
        print "\n";
        $spaceSize--;
    }
}

$n = 7;

staircase($n);