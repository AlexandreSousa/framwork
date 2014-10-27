<?php
$table->Topo('menu','menu','menu');
//INDICAÇÃO DO SEGUNDO CAMPO
$table->setCamposSecod('id_menu,icone');
//INDICAÇÃO DO NOME DA TABELA DO SEGUNDO CAMPO
$table->setDbSecond('menu,icones');
//NOME DO CAMPO DA SEGUNDA TABELA A QUAL DEVE SER PROCURADO
$table->setWhere('id,icone');
//NOME DO CAMPO DA SEGUNDA TABEL AO QUAL DEVE EXIBIR O VALOR
$table->setValor('icon,id');

//COMPOSIÇÃO DA TABELA
$table->Corpo('menu_sub','id,nome,id_menu,link,icone','menu','menu');