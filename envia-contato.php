<meta charset="UTF-8" />
<meta http-equiv="refresh" content="2;url=index.php">

<?php

$origem = "contato@fordelone.com.br";
$destino = "contato@fordelone.com.br";
$assunto = $_REQUEST['inputAssunto'];

$texto = "<h1>Formulário de Contato</h1><hr/>";
$texto.= "<h2>Dados Pessoais:</h2>";
$texto.= "<b>Nome: </b>".$_REQUEST['inputNome']."<br/>";
$texto.= "<b>E-mail: </b>".$_REQUEST['inputEmail']."<br/>";
$texto.= "<b>Assunto: </b>".$_REQUEST['inputAssunto']."<br/><br/><hr/>";

$texto.= "<h2>Mensagem:</h2>";
$texto.= "<b>Mensagem: </b>".$_REQUEST['inputMessage']."<br/><br/><hr/>";

$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=UTF-8\n";
$headers .= "Content-Transfer-Encoding: 8bit\n";
$headers .= "From: ".$origem."\n";
$headers .= "Organization: Fordelone \n";
$headers .= "Reply-To: ".$_REQUEST['inputEmail']."\n";
$headers .= "Return-Path: ".$origem. "\n";
$headers .= "BCC: pc@fordelone.com.br"."\n";

#mail($destino, $assunto, $texto, $headers,"-r".$origem);

print ("<h1>Sua mensagem foi enviada com sucesso. Obrigado.</h1>"."<br>".$texto);

?>