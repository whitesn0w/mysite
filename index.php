<?php
    define('PATH_LOG', 'log/path.log');
  include 'inc/log.inc.php'; 
  include 'inc/cookie.inc.php';
	include 'inc/lib.inc.php';
	include 'inc/data.inc.php';
 
  // Имя файла журнала

 //Тест-онлайн
 session_start();
  if(!isset($_SESSION['test']) and !isset($_POST['q'])){
    //Если первый запуск теста, инициализируем переменные
    $q = 0;
    $title = 'Пройдите тест';
  } else {
    //Создаем сессионную переменную test, содержащую массив ответов
    if($_POST['q'] != '1')
      $_SESSION['test'][] = $_POST['answer'];
    $q = $_POST['q'];
    $title = $_POST['title'];
  }
  
	//Инициализация заголовков страници
	$id = false;
	$title = "Сайт нашей школы";
	$header = "$welcom, Гость!";
	if (!empty($_GET['id'])){
		$id = strtolower(strip_tags(trim($_GET['id'])));
	}
	switch ($id) {
		case 'about':
			$title = 'О сайте';
			$header = 'О нашем сайте';
			break;
		case 'contact':
			$title = 'Контакты';
			$header = 'Обратная связь';
			break;
		case 'table':
			$title = 'Таблица умножения';
			$header = 'Таблица умножения';
			break;
		case 'calc':
			$title = 'Онлайн калькулятор';
			$header = 'Калькулятор';
			break;
    case 'test-online':
      $title = 'Пройти тест онлайн';
      $header = 'Пройти тест';
      break;
    case 'log':
      $title = 'Журнал посещений';
      $header = 'Журнал посещений';
      break;
    case 'sbook':
      $title = 'Гостевая книга';
      $header = 'Гостевая книга';
      break;
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title><?=$title;?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
   <?php require 'inc/top.inc.php'; ?>;
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?=$header;?></h1>
    <blockquote>
  
        </blockquote>
    <!-- Заголовок -->
    <!-- Область основного контента -->
   	<?php
   	switch ($id) {
   			case 'about':
   				include 'about.php';
   				break;
   			case 'contact':
   				include 'contact.php';
   				break;
   			case 'table':
   				include 'table.php';
   				break;
   			case 'calc':
   				include 'calc.php';
   				break;
        case 'test-online':
          include 'test/test.php';
          break;
        case 'log':
          include 'inc/view-log.inc.php';
          break;
        case 'sbook':
          include 'inc/sbook.inc.php';
          break;
   			
   			default:
   				include 'inc/index.inc.php';
   				break;
   		}	
   	?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <?php require 'inc/menu.inc.php'; ?>;
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
   <?php require 'inc/bottom.inc.php'; ?>;
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>