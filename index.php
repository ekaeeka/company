<?php
//Подключаем файл с бд
require "bd.php";
//Делаем запрос из бд с выводом всех строк с компаниями. fetch_all это преобразовать данные из бд в ассоциативный массив
$company = zapros("SELECT * FROM `company_info`")->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <tr>
        <td>Логотип</td>
        <td>Название</td>
        <td>Описание</td>
        <td>Владелец</td>
    </tr>
    <!--До конца массива рисуется строка таблицы tr в ней пишется картинка у которой пусть равен значению из бд, и так у всех дальше-->
    <?php  for ($i=0;$i<count($company);$i++){
        echo "<tr><td><img src='{$company[$i]['logo']}'></td><td>{$company[$i]['name']}</td><td>{$company[$i]['about']}</td><td>{$company[$i]['vladelec']}</td></tr>";
    }?>
</table>
<div>Добавить фирму</div>
<form action="dobavl.php" method="POST">
    <input type="text" name="logo" placeholder="Введите ссылку на логотип">
    <input type="text" name="name" placeholder="введите название компании">
    <input type="text" name="about" placeholder="Введите описание">
    <input type="text" name="vladelec" placeholder="Введите хозяина компании">
    <input type="submit" name="butt" class="button">
</form>
<div>Удалить фирму</div>
<form action="delete.php" method="POST">
    <input type="text" name="name_c" placeholder="введите название компании">
    <input type="submit" name="butt" class="button">
</form>
<div>Редактировать описание</div>
<form action="red.php" method="POST">
    <input type="text" name="name_c" placeholder="введите название компании">
    <input type="text" name="about" placeholder="Введите описание">
    <input type="submit" name="butt" class="button">
</form>
</body>
</html>