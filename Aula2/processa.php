<?php
   $nome = $_GET["nome"] ?? "Anônimo";
    $assunto = $_GET["assunto"] ?? "";

    echo "<p>Nome:" . htmlspecialchars($nome) . "</p> . \n";
    echo "<p>Assunto: $assunto</p>";
?>