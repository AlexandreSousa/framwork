<?php
$table->topo('Menu','menu','menu');
$form->Tformi('fulano');

$form->input('text','Nome','menu','id','','Nome do Menu','',20,'');
echo '<br>';
$form->Tbuton('submit','Gravar');

$form->Tformf();