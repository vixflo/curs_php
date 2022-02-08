<?php
function autoload($c){
	
	require_once "classes/" . 
	str_replace("\\","/",$c) . ".php";
	
}

spl_autoload_register('autoload');