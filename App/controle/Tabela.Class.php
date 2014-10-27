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
    public  function Corpo($db, $Campos, $_Tb,$_Where,$_Valor)
    {

        $this->db = $db;
        $this->_Where = $_Where;
        $this->_Valor = $_Valor;
        $this->_Tb = $_Tb;
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

        $v = explode(',',$this->Campos);

        foreach($v as $x){
            echo '<th>'.ucfirst($x).'</th>';
        }
        echo '<th colspan="2">Ações</th>';
        echo '</tr>';

        $xx  = explode(',',$this->CamposSecod);
        $xdb = explode(',',$this->DbSecond);


        while($dados = mysql_fetch_array($sql)) {
            echo '<tr>';

                foreach ($v as $x) {

                    /*

                     $contagem = count($xdb);
                    for($f=0; $f<$contagem;$f++){
                        $m = $xdb[$f];
                    }
                    */
                    foreach ($xx as $g) {
                        $isEquals = false;
                        if ($x == $g) {

                            echo '<td>' . $x . '</td>';
                            $isEquals = true;
                        }


                        if (!$isEquals) {
                            echo '<td>' . $dados[$x] . '</td>';
                        }
                    }

                }

            echo '<td width="1"><a href="?pg=modulos/'.$modulos.'/edit_'.$files.'&id='.$dados[id].'" class="fa fa-edit"></a></td>
                <td width="1"><a href="?pg=modulos/'.$modulos.'/dell_'.$files.'&id='.$dados[id].'" class="fa fa-close" style="color:#FF0000;"></a> </td>';
            echo '</tr>';
        }



        echo '</table>';
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


}