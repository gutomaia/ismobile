<?php
if (!function_exists('__autoload')){
	function __autoload($classname){
		switch ($classname){
			case 'IsMobile':
				require_once('ismobile.class.php');
				break;
			default:
				$path = explode('_',$classname);
				$pathStr = implode(DIRECTORY_SEPARATOR, $path);
				require_once($pathStr.".php");
		}
	}
}
