<?php
class Form{
    /**
     * FUNÇÃO PARA MONTAR OS IMPUTS BASICOS
     *
     */
    function input($type,$label,$name,$id,$value,$placeholder,$required,$size,$title){
        echo '<label>'.$label.'<br />';
        echo '<input type="'.$type.'" class="form-control" name="campo['.$name.']" id="ids['.$id.']" value="'.$value.'" placeholder="'.$placeholder.'" '.$required.' size="'.$size.'" title="'.$title.'"/>';
        echo '</label>';
    }
    /**
     * MENU SELECT SIM E NÃO
     *
     */
    function msn($label,$name,$id,$campos,$tamanho){
        echo '<label>'.$label.':<br />';
        echo '<select class="form-control" style="width:'.$tamanho.'px;" name="campo['.$name.']" id="ids['.$id.']">';
        foreach($campos as $campo){
                echo '<option value="'.$campo.'">'.$campo.'</option>';

        }
        echo '</select>';
        echo '</label>';
    }
    /*
     * SELECT MENU PEGANDO PARAMETRO DO DB
     */
    function menudb($db,$label,$where,$name,$id,$campo1,$campo2,$tamanho){

        $sql = mysql_query("SELECT * FROM $db $where");
        echo '<label>'.$label.':<br />';
        echo '<select class="form-control" style="width:'.$tamanho.'px;"  name="campo['.$name.']" id="ids['.$id.']">';
        while($dados = mysql_fetch_assoc($sql)){
            echo '<option  value="'.$dados[$campo1].'">'.$dados[$campo2].'</option>';
        }
        echo '</select>';
        echo '</label>';
    }
    /*
     * FUNÇÃO PARA GERA RADIO BOX
     */
    function radio($name,$id){
        echo '
             <p>
             <label>
          <input type="radio"  name="campo['.$name.']" value="Sim" id="'.$id.'_0" />
          Sim</label>
             <br />
             <label>
          <input type="radio" name="campo['.$name.']" value="Não" id="'.$id.'_1" />
          Não</label>
            <br />
             </p>
        ';
    }
    function text($label,$name,$id,$value,$placeholder,$rows,$cols){

        echo '<label>'.$label.':<br />';
        echo '<textarea name="campo['.$name.']" class="form-control" id="'.$id.'" rows="'.$rows.'" cols="'.$cols.'" placeholder="'.$placeholder.'">'.$value.'</textarea>';
        echo '</label>';

    }
    function Tbuton($nome,$value){

        echo '<input type="submit" class="btn btn-primary" value="'.$value.'" name="'.$nome.'">';
    }
    function Tformi($nome,$metodo){

        echo '<form method="'.$metodo.'" name="'.$nome.'" id="'.$nome.'" action="" enctype="multipart/form-data">';
    }
    function Tformf(){
        echo '</form>';
    }
    /*
     * CLASSE RESPONSAVEL POR ABRI O BANCO DE DADOS E GRAVAR
     */
    function Trecord($valor){
        echo '<input type="hidden" name="post" value="'.$valor.'">';
    }
}