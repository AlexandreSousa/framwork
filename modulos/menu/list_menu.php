<?php
$table->Topo('menu','menu','menu');
$table->setCamposSecod('id_menu,icone');
$table->setDbSecond('id_menu,icones');
$table->Corpo('menu_sub','id,nome,id_menu,link,icone','id_menu','menu','id','nome');



echo '<hr>';
echo '<pre>';
var_dump($table);
echo '</pre>';