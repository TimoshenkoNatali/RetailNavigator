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
  <link rel="stylesheet" href="..css/normalize.css">
</head>
<body>
  <form action="" method="post">
    <input type="text" name="fio" placeholder="ФИО">
    <input type="text" name="to" placeholder="Е-майл">
    <input type="text" name="theme" placeholder="Тема сообщения">
    <input type="textarea" name="text" placeholder="Текст сообщения">
    <input type="submit" name="send" text="Отправить">
  </form>
</body>
</html>