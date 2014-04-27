<?php
	define("APP_PATH", "./Apps/");
	define("APP_DEBUG",true);
	define("RUNTIME_PATH",'./Runtime/');
	require "./ThinkPHP/ThinkPHP.php";
	echo C('__PUB__');
?>