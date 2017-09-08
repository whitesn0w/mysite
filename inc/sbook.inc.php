<?php
/* Основные настройки */

define(DB_HOST, 'localhost');
define(DB_LOGIN, 'root');
define(DB_PASSWORD, "");
define(DB_NAME, 'sbook');

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

/* Основные настройки */

/* Сохранение записи в БД */

if(filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST'){
	$name = filter_input(INPUT_POST, 'name');
	$email = filter_input(INPUT_POST, 'email');
	$msg = filter_input(INPUT_POST, 'msg');
}

	 if (!$name) {
    $errors[] = 'Name can not to be empty';
    }

    if (!$email) {
    $errors[] = 'Email empty or invalid';
    } else {
    $select = "SELECT email FROM msgs WHERE email='{$email}';";

    $email_exists = mysqli_query($link, $select);
    $email_exists = mysqli_fetch_all($email_exists);

    if (!empty($email_exists)) {
        $errors[] = 'This email is exists';
    }
    }
if (!$errors) {
$sql = "INSERT INTO msgs (name, email, msg) VALUES ('$name',
'$email', '$msg');";
$result = mysqli_query($link, $sql);
}
/* Сохранение записи в БД */

/* Удаление записи из БД */

if (isset($_GET['del'])){

	$id = ($_GET['del']);

	$query ="DELETE FROM msgs WHERE id = '$id'";

	mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
}

/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Добавить" />

</form>

<?php
/* Вывод записей из БД */

 	$count = mysqli_query($link, "SELECT * FROM msgs LIMIT 300;");
 	$num_rows = mysqli_num_rows($count);

 	if ($count)
 		$count = mysqli_fetch_all($count, MYSQLI_ASSOC);
 	else 
 		false;
 	
 	if(is_array($count) && !empty($count)) {
 		foreach ($count as $key) {
 			?>
 			<p>
	 			<?= $key['id']; ?>
	 			<?= $key['name']; ?>
	 			<?= $key['email']; ?>
	 			<?= $key['msg']; ?>
	 			<?= $key['datetime'];?>
 			</p>
 			<p align="right"><a href="http://mysite.ru/index.php?id=sbook&del=<?php echo $key['id']; ?>">
Удалить</a></p>
 			
 			<?php
 		}
 	} else {
 		?>
 		<p>No items</p>
 		<?php 
 	}
 	
 	
 	mysqli_close($link);
?>
<p>Всего записей в гостевой книге: <?= $num_rows;?></p>
