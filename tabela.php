<?php

/*
 * CABEÇALHO DA TABELA
 */
$campos = explode(',','id,nome,idade,sexo');
$conteudo = explode(',','1,fulano,21,11');


/*
 * MODIFICADOR DE CAMPOS
 */
$modificador = explode(',','fulano,21,11');
$novovalor = explode(',','novovalor1,novovalor2,valo3');



echo '<table border="1px" width="100%">';
echo '<tr>';

foreach($campos as $x){
    echo '<th>'.$x.'</th>';
}
echo '</tr>';



/**
 * CONTEUDO DA TABELA
 */
echo '<tr>';
foreach($conteudo as $b){
    /*
     * COMPARANDO O MODIFICADOR COM O CAMPO DA TABELA
     */
    $isEquals = false;

    $arrlength=count($modificador);

    for($x=0;$x<$arrlength;$x++) {
         $m = $modificador[$x];


        if ($b == $m) {
            echo '<th>' . $novovalor[$x] . '</th>';
            $isEquals = true;


        }
    }
    if(!$isEquals) echo '<td>'.$b.'</td>';
}
echo '</tr>';
echo '</table>';

?>