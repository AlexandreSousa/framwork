<?php
class db{
    public $_db;

    public function create($tabela,$campos)
    {

        if($_POST['post'] == 'ok') {
        $keys = array_keys($campos);
        $chaves = implode(',', $keys);
        $valores = "'" . implode("','", $campos) . "'";
        $sql = "INSERT INTO `$tabela` ($chaves)VALUES ($valores)";
        mysql_query($sql);


        $alert = new Alert();
        $alert->Talert();
    }
    }

    public function read($_db,$where){
        $sql = mysql_query("SELECT * FROM $_db $where");
        $val = mysql_fetch_array($sql);
        //$val = "aa";
        return $val;

    }
    function update($_db,$campos,$where){
        $keys = array_keys($campos);



        $array   = array_values($campos);
        $array2  = array_values($keys);

        $total = count($campos)-1;

        for($i = 0; $i <= $total; $i++ ){

            $variavel.= "`$array2[$i]`='$array[$i]'".',';

        }
        $size = strlen($variavel);

        $sis = substr($variavel,0, $size-1);

        $sql = "UPDATE  `$_db` SET  $sis  WHERE `id` = '$where'";
        mysql_query($sql);
    }
    function dell($_db,$id,$modulo,$arquivo){
        $sql = "DELETE FROM `$_db` WHERE `id` = '$id'";
        mysql_query($sql);

        if(isset($modulo)){
            echo '<meta http-equiv="refresh" content="0;URL=?pg=modulos/'.$modulo.'/list_'.$arquivo.'" />';
        }

    }
}