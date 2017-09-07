<?php
	$dt = time();
	$page = filter_input(INPUT_SERVER, 'REQUEST_URI');
	$ref = filter_input(INPUT_SERVER, 'HTTP_REFERER');
	$path = "${dt}|{$page}|{$ref}\n";

	file_put_contents(PATH_LOG, $path, FILE_APPEND);