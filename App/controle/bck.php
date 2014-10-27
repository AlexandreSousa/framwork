$v = explode(',',$campos);;

foreach($v as $x){
$ronw =  $dados[$x];

$b = explode(',',$_campo);

foreach($b as $c) {

if ($c == $x) {
//SELEC EM SEGUNDA TABELA

$T = explode(',',$_tb);

foreach($T as $t){
$ronw = $dados[$x];

$w = explode(',',$_where);
foreach($w as $W){


$selec = "SELECT * FROM $t WHERE $W = '$ronw'";
$array = mysql_query($selec);
/*
* VERIFICAR SE O CAMPO ESTA VAZIO CASO ESTEJA CRIAR LINHA DE TABELA VAZIA
*/
$linhas = mysql_num_rows($array);
if ($linhas == '0') {
echo '<td>&nbsp;</td>';
} else {
while ($result = mysql_fetch_array($array)) {

///EXPLODIR AQUI PRA TERMINAR

$vv =explode(',',$_valor);

foreach($vv as $vf){
$vf.'<br>';
$qrf = $result[$vf];
echo '<td>' . $qrf . '</td>';
}


}
}
}
}
} else {
echo "<td>$ronw</td>";
}
}
}
echo '
<td width="1"><a href="?pg=modulos/'.$modulos.'/edit_'.$files.'&id='.$dados[id].'" class="fa fa-edit"></a></td>
<td width="1"><a href="?pg=modulos/'.$modulos.'/dell_'.$files.'&id='.$dados[id].'" class="fa fa-close" style="color:#FF0000;"></a>
</td>
            