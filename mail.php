<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Заявка с сайта YES_CSS</title>
</head>
<body>
<?php
$cl_name = htmlspecialchars($_GET['client_name']);
$cl_phone = htmlspecialchars($_GET['client_phone']);
$phrase = htmlspecialchars($_GET['phrase']);
$referer = htmlspecialchars($_GET['referer']);

 $to  = 'grad.artur@gmail.com';

// тема письма
$subject = 'Заявка на разработку сайта от- '.$cl_name.' - '.$cl_phone.'';

// текст письма
$message = '
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Отправка заявки</title>
</head>
<body>

  <p><b>Имя: </b>'.$cl_name.'</p>
  <p><b>Телефон клиента: </b>'.$cl_phone.'</p>
  <p>Источник:'.$referer.'</p>
  <p>Фраза:'.$phrase.'</p>

</body>
</html>
';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Дополнительные заголовки
$headers .= 'From: WEB!!!' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers)



?>

</body>
</html>
