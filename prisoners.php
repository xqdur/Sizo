<?php
session_start();

if (!isset($_SESSION['login'])){
    die('Авторизуйтесь');
}

$conn = mysqli_connect("localhost", "root", "", "FaizMirh");

if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Система СИЗО</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">

    <div class="container">
        <h2 class="main-title">Реестр заключенных</h2>
        
        <div class="table-card">
            <table class="prisoner-table">
                <thead>
                    <tr>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Дата рождения</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM spisokSizo";
                    if($result = $conn->query($sql)){
                        while($row = $result->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row["Surname"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["Name"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["Fathername"]) . "</td>";
                            echo "<td><span class='date-tag'>" . htmlspecialchars($row["Birthday_data"]) . "</span></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

<?php mysqli_close($conn); ?>