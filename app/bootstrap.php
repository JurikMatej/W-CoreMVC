<?php
	// load Config
	require_once 'config/config.php';

	// Autoload Core Libraries
	spl_autoload_register(function($classname){
		require_once "libraries/" . $classname . ".php";
	})

?>