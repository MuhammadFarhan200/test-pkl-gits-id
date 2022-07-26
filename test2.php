<?php

function soal2($text)
{
    $reversed = array_reverse($text);
    for ($x = 0; $x < count($text); $x++) {
        echo $reversed[$x];
    }
}

$text = ['H', 'E', 'L', 'L', 'O'];

soal2($text);

?>
