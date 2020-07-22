<?php

$x = range(2, 10000);

for ($i=0; $i <count($x) ; $i++)
{
    $str = '';
    for ($y=1; $y <= $x[$i]; $y++)
    {

        if (($x[$i]%$y) == 0)
        {
            if ($y == 1) continue;
            if ($y == $x[$i]) continue;
            $str .=$y.',';
        }
    }
    if ($str == '')
    {
        echo $x[$i].' ';
    }
}
    ?>