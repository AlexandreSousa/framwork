<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>SGGA</title>
<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ERROR | E_PARSE );
include ('system/config.php');
include ('system/plugin/load_js.php');
include ('system/plugin/load_bootstrap.php');
include ('system/plugin/load_css.php');
include ('system/model.php');
include ('system/autoload.php');

$_db     = new db();
$form    = new Form();
$table   = new Tabela();
$alert   = new Alert();


?>
</head>
    <body>
        <div style="padding-left: 10%; padding-right: 10%; margin-left: auto; margin-right: auto;">
            <?php include ('App/visao/header.php'); ?>
            <?php include ('system/menu.php'); ?>
            <?php include ('query.php'); ?>
            <?php include ('App/visao/footer.php');?>
        </div>
    </body>
</html>