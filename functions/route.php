<?php

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota = explode('/',$dados_url['path'],2);

function rotas($param) {

    $rotasValidas = ['home','empresa','produtos','servicos','contato','404'];

    if (in_array( $param[1] ,$rotasValidas)) {
        require_once("pages/".$param[1].".php");
        //require_once("pages/home.php");
    }
    elseif ($param[1] == "") {
        require_once("pages/home.php");
    }
    else {
        require_once("../pages/404.php");
    }
};

?>