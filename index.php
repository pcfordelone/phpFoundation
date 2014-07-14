<?php require_once "topo.php" ?>
<?php require_once "menu.php" ?>

<?php

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota = explode('/',$dados_url['path'],2);

function rotas($param) {

    $rotasValidas = ['home','empresa','produtos','servicos','contato','404'];

    if (in_array( $param[1] ,$rotasValidas)) {
        require_once($param[1].".php");
    }
    elseif ($param[1] == "") {
        require_once("home.php");
    }
    else {
        require_once("404.php");
    }
    //echo $param[1];
};
rotas($rota);

?>

<?php require_once "boxs.php" ?>
<?php require_once "footer.php" ?>
