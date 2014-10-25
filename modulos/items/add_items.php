<?php


    $campos = $_POST['campo'];
    $tabela = 'usuarios';
    $_db->create($tabela, $campos);

$table->topo('Level','items','items');
?>
<form name="form2" id="form2" method="post" action="" enctype="multipart/form-data">
<?php
$form->Trecord(ok);
$form->input('text','Nome','nome','nome','','','required','20','Nome do usuario e necessario');
echo '&nbsp';
$form->input('text','Usuario','usuario','usuario','','','required','20','Nome do usuario e necessario');
echo '&nbsp';
$form->input('text','Senha','senha','senha','','','requird','20','Nome do usuario e necessario');
echo '<br>';
$form->input('text','nome','name','i','','dica','','200','sjdlfjsdljfl');
$form->Tbuton('submit','Gravar');
?>
</form>