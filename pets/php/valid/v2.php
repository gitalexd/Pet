<?php

$needElements = [
    'lemon',
    'banans',
    'coconat'
];

$bag = [
    1 => 'coconut',
    2 => 'lemon',
    3 => 'potato'
];

$errors = [];

foreach ($needElements as $needElement) {
    if(in_array('$needElement', $bag)){
        continue;
    }else{
        $errors = $needElement;
    }
}
echo 'Список ошибок' . '<br>';
print_r($errors);