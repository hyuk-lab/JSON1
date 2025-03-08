<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];


 $matematica = $_POST['matematica'];
 $portugues = $_POST['portugues'];
 $historia  = $_POST['historia'];


include "cursos.php";
include "cliente.php";


//criamos um objeto do tipo cliente
$cliente = new Cliente();
$cliente->nome = $nome;
$cliente->idade = $idade;
$cliente->email = $email;
$cliente->cidade = $cidade;


$cursos = new Cursos();
$cursos->matematica = $matematica;
$cursos->portugues = $portugues;
$cursos->historia = $historia;



//transformamos o objeto em json
//o json fica armazenado na memória
$json = json_encode($cliente);

$json = json_encode ($cursos);

//salvamos o json num arquivo 
file_put_contents('cliente.json', $json);

file_put_contents('curso.json', $json);

header("Location: formulario.php");
exit();

?>