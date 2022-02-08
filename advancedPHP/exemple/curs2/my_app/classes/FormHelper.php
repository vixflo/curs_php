<?php

class FormHelper {
	
	public $method = "POST";
	public $action = "";
	
	
public function __construct($method,$action) {
	$this->method =$method;
	$this->action =$action;
}


function open_tag(){
	echo "<form method='{$this->method}' action='{$this->action}'>";
}

function close_tag(){
	echo "</form>";
}

function select($list,$select_name,$selected_item){
	
	
echo"<select name='{$select_name}'>";


foreach ($list as $list_item_key=>$list_item_value) {
	
	echo "<option value='{$list_item_key}'";
	
	if($selected_item == $list_item_key) {
		echo " selected ";
	}
	
	echo "> {$list_item_value} </option>";
	
}
echo"</select>";
}



function input($type,$name,$value=""){
	echo "<input type='{$type}' name = '{$name}' value='{$value}'>";
}

}