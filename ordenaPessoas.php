<?php
function ordenarPorNome($pessoas)
{
    ksort($pessoas);

    return $pessoas;
}

$pessoas = [
    $_POST['nome1'] => $_POST['idade1'],
    $_POST['nome2'] => $_POST['idade2'],
    $_POST['nome3'] => $_POST['idade3'],
];

$pessoasEmOrdem = ordenarPorNome($pessoas);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pessoas em Ordem Alfabética</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="cartao tabela">
        <h1>Dados cadastrados</h1>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoasEmOrdem as $nome => $idade): ?>
                    <tr>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo number_format($idade, 0, ',', '.'); ?> anos</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="index.html">Cadastrar outras pessoas</a>
    </main>
</body>

</html>
