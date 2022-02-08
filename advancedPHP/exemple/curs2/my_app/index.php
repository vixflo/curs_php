<?php

require "config.php";


$cars = array(
"Mercedes","BMW","Suzuki","Honda","BMW1","Suzuki1","Honda1"
);

$trucks = array(
"SCANIA","MAN","IVECO"
);


$form = new FormHelper("POST","index.php?other_page=1");
$form->open_tag();
$form->select($cars,"cars",4);
$form->select($trucks,"trucks",2);

$form->input('text','my_text');
$form->input('checkbox','my_checkbox');
$form->input('submit','my_button','Button');
$form->close_tag();
?>