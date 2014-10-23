<?php
function __autoload($classe){
    if(file_exists("App/controle/".$classe.".Class.php")):
        include_once("App/controle/".$classe.".Class.php");

    endif;

    if(file_exists("App/modelo/".$classe.".Class.php")):
        include_once("App/modelo/".$classe.".Class.php");
    endif;
}