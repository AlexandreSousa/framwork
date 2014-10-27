<?php
if($_POST['post'] == 'ok'){


    $campos = $_POST['campo'];
    $tabela = 'menu_sub';
    $id = $_POST['id'];
    $_db->update($tabela,$campos,$id);


}

$table->Topo('Edita Menu','menu','menu');

$id = $_GET['id'];
$mostra = $_db->read(menu_sub,'WHERE id = '.$id.'');


?>
    <form method="post" action="" name="form1" id="form1" enctype="multipart/form-data">
<?php

$form->input('text','Id_menu','id_menu','id_menu',$mostra['id_menu'],'','','1','');
echo '&nbsp';
$form->input('text','Icone','icone','icone',$mostra['icone'],'','','20','');
echo '&nbsp';
$form->input('text','Nome','nome','nome',$mostra['nome'],'','','30','');
echo '&nbsp';
$form->input('text','Link','link','link',$mostra['link'],'','','30','');
?>
    <br>
    <input type="hidden" value="ok" name="post" id="post">
    <input type="hidden" value="<?php echo $mostra['id']; ?>" name="id" id="id">
    <input type="submit" class="btn btn-primary" value="submit" name="submit" id="submit">
</form>