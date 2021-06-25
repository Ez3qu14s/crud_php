<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/style.css">

    <title>Document</title>
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
                />
            </div>
            
            <div class="input-group">
                <label for="">Validade</label>
                <input
                    type="text"
                    name="validade"
                    placeholder="Validade"
                />
            </div>
            
            <div class="input-group">
                <label for="">Peso</label>
                <input
                    type="text"
                    name="peso"
                    placeholder="Peso"
                />
            </div>
            
            <div class="input-group">
                <label for="">Preço</label>
                <input
                    type="text"
                    name="preco"
                    placeholder="Preço"
                />
            </div>
            
            <div class="input-group">
                <a href="./index.php">
                    <button
                    type="submit"
                    name="salvar"
                    >
                        Salvar
                    </button>
                </a>
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