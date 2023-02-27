<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades)
{
    $round = 3;

    for ($i = 0; $i < count($grades); $i++) {

        if ($grades[$i] >= 38) {
            $remainder = $grades[$i] % 10;
            $quotient = round($grades[$i] / 10);
            if ($remainder < 5 && ((($quotient * 10) + 5) - $grades[$i]) < 3) {
                $grades[$i] =  $quotient * 10 + 5;
            } else if ($remainder > 5 && ((($quotient - 1) * 10 + 10) - $grades[$i]) < 3) {
                $grades[$i] = ($quotient - 1) * 10 + 10;
            }
        }
    }

    return $grades;
}

print_r(gradingStudents([2, 37, 38]));
