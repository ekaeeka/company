<?php
require "bd.php";
//Создается массив с ошибками
$err = [];
//Если нажали на кнопку
if (isset($_POST['butt'])) {
    //Проверка на пустоту всех значений

    if (empty($_POST['name_c'])) {
        $err[] = "Введите название компании";
    }

    //проверяем есть ли такая  компания. Тоесть делаем запрос и если таких строк меньше 1  то ошибка
    if (proverka("SELECT * FROM `company_info` WHERE `name`=" . "\"" . $_POST['name_c'] . "\"") <= 0) {
        $err[] = "Такой компании  нет";
    }
    if (empty($err)) {
        //Присваиваем значения
        $name = $_POST['name_c'];
        //Формируем запрос. Не трогай точки и палки впизду их
        $que = "DELETE FROM `company_info` WHERE `name` = " . "\"" . $name . "\"";
        //Отправляем запрос
        zapros($que);
        //Перенесоим пользователя на главную страницу
        header('Location: index.php');
    }
    else{
        //Если ошибки есть то выводим их
        echo perebor($err);
        //Даем ссылку на главную
        echo "<a href='index.php'>На главную<a/>";
    }
}
