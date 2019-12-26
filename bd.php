<?php
function createMySql(): mysqli
{
    $mysqli = new mysqli("localhost", "root", "", "company");
    if ($mysqli->connect_errno) {
        throw new Exception("Failed to connect to MySql(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno);
    }
    return $mysqli;
}
//Запрос к бд
function zapros($que){
    $mysql=createMysql();
    return $mysql->query($que);
}

///Проверка на существование чего либо в бд
/// num_row дает число строк
function proverka($que)
{
    $mysqli = createMySql();
    if ($result = $mysqli->query($que)) {
        $row = $result->num_rows;
    }
    return $row;
}

//Для перебора ошибок
function perebor($err)
{
    foreach ($err as $item)
        echo $item."<br>";
}