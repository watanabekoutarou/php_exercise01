<?php

$dice = [1, 2, 3, 4, 5, 6];

// 配列をシャッフルする
shuffle($dice);

foreach ($dice as $value) {
    echo $value . '<br>';
    if ($value == 1) {
        break;
    }
}
