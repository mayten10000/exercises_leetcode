<?php

function findLongest($s)
{
    $maxlength = 0;
    $str = str_split($s);
    $n = count($str);


    for ($i = 0; $i < $n; $i++)
    {
        $seen = [];
        for ($j = $i; $j < $n; $j++)
        {
            if (isset($seen[$str[$j]])){
                break;
            }
            $seen[$str[$j]] = true;

            $maxlength = max($maxlength, $j - $i + 1);
        }
    }

    return $maxlength;

}

$s = 'abcabcabvcdqlccdf';

echo findLongest($s);

// скорость выполнения O(n^2)

