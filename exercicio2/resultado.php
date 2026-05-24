<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
</head>
<body>
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
    echo "<td>".$linha['preco']."</td>";
    echo "</tr>";
    }

    ?>
    </table>

    <br>

    <div style="margin-top:20px;">

    <a href="?page=1&ordem=<?php echo $ordem; ?>"
    style="padding:8px;border:1px solid black;text-decoration:none;">
    Início
    </a>

    <a href="?page=<?php echo ($pagina > 1 ? $pagina-1 : 1); ?>&ordem=<?php echo $ordem; ?>"
    style="padding:8px;border:1px solid black;text-decoration:none;">
    Anterior
    </a>

    <span style="margin:10px;">
    Página <?php echo $pagina; ?> de <?php echo $totalPaginas; ?>
    </span>

    <a href="?page=<?php echo ($pagina < $totalPaginas ? $pagina+1 : $totalPaginas); ?>&ordem=<?php echo $ordem; ?>"
    style="padding:8px;border:1px solid black;text-decoration:none;">
    Próxima
    </a>

    <a href="?page=<?php echo $totalPaginas; ?>&ordem=<?php echo $ordem; ?>"
    style="padding:8px;border:1px solid black;text-decoration:none;">
    Fim
    </a>

</div>
</body>
</html>