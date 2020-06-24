<?php

$pdo = new PDO('mysql:host=localhost;dbname=meta;port=3306;charset=utf8', 'root', '');

$sql = "SELECT periodo.mes, venda.valor_venda FROM venda JOIN periodo ON periodo.id = venda.id_periodo";

$statement = $pdo->prepare($sql);

$statement->execute();


while($results = $statement->fetch(PDO::FETCH_ASSOC)) {

    $result[] = $results;
}

echo json_encode($result);