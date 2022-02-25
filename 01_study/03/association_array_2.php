<?php

$profile = [
    'name'  => 'Bob',
    'age'   => 21,
    'staff' => ['Tom', 'Ken']
];

$profile ['age'] = 22;

$profile['last'] = '最後に追加';

$profile['staff'][] = 'John';

echo '<pre>';

var_dump($profile);

echo '</pre>';