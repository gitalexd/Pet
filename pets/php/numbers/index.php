<?php
$needElements = [
    'sugar',
    'milk',
    'eggs'
];

$bag = [
    1 => 'sugar',
    2 => 'eggs'
];

$errors = [];

foreach($needElements as $needElement)
{
    if (in_array($needElement,$bag)){
        continue;
    } else {
       $errors[] = $needElement;
    }
}

echo 'Список ошибок'.'<br>';
print_r($errors);

?>