<?php

$hostname = "localhost";
$db = "crud_enem";
$user = "root";
$senha = "";

$mysqli = new mysqli($hostname, $user, $senha, $db);

$id = 0;
$nome = "";
$sobrenome = "";
$contato = "";
$idade = "";


if(isset($_POST['salvar'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $contato = $_POST['contato'];
    $idade = $_POST['idade'];

    $mysqli -> query("INSERT INTO aluno (nome, sobrenome, contato, idade, ativo) VALUES('$nome', '$sobrenome', '$contato', '$idade', '1')") or die($mysqli -> error);
}

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli -> query("DELETE FROM aluno WHERE id = $id") or die($mysqli -> error());
}

?>