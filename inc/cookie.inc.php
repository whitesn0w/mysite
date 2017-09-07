<?php

$visitCounter = 0;
$lastVizit = "";

if (isset($_COOKIE["visitCounter"]))
	$visitCounter = $_COOKIE["visitCounter"];
$visitCounter++;

if (isset($_COOKIE["lastVizit"]))
	$lastVizit = date("d-m-Y H-i-s", $_COOKIE["lastVizit"]);	

	setcookie("visitCounter", $visitCounter, 0x7FFFFFFF);
	setcookie("lastVizit", time(), 0x7FFFFFFF);
?>