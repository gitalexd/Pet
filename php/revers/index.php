<h1>Реверс строки</h1>
<p>Добрый день! Вашему вниманию представляется алгоритм реверса строки.</p>
<p>Если в форму вести 1234, то на экране выведется 4321</p>
<form action="index.php" enctype="multipart/form-data"
      method="post">
    <input type="text" name="str" id="str" placeholder="введите число"><br>
    <input type="submit" value="Отправить">

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