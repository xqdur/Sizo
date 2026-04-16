<?php
require_once 'connect.php';

$name = $_POST['Name'];
$surname = $_POST['Surname'];
$fathername = $_POST['Fathername'];
$birthday = $_POST['Birthday_data'];


$sql = "INSERT INTO spisokSizo (Name, Surname, Fathername, Birthday_data) VALUES ('$name', '$surname', '$fathername', '$birthday')";

$query = $conn->query($sql);

header("Location: regindex.html");
?>