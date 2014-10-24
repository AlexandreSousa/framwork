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
       <table border="1">
            <tr>
        ';
        $v = explode(',',$this->Campos);
        foreach($v as $x){
            echo '<th>'.ucfirst($x).'</th>';
        }
        echo '<th colspan="2">Ações</th>';
        echo '</tr>';




        $total_campos_passados = count($v);


/*//  pegando os dados da tabela inicial


 */
        $campo_sinc = explode(',', $this->CamposSecod);

        $campo_sincronizado = $campo_sinc;
        $campo_sincronizado_todos = $campo_sinc;


        $total_campos_sincronizados = (count($campo_sincronizado_todos));
        //echo $total_campos_sincronizados;

        while($dados = mysql_fetch_array($sql)) {
            echo '<tr>';



//echo $campos_consulta_dados['nome'];
            for($b=0;$b<$total_campos_passados;$b++) {
                $campo_atual = $v[$b];
                //echo $campo_atual;



                echo '<td>';
                for ($c = 0; $c < $total_campos_sincronizados; $c++){
                    //echo $c;
                    if ($campo_sincronizado[$c] == $v[$b]) {
                        $consulta_dados_inicial = "select * from menu where id = '$dados[id_menu]'";
                        $query_consulta_dados_inicial = mysql_query($consulta_dados_inicial);
                        $campos_consulta_dados = mysql_fetch_assoc($query_consulta_dados_inicial);


                        echo $dados[$campo_atual] . '// ' . $campos_consulta_dados['nome'];

                    } else {

                        echo $dados[$campo_atual];
                    }
                }
                echo '</td>';

            }





        /*    $xx = explode(',',$this->CamposSecod);
            foreach($xx as $cc){

                //echo $cc.'<br>';

            }
            foreach ($v as $x) {
                $row = $dados[$x];

                    if($xx == $x){
                       echo "<td></td>";

                    }else{
                        echo "<td>";
                        echo  $row;



                        echo "</td>";

                    }


            }
*/
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
        $camp = explode(',',$this->CamposSecod = $CamposSecod);


        foreach ($camp as $cx) {
             $cx.'<br>';
        }

        return $cx;
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