<?php
// Подключение бд к скрипту
require_once 'connect.php';

// Получение данных с формы
$login = $_POST['login'];
$password = $_POST['password'];

// Подготовка запроса
$sql = "SELECT * FROM USERS WHERE login = '$login'";
// Запрос в бд
$query = $conn->query($sql);

if ($row = $query->fetch_assoc()){
    // Создание сессии
    session_start();
    echo "Успешная авторизация";
    // Указание сессионных данных
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
}

if ($_SESSION) {
    header("Location: regindex.html");
    exit();
}
?>