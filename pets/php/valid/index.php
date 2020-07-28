<h1>  Валидация полей</h1>
<p>Добрый день! Вашему вниманию представляется демонстрация работы валидации полей.
Если хоть одно поле не запонено, то выведется ошибка</p>
<form action="index.php" method="get">
    <input type="text" name="field1" placeholder="field1">
    <input type="text" name="field2" placeholder="field2">
    <input type="submit" value="Отправить">
</form>
<?php
if (empty($_GET)) {
dump('Форма не отправлена.');
} else {
$needFields = [
'field1',
'field2'
];
$arrayWithErrors = [];
dump('Форма была отправлена и сервер получил результаты: ');

    foreach ($needFields as $needField) {
        if (!empty($_GET[$needField])) {
            continue;
        } else {
            $arrayWithErrors[] = "Ошибка! не заполнено обязательное поле '$needField'";
        }
    }
    if (!empty($arrayWithErrors)) {
        dump('Полный список ошибок:');
        dump($arrayWithErrors);
        dump('Все поля формы которые были отправлены:');
        dump($_GET);
    } else {
        dump('Поздравляем! Все поля успешно заполнены');
    }
}
    function dump($val)
    {
        echo '<pre>';
        print_r($val);
        echo '</pre>';
    }

?>