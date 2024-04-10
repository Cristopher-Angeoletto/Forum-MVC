<?php
	define('INCLUDE_PATH','http://localhost/forum-mvc/');
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','forum');

	$autoload = function($class){
		$class = str_replace('\\','/',$class);
		include('classes/'.$class.'.php');
	};
	spl_autoload_register($autoload);
?>