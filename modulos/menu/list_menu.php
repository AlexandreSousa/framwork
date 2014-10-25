<?php
$table->Topo('menu','menu','menu');
$table->setCamposSecod('id_menu,link','db2,db3','id,id','nome,nome2');
$table->Corpo('menu_sub','id,nome,id_menu,link,icone','id_menu','menu','id','nome');



echo '<hr>';
echo '<pre>';
var_dump($table);
echo '</pre>';


