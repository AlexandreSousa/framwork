<?php
$table->topo('Menu','menu','menu');
$form->Tformi('fulano');


$form->menudb('menu','Menu','','id_menu','id_menu','id','nome','200');
echo '<br>';
$form->input('text','Nome','menu','id','','Nome do Menu','',20,'');
echo '<br>';
$form->menudb('icones','Icone','','icone','icone','id','icone','200');
echo '<br>';
$form->Tbuton('submit','Gravar');

$form->Tformf();