<?php

include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE produto SET name ='$name',preco ='$preco', quantidade ='$quantidade', descricao= '$descricao' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='read.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit(); 
}

$sql = "SELECT * FROM produto WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>

    <form method="POST" action="update.php?id=<?php echo $row['id'];?>">

        <label for="name">Nome:</label>
        <input type="text" name="name" value="<?php echo $row['name'];?>" required>

        <label for="preco">Preço:</label>
        <input type="preco" name="preco" value="<?php echo $row['preco'];?>" required>

        <label for="descricao">Descrição:</label>
        <input type="descricao" name="descricao" value="<?php echo $row['descricao'];?>" required>

        <label for="quantidade">Quantidade:</label>
        <input type="quantidade" name="quantidade" value="<?php echo $row['quantidade'];?>" required>

        <input type="submit" value="Atualizar">

    </form>

    <a href="read.php">Ver registros.</a>

</body>

</html>