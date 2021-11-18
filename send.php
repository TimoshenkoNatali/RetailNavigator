<?php

if (isset($_POST['send'])) {

  $to = trim(urldecode(htmlspecialchars($_POST["email"])));
  $email = 'user@mto.tmweb.ru';
  $theme = trim(urldecode(htmlspecialchars($_POST["theme"])));
  $fio = trim(urldecode(htmlspecialchars($_POST["fio"])));
  $text = trim(urldecode(htmlspecialchars($_POST["text"])));
  $message = '
  <html>
  <body>
    <center>	
      <table border=1 cellpadding=6 cellspacing=0 width=90%>
        <tr>
          <td><b>Отправитель</b></td>
          <td>'.$fio.'</td>
        </tr>
        <tr>
          <td><b>Адресат</b></td>
          <td><a href="mailto:'.$email.'">'.$email.'</a></td>
        </tr>
        <tr>
          <td><b>Тема</b></td>
          <td>'.$theme.'</td>
        </tr>
        <tr>
          <td><b>Сообщение</b></td>
          <td>'.$text.'</td>
        </tr>
      </table>
    </center>	
  </body>
  </html>'; 
  $headers  = "Content-type: text/html; charset=utf-8\r\n";

  if (!empty($email) && !empty($theme) && !empty($message)) {
  $result = mail($to, $theme, $message, $headers);
  }	

  if ($result) {
    echo '<strong>Сообщение успешно отправлено!</strong>';
  } else {
    echo '<strong>Сообщение не отправлено!</strong> Попробуйте еще раз.';
  }
}
?>