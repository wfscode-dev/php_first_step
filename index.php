<?php
//подключение к бд
$connect = mysqli_connect('localhost',"root", "", "box");
//запрос на получение данных
$query = "SELECT * FROM users";
//результат запроса
$result = mysqli_query($connect, $query);
//получаем данные
$users = mysqli_fetch_all($result);
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
<h1>Имена</h1>
<!--вставка данных из бд с помощью php-->
<?php
foreach ($users as $key => $user){
  echo '<a href="edit.php?id='.$user[0].'">'.$user[1].' '.$user[2].'</a>
    <form action="delete.php" method="post">
    <input type="hidden" name="id" value="'.$user[0].'">
    <input type="submit" value="Удалить">
</form>
<br>';
}
?>
<!--форма с методом пост-->
<form action="insert.php" method="post">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="submit" value="Создать">
</form>
</body>
</html>