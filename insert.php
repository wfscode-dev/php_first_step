<?php

$firstname = $_POST['firstname'];//получаем данные из формы
$lastname = $_POST['lastname'];//получаем данные из формы


//подключение к бд
$connect = mysqli_connect('localhost',"root", "", "box");
//запрос на получение данных
$query = "INSERT INTO users (firstname, lastname)VALUES ('$firstname','$lastname')";
//результат запроса
$result = mysqli_query($connect, $query);
//закрыть соединение
mysqli_close($connect);

?>

<meta http-equiv="refresh" content="1; url=index.php">
