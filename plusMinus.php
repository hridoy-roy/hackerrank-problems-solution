<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr)
{
    $arraySize = count($arr);
    $positive = 0;
    $negative = 0;
    $zero = 0;

    for ($i = 0; $i < $arraySize; $i++) {
        if ($arr[$i] > 0) {
            $positive++;
        } elseif ($arr[$i] < 0) {
            $negative++;
        } elseif ($arr[$i] === 0) {
            $zero++;
        }
    }

    printf("%f\n", ($positive / $arraySize));
    printf("%f\n", ($negative / $arraySize));
    printf("%f\n", ($zero / $arraySize));
}


$arr = [-4, 3, -9, 0, 4, 1];
plusMinus($arr);