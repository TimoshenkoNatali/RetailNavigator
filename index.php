<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/send.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MailTo</title>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="flex body">
  <div class="container flex">
  <h2 class="title">
    Отправка е-майл сообщения
  </h2>
  <form action="" method="post" class="flex form">
    <input type="text" name="fio" placeholder="ФИО" class="input">
    <input type="text" name="to" placeholder="Е-майл" class="input">
    <input type="text" name="theme" placeholder="Тема сообщения" class="input">
    <textarea rows="4" type="text" name="text" placeholder="Текст сообщения" class="input"></textarea>
    <input type="submit" name="send" value="Отправить" class="btn-reset btn">
  </form>
  </div>
  
</body>
</html>