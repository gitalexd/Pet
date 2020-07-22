<?php


$simple = array();

for ($i = 2; $i <= 10000; $i++)
{
    $flag = true;
    for ($j = 2; $j <= $i/2; $j++)
        if( $i % $j == 0)
            $flag = false;
    if($flag)
        $simple[] = $i;
}
$array = implode(",", $simple);
var_dump($array);

?>
