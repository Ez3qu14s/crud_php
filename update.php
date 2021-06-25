<?php 
require_once './src/process.php';

if($_GET['id']){
	$id = $_GET['id'];

	$result = $mysqli -> query("SELECT * FROM produto WHERE id = $id") or die($mysqli -> error);
	$data = $result -> fetch_assoc();
?>

<html>
<head>
	<title></title>

    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
<div class="form">
        <form action="./src/process.php" method="post">
            <div class="input-group">
                <label for="">Produto</label>
                <input
                    type="text"
                    name="produto"
                    placeholder="Produto"
					value="<?php echo $data['produto'] ?>"
                />
            </div>
            
            <div class="input-group">
                <label for="">validade</label>
                <input
                    type="text"
                    name="validade"
                    placeholder="Validade"
					value="<?php echo $data['validade'] ?>"
                />
            </div>
            
            <div class="input-group">
                <label for="">Peso</label>
                <input
                    type="text"
                    name="peso"
                    placeholder="Peso"
					value="<?php echo $data['peso'] ?>"
                />
            </div>
            
            <div class="input-group">
                <label for="">Preço</label>
                <input
                    type="text"
                    name="preco"
                    placeholder="Preço"
					value="<?php echo $data['preco'] ?>"
                />
            </div>

			<input type="hidden" name="id" value="<?php echo $data['id'] ?>"/>
            
            <div class="input-group">
                    <button
                    type="submit"
                    name="salvarAlteracao"
					href="./index.php"
                    >
                        Salvar alterações
                    </button>

                    <a href="./index.php">
                        <button
                        type="button"
                        >
                            Voltar
                        </button>
                    </a>
                   
            </div>
            
            
        </form>
    </div>
</body>
</html>

<?php
	
	}

?>


