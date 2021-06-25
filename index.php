<?php require_once './src/process.php' ?>

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
    <?php
        // $mysqli = new mysqli('localhost', 'root', '', 'crud_enem') or die(mysqli_error($mysqli));
        $result = $mysqli -> query("SELECT * FROM produto") or die($mysqli -> error);
    ?>

    

    <div class="table">
        <table border="1" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Validade</th>
                    <th>Peso</th>
                    <th>Preço</th>
                </tr>
        </thead>

        <?php while($row = $result -> fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['produto'];?></td>
            <td><?php echo $row['validade'];?></td>
            <td><?php echo $row['peso'];?></td>
            <td><?php echo $row['preco'];?></td>
            <td>
                <?php
                    echo "<a href='update.php?id=".$row['id']."'><button type='button' class='edit'>Editar</button></a>
                    <a href='remove.php?id=".$row['id']."'><button type='button' class='remove'>Excluir</button></a>"
                ?>
            </td>
        </tr>
        <?php endwhile; ?>

        </table>
        <a href="create.php" class="a"><button class="create" type="button">Adicionar Produto</button></a>
    </div>
</body>
</html>