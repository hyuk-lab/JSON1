<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];

$matematica = $_POST['matematica'];
$portugues = $_POST['portugues'];
$historia  = $_POST['historia'];


include "aluno.php";

// Criamos um objeto do tipo Cliente (Aluno)
$aluno = new Aluno();
$aluno->nome = $nome;
$aluno->idade = $idade;
$aluno->email = $email;
$aluno->cidade = $cidade;

// Criamos um array para armazenar as disciplinas e seus resultados
$disciplinas = [
    "matematica" => $matematica,
    "portugues" => $portugues,
    "historia" => $historia
];

// Criamos um array com os dados estruturados corretamente
$dados = [
    "Aluno" => [
        "nome" => $aluno->nome,
        "idade" => $aluno->idade,
        "email" => $aluno->email,
        "cidade" => $aluno->cidade,
        "Disciplinas" => $disciplinas
    ]
];

// Transformamos o array em JSON
$json = json_encode($dados, JSON_PRETTY_PRINT);

// Salvamos o JSON em um arquivo
file_put_contents('dados.json', $json);

header("Location: formulario.php");
exit();

?>
