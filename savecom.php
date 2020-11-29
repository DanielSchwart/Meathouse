<?php
  /* Принимаем данные из формы */
  $name = $_POST["name"];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
  $today = date("y-m-d");
  $mysqli = new mysqli("localhost", "root", "", "user");// Подключается к базе данных
  $mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`, `date`) VALUES ('$name', '$page_id', '$text_comment','$today')");// Добавляем комментарий в таблицу
  echo '<script type="text/javascript"> window.open("com.php","_top");</script>';
?>

