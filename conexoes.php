<?php

try {
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","root");
}
catch (\PDOException $e)  {
    die ("Erro de código: ".$e->getCode().": ".$e->getMessage());
}

$id = 2;
$sql = "Select * from clientes where id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("id", $id);
$stmt->execute();
$clientes = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($clientes);

/*foreach($clientes as $cliente) {
    echo $cliente['id']."- ".$cliente['nome']." - ".$cliente['email']."<br>";
}*/

?>