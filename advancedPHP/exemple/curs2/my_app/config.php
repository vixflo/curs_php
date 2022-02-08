<?php
function autoload($c){
	
	require_once "classes/{$c}.php";
	
}

spl_autoload_register('autoload');