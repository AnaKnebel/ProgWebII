<?php
    include 'conexao.php';

    $nome = $_GET['Nome'] ?? "";

    $stmt = $conn->prepare(
        "SELECT * FROM produtos
            WHERE nome LIKE ?"
    );
    $busca = "%" . $nome . "%";
    $stmt->bind_param("s", $busca);
    $stmt->execute();
    $result = $stmt->get_result();
    include 'resultado.php';
?>