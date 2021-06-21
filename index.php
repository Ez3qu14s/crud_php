<?php require_once './src/process.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'crud_enem') or die(mysqli_error($mysqli));
        $result = $mysqli -> query("SELECT * FROM aluno") or die($mysqli -> error);
    ?>

    <a href="create.php"><button type="button">Inscrever aluno</button></a>

    <div class="table">
        <table border="1" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Contato</th>
                    <th>Idade</th>
                </tr>
        </thead>

        <?php while($row = $result -> fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['nome'];?></td>
            <td><?php echo $row['sobrenome'];?></td>
            <td><?php echo $row['contato'];?></td>
            <td><?php echo $row['idade'];?></td>
            <td>
                <a href="editar.php?edit=<?php echo $row['id']; ?>">Editar</a>
                <a href="process.php?delete=<?php echo $row['id']; ?>">Deletar</a>
            </td>
        </tr>
        <?php endwhile; ?>

        </table>
    </div>
    <?php

        function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    ?>
</body>
</html>