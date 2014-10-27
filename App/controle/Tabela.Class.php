<?php
class Tabela{

    public $Files;
    public $Modulo;
    public $db;
    public $Campos;
    public $CamposSecod;
    public $_Tb;
    public $_Where;
    public $_Valor;
    public $DbSecond;
    public $Herd;

    public function Topo($nome,$modulo,$arquivo){
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
    public  function Corpo($db, $Campos,$mod,$file)
    {

        $this->db = $db;
        $this->Campos = $Campos;


        $pag = "$_GET[pag]";
        if($pag >=  '1'){
            $pag = $pag;
        }else{
            $pag = '1';
        }

        $maximo = '10';
        $inicio = ($pag * $maximo) - $maximo;

        $sql = mysql_query("SELECT * FROM {$this->db} LIMIT $inicio, $maximo");

        echo'

       <table border="1" width="100%">
            <tr>
        ';

        $v      = explode(',',$this->Campos);
        $z      = explode(',',$this->CamposSecod);
        $y      = explode(',',$this->DbSecond);
        $w      = explode(',',$this->_Where);
        $val    = explode(',',$this->_Valor);
        $h      = explode(',',$this->Herd);

        foreach($h as $h1){
            echo '<th>'.ucfirst($h1).'</th>';
        }
        echo '<th colspan="2">Ações</th>';
        echo '</tr>';

        /**
         * CONTEUDO DA TABELA
         */
        while($dados = mysql_fetch_array($sql)) {
            echo '<tr>';

                foreach ($v as $b) {
                    /*
                     * COMPARANDO O MODIFICADOR COM O CAMPO DA TABELA
                     */
                    $isEquals = false;

                    $arrlength = count($z);

                    for ($x = 0; $x < $arrlength; $x++) {
                        $m = $z[$x];



                        if ($b == $m) {

                            $len2 = count($w);

                            for ($ww=0; $ww<$len2; $ww++){
                                $w[$ww];

                                $len3 = count($val);
                                for($e=0;$e<$len3;$e++){

                                    if($ww == $e){
                                        if($ww == $x){
                                           // echo '<th>' . $y[$x] .'-'.$w[$ww] .'-'.$e. '-'.$dados[$b].'</th>';

                                            $sql2 = "SELECT * FROM $y[$x]  WHERE $w[$ww] = '$dados[$b]'";
                                            $qr = mysql_query($sql2);
                                            $array = mysql_fetch_array($qr);
                                            $ccx = $val[$e];
                                            echo '<td style="color: #C00D09">'.$array[$ccx].'</td>';
                                        }
                                    }
                                }
                            $isEquals = true;
                        }
                        }
                    }
                    if (!$isEquals) echo '<td>' . $dados[$b] . '</td>';
                }

            echo '<td width="1"><a href="?pg=modulos/'.$mod.'/edit_'.$file.'&id='.$dados[id].'" class="fa fa-edit"></a></td>
                <td width="1"><a href="?pg=modulos/'.$mod.'/dell_'.$file.'&id='.$dados[id].'" class="fa fa-close" style="color:#FF0000;"></a> </td>';
            echo '</tr>';
                echo '</tr>';

            }

        echo '</table>';


        //PAGINAÇÃO COM NUMERAÇÃO
        echo '<ul class="pagination">';
        $sql_res = mysql_query("SELECT * FROM $db $where");
        $total = mysql_num_rows($sql_res);
        $paginas = ceil($total/$maximo);
        $links = '5';
        echo "<li><a href=\"?pg=modulos/$mod/list_$file&pag=1\">«</a></li>";
        for ($i = $pag-$links; $i <= $pag-1; $i++){
            if($i >= 0){
                echo "<li><a href=\"?pg=modulos/$mod/list_$file&pag=$i\">$i</a></li>";
            }
        }

        echo '<li class="disabled"><a href="#">'.$pag.'</a></li>';
        for($i = $pag +1; $i <= $pag+$links; $i++){
            if($i > $paginas){
            }  else {
                echo "<li><a href=\"?pg=modulos/$mod/list_$file&pag=$i\">$i</a></li>";

            }
        }

        echo "<li><a href=\"?pg=modulos/$mod/list_$file&pag=$paginas\">»</a></li>";

    }

    /**
     * @param mixed $CamposSecod
     */
    public function setCamposSecod($CamposSecod)
    {
        $this->CamposSecod = $CamposSecod;

    }
    /**
     * @param mixed $DbSecond
     */
    public function setDbSecond($DbSecond)
    {
        $this->DbSecond = $DbSecond;

    }
    /**
     * @param mixed $Tb
     */
    public function setTb($Tb)
    {
        $this->_Tb = $Tb;
    }

    /**
     * @param mixed $Valor
     */
    public function setValor($Valor)
    {
        $this->_Valor = $Valor;
    }

    /**
     * @param mixed $Where
     */
    public function setWhere($Where)
    {
        $this->_Where = $Where;
    }

    /**
     * @param mixed $Herd
     */
    public function setHerd($Herd)
    {
        $this->Herd = $Herd;
    }


}