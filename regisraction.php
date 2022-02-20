<?php
// Проверяем что переданный массив POST не пустой
if(empty($_POST))
    exit;
$name = $_POST["fio"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = md5($_POST["password"]);

include 'db.php'; // Подключаемся к БД 
// запросом пердаем данные для добавления
$query = "INSERT INTO `users` (`name`, `login`, `email`, `password`) 
VALUES('$name', '$login', '$email', '$password')";
$link->query($query) or die($link->error);
// Выполняем запрос и закрываем подключение к БД
$link->close();
?>