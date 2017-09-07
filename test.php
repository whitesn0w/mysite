<?php 

/*************************MASSIV***************************


//$arr = array(); 

/*$arr = array(
	10 => "Vasy",
	"Pety",
	5 =>  "Koly"
	);

echo $arr[0];
echo "<br />";
echo count($arr);
$arr[] = 45;
$arr[] = 45;
$arr[150] = 45;
echo "<br />";
echo count($arr);
echo "<br />";
print_r($arr);
echo "<br />";
var_dump($arr);
echo "<br />";
//////////////////////////////////////////////////////////////
$arr = array(
	"name" => "Vasy",
	"login" => "root",
	"pass" =>  "12345"
	);

echo $arr[0];
echo "<br />";
echo count($arr);
$arr["age"] = 25;
$arr[] = true;

echo "<br />";
echo count($arr);
echo "<br />";
print_r($arr);
echo "<br />";
var_dump($arr);
echo "<br />";

*/






/*****************************ЦИКЛЫ*******************************/

/*
	if ($i%2) {

		echo "$i <br />";
	}
}
*/
/*
	$var = "HELLO";
	$value = strlen($var);
	$i = 0;
	while($i < $value) {
		echo "$var[$i] <br />";
		$i++;
	}
*/
/*
	$arr = array ("name" => "Josh", "login" => "root", "age" => 25);

	foreach ($arr as $key => $value) {
		echo "$key : $value <br />";
	}
	*/


/*
	function say($name) {
		echo "<h1>Hello, $name!</h1>";
		$name = "Vasy";
	}	

	say("Josh");
	$name = "Mike";
	say($name);
	echo $name;
*/
/*
	function foo() {
		static $x = 0;
		echo $x++;
	}

	foo();
	foo();
	foo();
*/
/*
	function sum ($n1, $n2) {
		return $n1 + $n2;
	}

	$rezult = sum(2,3);
	echo $rezult;
*/
/*
	function foo() {
		echo func_num_args(); // количество аргументов
		print_r(func_get_args()); //массив елементов
		echo func_get_arg(2); // елемент под номером
	}

	foo(1, 2, 3, 4, 5);
	*/

	//print_r(get_defined_functions());	

	//echo time();

	//setcookie("userName", 'John');
	
$link = mysqli_connect('localhost', 'root', '', 'web');

	if (!$ink){
		echo mysqli_connect_errno();
		echo mysqli_connect_error();
	}

mysqli_close($link);
?>

