<?php

function longestPalindrom($s)
{
    $n = strlen($s);
    $maxlength = 0;
    $start = 0;

    if ($n < 2) return $s;

    function aroundCenter($s, $left, $right, &$start, &$maxlength)
    {
        while ($left > 0 && $right < strlen($s) && $s[$left] === $s[$right])
        {
            $left--;
            $right++;
        }
        $newLength = $right - $left - 1;
        if ($newLength > $maxlength)
        {
            $start = $left + 1;
            $maxlength = $newLength;
        }
    }

    for ($i = 0; $i < $n; $i++)
    {
        aroundCenter($s, $i, $i, $start, $maxlength);
        aroundCenter($s, $i, $i + 1, $start, $maxlength);
    }

    return substr($s, $start, $maxlength);
}

$s = "babad";
echo longestPalindrom($s);