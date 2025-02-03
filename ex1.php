<?php

function longestMonotonicSubarray($nums) {

    $maxlen = 1;
    $inclen = 1;
    $declen = 1;

    for ($i = 0; $i < count($nums) - 1; $i++){
        if ($nums[$i+1] > $nums[$i]) {
            $inclen++;
            $declen = 1;
        }
        else if ($nums[$i+1] < $nums[$i]) {
            $declen++;
            $inclen = 1;
        }
        else {
            $inclen = 1;
            $declen = 1;
        }

        $maxlen = max($maxlen, $inclen, $declen);
    }

    return $maxlen;
}

$nums = [1, 4, 3, 3, 2];
echo longestMonotonicSubarray($nums);

?>