<?php
// Установка локали и выбор даты
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%m');
$year = strftime('%Y');

/*
	Получаем текущий час в виде строки от 00 до 23
	и приводим строку к целому числу от 0 до 23
*/
$hour = (int) strftime('%H');
$welcom = ''; //Инициализируем переменную для приветствия

if($hour > 0 && $hour < 6 ) :
	$welcom = 'Доброй ночи';
 elseif ($hour >=6 && $hour < 12 ): 
	$welcom = 'Доброе утро';
elseif ($hour >=12 && $hour < 18 ) :
	$welcom = 'Добрый день';
elseif ($hour >=18 && $hour < 23 ) :
	$welcom = 'Добрый вечер';
 else :
	$welcom = 'Доброй ночи';
endif;
?>