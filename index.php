<?php

require_once "sys/Autoloader.php";
require_once "Configuration.php";

Session::begin();

$Request = $_SERVER['REQUEST_URI'];

$Request = substr($Request, strlen(Configuration::PATH));
//print_r($Request);
$Routes = require_once "Routes.php";

$Arguments = [];
$FoundRoute = null;
foreach($Routes as $Route){
	if(preg_match($Route['Pattern'],$Request,$Arguments)){
		$FoundRoute = $Route;
		break;
	}
}
unset($Arguments[0]);
$Arguments = array_values($Arguments);


$controller = $FoundRoute['Controller']."Controller";


$cont = new $controller;

if(method_exists($cont,$FoundRoute['Method'])){
	$method = $FoundRoute['Method'];
	call_user_func_array(array($cont,$method),$Arguments);
}else{
	die('This controller does not have the requested method');
}



