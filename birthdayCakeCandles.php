<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles)
{
    $maxVal = max($candles);
    $total = 0;
    foreach ($candles as $key => $value) {
        if ($value == $maxVal) {
            $total++;
        }
    }
    return $total;
}



$candles = [4, 4, 3, 2];
birthdayCakeCandles($candles);