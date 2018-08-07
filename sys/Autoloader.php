<?php
function __autoload($class){
	if(file_exists("app/controllers/{$class}.php")){
		require_once "app/controllers/{$class}.php";
	}else
		if(file_exists("app/models/{$class}.php")){
			require_once "app/models/{$class}.php";
	}else
		if(file_exists("sys/{$class}.php")){
			require_once "sys/{$class}.php";
		}
}