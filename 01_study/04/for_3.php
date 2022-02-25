<?php

$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum = $sum + $i;
    //$sum += $i;  同じ意味になる
}

echo $sum;

