<?php require_once "topo.php" ?>
<?php require_once "menu.php" ?>

<?php

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota = explode('/',$dados_url['path'],2);// essa variável virou um array pelo que pude perceber, correto? Queria colocar os dados contidos em $rota[1] na função abaixo rotas().

$rotas = function($rota) use($rota) {
    $rotasValidas = ['','home','empresa','produtos','servicos','contato'];
    if (in_array($rota,$rotasValidas)) {
        require_once($rota.".php");
    } elseif (in_array($rota,'')) {
        require_once("404.php");
    } else {
        require_once("home.php");
    }
};


?>

<?php require_once "boxs.php" ?>
<?php require_once "footer.php" ?>
