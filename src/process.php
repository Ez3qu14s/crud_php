<?php

$hostname = "localhost";
$db = "mercado";
$user = "root";
$senha = "";

$mysqli = new mysqli($hostname, $user, $senha, $db);



$id = 0;
$produto = "";
$validade = "";
$peso = "";
$preco = "";


if(isset($_POST['salvar'])) {
    $produto = $_POST['produto'];
    $validade = $_POST['validade'];
    $peso = $_POST['peso'];
    $preco = $_POST['preco'];

    $mysqli -> query("INSERT INTO produto (produto, validade, peso, preco) VALUES('$produto', '$validade', '$peso', '$preco')") or die($mysqli -> error);

    if($mysqli -> error) {
        echo "Erro ao salvar o registro: ".$connect->error;
    }
    echo "<p>Produto Adicionado com sucesso!</p>";
	echo "<a href='../index.php'><button type='button'>Voltar</button></a>";
}

if(isset($_POST['salvarAlteracao'])){
    $id = $_POST['id'];
    $produto = $_POST['produto'];
    $validade = $_POST['validade'];
    $peso = $_POST['peso'];
    $preco = $_POST['preco'];

   

    $mysqli -> query("UPDATE produto SET produto = '$produto', validade = '$validade', peso = '$peso', preco = '$preco' WHERE id = '$id'") or die($mysqli -> error);

    if($mysqli -> error) {
        echo "Erro ao salvar alterações do registro: ".$connect->error;
    }
    echo "<p>Produto modificado com sucesso!</p>";
	echo "<a href='../index.php'><button type='button'>Voltar</button></a>";
}

if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $mysqli -> query("DELETE FROM produto WHERE id = $id") or die($mysqli -> error());

    if($mysqli -> error) {
        echo "Erro ao excluir o registro: ".$connect->error;
    }
    echo "<p>Produto removido com sucesso!</p>";
	echo "<a href='../index.php'><button type='button'>Voltar</button></a>";
}


?>