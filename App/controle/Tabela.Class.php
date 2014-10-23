<?php
class Tabela{
    /*
     * TOPO BARRA DE NAVEGAÇÃO DA TABELA MASTER
     */
    function topo($nome,$modulo,$arquivo){
        echo '
        <div style="padding:0 10px;"><div  style="border-bottom: solid 3px #297ACC">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="92%"><strong>'.$nome.'</strong></td>
                <td width="8%" align="right"><ul class="nav  span7" style="margin-bottom:0px;">
                        <li class="pull-right"><a href="?pg=modulos/'.$modulo.'/list_'.$arquivo.'">Listar</a></li>
                        <li class="pull-right"><a href="?pg=modulos/'.$modulo.'/add_'.$arquivo.'">Cadastrar</a></li>
                    </ul></td>
            </tr>
            </table>
        </div>
        <br />
            ';
    }
    /*
     * GERADOR AUTOMATICO DE TABELA
     * ESTA FUNÇÃO IRA GERA UMA SQL ONDE OS DADOS VIRÃO DINAMICAMENTE
     */
    function Corpo($db,$th,$campos,$where,$modulos,$files,$_campo,$_tb,$_where,$_valor){
        $pag = "$_GET[pag]";
        if($pag >=  '1'){
            $pag = $pag;
        }else{
            $pag = '1';
        }
        $maximo = '10';
        $inicio = ($pag * $maximo) - $maximo;
        $sql = mysql_query("SELECT * FROM $db $where LIMIT $inicio, $maximo");
        /*
         * AQUI FICA O CABEÇALHO DA TABELA
         */
        echo
        '<table border="1" width="100%" >
            <tr>
            ';
        $v = explode(',',$th);;
        foreach($v as $x){
            echo '<th>'.ucfirst($x).'</th>';

        }
        /*
         * AQUI VAI O LOOP DA TABELA
         */
        echo '
                <th colspan="2">Ações</th>
            </tr>
            <tr>';
        while($dados = mysql_fetch_array($sql)){

            foreach(explode(',',$campos) as $v) {

                $x = $dados[$v];
                $d = explode(',', $_campo);


                echo '<td>';

                foreach ($d as $z) {



                    if ($v == $z) {

                        echo 'Acho ->'.$z;

                        }else{

                        }

                    }
                echo 'p';
                echo '</td>';
                }

            echo '
                <td width="1"><a href="?pg=modulos/'.$modulos.'/edit_'.$files.'&id='.$dados[id].'" class="fa fa-edit"></a></td>
                <td width="1"><a href="?pg=modulos/'.$modulos.'/dell_'.$files.'&id='.$dados[id].'" class="fa fa-close" style="color:#FF0000;"></a> </td>
            </tr>';
        }
        echo '
        </table>';

        /*
         * PAGINAÇÃO COM NUMERAÇÃO
         */
        echo '<ul class="pagination">';
        $sql_res = mysql_query("SELECT * FROM $db $where");
        $total = mysql_num_rows($sql_res);
        $paginas = ceil($total/$maximo);
        $links = '5';
        echo "<li><a href=\"?pg=modulos/$modulos/list_$files&pag=1\">«</a></li>";
        for ($i = $pag-$links; $i <= $pag-1; $i++){
            if($i >= 0){
                echo "<li><a href=\"?pg=modulos/$modulos/list_$files&pag=$i\">$i</a></li>";
            }
        }

        echo '<li class="disabled"><a href="#">'.$pag.'</a></li>';
        for($i = $pag +1; $i <= $pag+$links; $i++){
            if($i > $paginas){
            }  else {
                echo "<li><a href=\"?pg=modulos/$modulos/list_$files&pag=$i\">$i</a></li>";

            }
        }

        echo "<li><a href=\"?pg=modulos/$modulos/list_$files&pag=$paginas\">»</a></li>";

    }
}