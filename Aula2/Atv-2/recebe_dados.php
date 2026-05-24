<?php
   $nome = $_POST["nome"] ?? "";
    $assunto = $_POST["assunto"] ?? "";
    $email = $_POST["email"] ?? "";
    $mensagem = $_POST["mensagem"] ?? "";

    echo "<h1>Obrigado pelo contato!</h1>";
    echo "<p>Sua mensagem foi registrada com sucesso!</p>";

    echo "<ul>";
    echo "<li><strong>Nome:</strong> " . htmlspecialchars($nome) . "</li>";
    echo "<li><strong>Email:</strong> " . htmlspecialchars($email) . "</li>";
    echo "<li><strong>Assunto:</strong> " . htmlspecialchars($assunto) . "</li>";
    echo "<li><strong>Mensagem:</strong> " . htmlspecialchars($mensagem) . "</li>";
    echo "</ul>";
?>
