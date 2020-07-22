<h1>Сортировка строки</h1>
<p>Добрый день! Вашему вниманию представляется алгоритм сортировки строки.</p>
<p>Если вы введете 143, то программа вернет 134</p>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
<form action="index.php" enctype="multipart/form-data"
        method="post">
    <input type="text" name="str" id="str" placeholder="введите число"><br>
    <input class="btn btn-primary" type="submit" value="Отправить">

</form>
<?php

$arr = str_split($_POST['str']);
if (empty($_POST['str'])) {
    echo 'пусто';
}

$arr = str_split($_POST['str']);

$size = sizeof($arr)-1;
for ($i = $size; $i>=0; $i--) {
    for ($j = 0; $j<=($i-1); $j++)
        if ($arr[$j]>$arr[$j+1]) {
            $k = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $k;
        }
}


$array = implode(",", $arr);

print_r($array);

?>