<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s)
{
    return date('H:i:s', strtotime($s));
}

$s = '07:05:45PM';
timeConversion($s);