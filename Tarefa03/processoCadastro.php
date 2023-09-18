<?php
$nome = $_POST ['Nome'];
$email = $_POST['Email'];
$telefone = $_POST['Telefone'];
$cidade = $_POST['Cidade'];
$estado = $_POST['Estado'];

$dados = array(
    'Nome' => $nome,
    'Email' => $email,
    'Telefone' => $telefone,
    'Cidade' => $cidade,
    'Estado' => $estado
);

$dados_string = implode("\n", $dados);
file_put_contents('cadastros.txt', $dados_string . "\n, file_append");
header('Location: cadastro.html')
?>