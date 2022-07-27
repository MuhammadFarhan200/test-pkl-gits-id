<?php

$arr = [1, 1, 0, 1, 1, 1];

for ($i = 5; $i < count($arr); $i++) {
    echo $arr[$i] += 2;
}

?>