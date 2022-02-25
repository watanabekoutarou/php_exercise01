<?php

// 全ての数値の2倍を表示する
$nums = [1, 2, 3, 4, 5];

foreach ($nums as $num) { 
    $num *= 2;
    echo $num . '<br>';
}

echo '<hr>';

$sports = ['baseball', 'soccer', 'tennis'];

foreach ($sports as $sport) {
    echo $sport . '<br>';
}

//foreach (配列 as 要素名) {}
