<?php
require "bd.php";
//Создается массив с ошибками
$err = [];
//Если нажали на кнопку
if (isset($_POST['butt'])) {
    //Проверка на пустоту всех значений
    if (empty($_POST['logo'])) {
        $err[] = "Введите ссылку на лого";
    }
    if (empty($_POST['name'])) {
        $err[] = "Введите название";
    }
    if (empty($_POST['about'])) {
        $err[] = "Введите описание";
    }
    if (empty($_POST['vladelec'])) {
        $err[] = "Введите хозяина";
    }
    //проверяем есть ли такая уже компания. Тоесть делаем запрос и если таких строк больше 0 то ошибка
    if (proverka("SELECT * FROM `company_info` WHERE `name`="."\"" .$_POST['name']. "\"") > 0) {
        $err[] = "Такая компания уже существует";
    }
    //Если ошибок нет
    if (empty($err)) {
        //Присваиваем значения
        $logo = $_POST['logo'];
        $name = $_POST['name'];
        $about = $_POST['about'];
        $vladelec = $_POST['vladelec'];
        //Формируем запрос. Не трогай точки и палки впизду их
        $que="INSERT INTO `company_info`(`logo`, `name`, `about`, `vladelec`) VALUES (" . "\"" . $logo . "\"," . "\"" . $name . "\"," . "\"" . $about . "\"," . "\"" . $vladelec . "\")";
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

