<?php
session_start();

require 'config.php';

sql_autoload_register(function($class){
	if(file_exists('modules/'.$class.'/'.$class.'.php')){
		require 'modules/'.$class.'/'.$class.'.php'; 
	}
});

Core::getInstance()->run($config);

?>