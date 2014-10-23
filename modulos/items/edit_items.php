<?php
/**
 * Created by PhpStorm.
 * User: akira
 * Date: 18/10/14
 * Time: 16:00
 */

if($_POST['post'] == 'ok'){


 $campos = $_POST['campo'];
 $tabela = 'usuarios';
 $_db->update($tabela,$campos);

}



$id = $_GET['id'];
$mostra = $_db->read(usuarios,'WHERE id = '.$id.'');

$table->topo('Edição de Usuario:','items','items');

?>
<form method="post" action="" name="form1" id="form1" enctype="multipart/form-data">
<?php
$form->input('text','Nome','nome','nome',$mostra['nome'],'','','20','');
echo '&nbsp;';
$form->input('text','User','usuario','usuario',$mostra['usuario'],'','','20','');
echo '&nbsp;';
$form->input('text','Senha','senha','senha',$mostra['senha'],'','','20','');
?>
    <br>
    <input type="hidden" value="ok" name="post" id="post">
    <input type="submit" class="btn btn-primary" value="submit" name="submit" id="submit">
</form>