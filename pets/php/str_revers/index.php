<h1>Реверс строки</h1>
<p>Добрый день! Вашему вниманию представляется алгоритм реверса строки.</p>
<p>Если в форму вести 1234, то на экране выведется 4321</p>

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

for ($i = count($arr) - 1; $i >= 0; $i--) {
    print_r($arr[$i]);
}
$array = implode(",", $arr);

?>