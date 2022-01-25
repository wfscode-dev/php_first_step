<?php

$id = $_GET['id'];

//подключение к бд
$connect = mysqli_connect('localhost',"root", "", "box");
//запрос на получение данных
$query = "SELECT * FROM users WHERE id = '$id'";
//результат запроса
$result = mysqli_query($connect, $query);
//получаем данные в виде строки
$users = mysqli_fetch_row($result);
//закрыть соединение
mysqli_close($connect);

?>

<!--HTML Для вывода данных-->
<!DOCTYPE HTML PUBLIC>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset=utf-8">
    <title>Пример</title>
</head>
<body>
<h1>
    <?php
        echo $users[1] .' '.$users[2] .'<br>'
    ?>
</h1>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $users[0] ?>">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="submit" value="Обновить">
</form>
</body>
</html>
