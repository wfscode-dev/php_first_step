<?php
$id =$_POST['id'];//получаем данные из формы


//подключение к бд
$connect = mysqli_connect('localhost',"root", "", "box");
//запрос на получение данных
$query = "DELETE FROM users WHERE id = $id";
//результат запроса
$result = mysqli_query($connect, $query);
//закрыть соединение
mysqli_close($connect);

?>

<meta http-equiv="refresh" content="1; url=index.php">
