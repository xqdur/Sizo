<?php
session_start();

if (!isset($_SESSION['login'])){
    die('Авторизуйтесь');
}

// Вывод данных с сессии

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="borderProf">
    <div class="profile-item">
        <span class="label">Логин:</span>
        <span class="user-data"><?php echo $_SESSION['login']; ?></span>
    </div>
    
    <div class="profile-item">
        <span class="label">Пароль:</span>
        <span class="user-data"><?php echo $_SESSION['password']; ?></span>
    </div>
</div>
    <img class=photoProf src="https://upload.wikimedia.org/wikipedia/commons/0/02/Gerb_FSIN.png">
</body>
</html>
