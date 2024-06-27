<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Обработка формы</title>
</head>
<body>
   <h2>Результат отправки формы:</h2>

   <?php
    // Проверяем, была ли отправлена форма методом POST
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем данные из формы
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

        // Выводим полученные данные
      echo "<p><strong>Имя:</strong> $name</p>";
      echo "<p><strong>Email:</strong> $email</p>";
      echo "<p><strong>Сообщение:</strong><br> $message</p>";

        // Здесь можно добавить код для сохранения данных в базу данных или отправки почтового сообщения и т.д.
        // Например:
        // сохранение в базу данных
        // $mysqli = new mysqli("localhost", "username", "password", "database");
        // $query = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
        // $mysqli->query($query);
        // $mysqli->close();
      
   } else {
      echo "<p>Форма не была отправлена.</p>";
   }
   ?>
   
   <p><a href="index.html">Вернуться к форме</a></p>
</body>
</html>