<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dados Cadastrados</h1>
    <pre>
        <?php
        $dados = file_get_contents('cadastros.txt');
        echo $dados;
        ?>
    </pre>
    <a href="cadastro.html">Voltar ao Cadastro</a>
</body>
</html>