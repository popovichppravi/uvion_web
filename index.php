<?
  $referer = $_SERVER['HTTP_REFERER'];
  if (stristr($referer, 'yandex.ru')) { $search = 'text='; $crawler = 'Yandex'; }
  if (stristr($referer, 'rambler.ru')) { $search = 'words='; $crawler = 'Rambler'; }
  if (stristr($referer, 'google.ru')) { $search = 'q='; $crawler = 'Google'; }
  if (stristr($referer, 'google.com')) { $search = 'q='; $crawler = 'Google'; }
  if (stristr($referer, 'mail.ru')) { $search = 'q='; $crawler = 'Mail.Ru'; }
  if (stristr($referer, 'bing.com')) { $search = 'q='; $crawler = 'Bing'; }
  if (stristr($referer, 'qip.ru')) { $search = 'query='; $crawler = 'QIP'; }

  if (isset($crawler))
  {
    $phrase = urldecode($referer);
    eregi($search.'([^&]*)', $phrase.'&', $phrase2);
    $phrase = $phrase2[1];
    $referer = $crawler;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />

  <title>START Web</title>

  <!-- Данное значение часто используют поисковые системы, заполняем ответственно -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <!-- Адаптируем страницу для мобильных устройств -->
  <meta name="viewport" content="width=1024, maximum-scale=2.0" />

  <!-- Традиционная иконка сайта, размер 16x16, прозрачность поддерживается. Рекомендуемый формат: .ico -->
  <link rel="shortcut icon" href="favicon.ico" />

  <!-- Иконка сайта для устройств от Apple, рекомендуемый размер 114x114, прозрачность не поддерживается -->
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />

  <!-- Подключаем файлы стилей -->
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <!-- Скрипты -->
  <script type="text/javascript" src="js/modernizr.custom.js"></script> <!-- Определение возможностей браузера -->
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>

</head>

<body>

<div class="overlay"></div>
<header>
  <div class="wrapper clearfix">
  <table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="200" align="left"><img src="images/logo.gif" width="189" height="60"></td>
    <td align="right" valign="middle">
	<span class="tel">+7&nbsp;(499)&nbsp;34-68-200</span></td>
    <td width="200" align="right" valign="middle">
	<button class="btn-yellow" onClick="yaCounter26970030.reachGoal('orderopen'); return true;"></button>
	</td>
  </tr>
  </table>
  </div> <!-- end wrapper -->
</header>



<section class="l1">
  <div class="wrapper">
  <center>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="200" align="center" valign="bottom">
		<span class="maintitle">Разработка, доработка<br>
		и поддержка сайтов</span></td>
      </tr>
      <tr>
        <td height="65" align="center" valign="bottom"><span class="subtitle">Быстро, качественно, не дорого!</span></td>
      </tr>
      <tr>
        <td height="85" align="center" valign="bottom"><img src="images/bxlable.png" width="230" height="44"></td>
      </tr>
    </table>
  </center>
  </div> 
  <!-- end wrapper -->
</section>



<section class="l2">
  <div class="wrapper">
  <center>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="175" align="center" valign="bottom"><img src="images/info.gif" width="955" height="143"></td>
      </tr>
      <tr>
        <td height="112" align="center" valign="middle"><img src="images/info2.gif" width="658" height="64"></td>
      </tr>
      <tr>
        <td height="60" align="center" valign="top"><img src="images/shadow.gif" width="955" height="38"></td>
      </tr>
      <tr>
        <td height="120" align="center" valign="top"><span class="title">Последние 10 работ</span></td>
      </tr>
      <tr>
        <td height="500" align="center" valign="top"><img src="images/works.gif" width="955" height="496"></td>
      </tr>
      <tr>
        <td height="42" align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="center" valign="top"><img src="images/fullp.gif" width="212" height="36"></td>
      </tr>
    </table>
  </center>
  </div> 
  <!-- end wrapper -->
</section>



<section class="l3">
  <div class="wrapper">
  <center>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="122" align="center" valign="bottom"><span class="title">Почему стоит выбрать нас </span></td>
      </tr>
      <tr>
        <td height="455" align="center" valign="top">
		<div style="height: 25px;"></div>
		<img src="images/diamong.png" width="883" height="373"></td>
      </tr>
    </table>
  </center>
  </div> 
  <!-- end wrapper -->
</section>



<section class="l4">
  <div class="wrapper">
  <center>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="76" align="center" valign="bottom">&nbsp;</td>
      </tr>
      <tr>
        <td height="92" align="center" valign="top"><span class="title">Отзывы клиентов </span></td>
      </tr>
      <tr>
        <td align="center" valign="top"><img src="images/rew1.gif" width="924" height="239"></td>
      </tr>
      <tr>
        <td height="28" align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><img src="images/rew1.gif" width="924" height="239"></td>
      </tr>
      <tr>
        <td height="28" align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><img src="images/rew1.gif" width="924" height="239"></td>
      </tr>
      <tr>
        <td height="28" align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    </table>
  </center>
  </div> 
  <!-- end wrapper -->
</section>



<section class="l10">
  <div class="wrapper">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="125" align="center" valign="bottom"><span class="title">Оставьте заявку </span></td>
      </tr>
      <tr>
        <td height="16" align="center" valign="top"></td>
      </tr>
	   <tr>
        <td align="center" valign="top">
		<span class="text20">Познакомимся, расскажем больше о себе. Обсудим ваш проект и задачи по нему. <br>
         Сразу назовём примерную стоимость и посмотрим, на сколько мы можем быть вам полезны.</span>
		 <div style="height:32px;"></div></td>
      </tr>
      <tr><td height="130" align="center" valign="top" style="background: url(images/l10_form_bg.gif) center top no-repeat; padding-top: 16px; ">

			<form method="get" action="mail.php">
			<input name="referer" type="hidden" value="<?=$referer?>">
			<input name="phrase" type="hidden" value="<?=$phrase?>">
			<span class="input-wrap"><span class="input-error">Заполните это поле</span><input type="text" name="client_name" placeholder="Введите имя" />
			</span>&nbsp;
			<span class="input-wrap"><span class="input-error">Заполните это поле</span>
			<input type="text" class="mask-input phone-input" name="client_phone" placeholder="Введите телефон" />
			</span>&nbsp;
			<button class="btn-yellow" onClick="yaCounter26970030.reachGoal('orderopen'); return true;">&nbsp;</button>
			</form>
			
	  
	  </td></tr>
    </table>
  </div> 
  <!-- end wrapper -->
</section>

<footer>
  <div class="wrapper clearfix">
  <table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="246" align="left"><img src="images/logo.gif"></td>
    <td align="right" valign="middle">
	Есть вопросы? Звоните&nbsp;&nbsp;&nbsp;
	<span class="tel_bottom">+7&nbsp;(499)&nbsp;34-68-200</span><br>
	Москва, Рязанский пр-т, д. 75 корп. 4</td>
  </tr>
  </table>
  </div> <!-- end wrapper -->
</footer>


<!-- popup 1 -->
<div class="popup popup-order">
  <a href="#" class="close"></a>
  <div class="title">
    Оставьте свои <br/>
    контактные данные, <br/>
    мы вам перезвоним
  </div>
  <form method="get" action="mail.php">
        <input name="referer" type="hidden" value="<?=$referer?>">
        <input name="phrase" type="hidden" value="<?=$phrase?>">
    <span class="input-wrap"><span class="input-error">Заполните это поле</span><input type="text" name="client_name" placeholder="Введите имя" /></span>
    <span class="input-wrap"><span class="input-error">Заполните это поле</span><input type="text" class="mask-input phone-input" name="client_phone" placeholder="Введите телефон" /></span>
    <button class="btn-yellow" onClick="yaCounter26276391.reachGoal('orderpopup'); return true;"></button>
  </form>
</div>
<!-- end popup 1 -->


<!-- end popup 2 -->
<div class="popup popup-report">
  <a href="#" class="close"></a>
  <div class="title">Cпасибо!</div>
  Мы получили ваше сообщение и перезвоним вам в ближайшее время.
</div> 
<!-- end popup 2 -->


<!-- Yandex.Metrika counter -->

<!-- /Yandex.Metrika counter -->

</body>
</html>
