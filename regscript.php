<?php
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];


$sql = "INSERT INTO USERS (login, password) VALUES ('$login', '$password')";

$query = $conn->query($sql);

header("Location: index.html");
?>