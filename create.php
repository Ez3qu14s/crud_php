<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="./src/process.php" method="post">
            <div>
                <label for="">Nome</label>
                <input
                    type="text"
                    name="nome"
                    placeholder="Nome"
                />
            </div>
            
            <div>
                <label for="">Sobrenome</label>
                <input
                    type="text"
                    name="sobrenome"
                    placeholder="Sobrenome"
                />
            </div>
            
            <div>
                <label for="">Contato</label>
                <input
                    type="text"
                    name="contato"
                    placeholder="Contato"
                />
            </div>
            
            <div>
                <label for="">Idade</label>
                <input
                    type="text"
                    name="idade"
                    placeholder="Idade"
                />
            </div>
            
            <div>
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