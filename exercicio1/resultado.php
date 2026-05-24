<!DOCTYPE html>
<html>

<head>
    <title>Resultado da Busca</title>
</head>

<body>

<h2>Produtos encontrados</h2>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Categoria</th>
    <th>Preço</th>
</tr>

<?php

while($linha = $result->fetch_assoc()){

    echo "<tr>";

    echo "<td>".$linha['id']."</td>";
    echo "<td>".$linha['nome']."</td>";
    echo "<td>".$linha['categoria']."</td>";
    echo "<td>R$ ".$linha['preco']."</td>";

    echo "</tr>";
}

?>

</table>

<br>

<a href="index.html">
<button>Voltar</button>
</a>

</body>

</html>