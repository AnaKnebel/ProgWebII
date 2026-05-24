<?php

include("conexao.php");


$itens = 10;


$pagina = $_GET['page'] ?? 1;

$offset = ($pagina-1) * $itens;


$ordem = $_GET['ordem'] ?? "nome";


if($ordem != "nome" && $ordem != "preco"){
    $ordem="nome";
}


$sqlTotal="SELECT COUNT(*) total FROM produtos";

$resultTotal = $conn->query($sqlTotal);

$total = $resultTotal->fetch_assoc()['total'];

$totalPaginas = ceil($total/$itens);



$stmt = $conn->prepare(

"SELECT * FROM produtos
ORDER BY $ordem
LIMIT ? OFFSET ?"

);

$stmt->bind_param("ii",$itens,$offset);

$stmt->execute();

$result = $stmt->get_result();


include("resultado.php");

?>