<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name_usuario = $_POST['name'];
    $email = $_POST['email'];
   
    $sql = " INSERT INTO usuario (nome_usuario,email_usuario) VALUE ('$name_usuario','$email')";

    if ($conn->query($sql) === true) {
        echo "Registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>

<div class="centralizador">

    <h1>Adicionar o Produto</h1>
    <div class="centro">

     <form method="POST" action="create.php">
    <div class="flex">
        <label for="name">nome:</label>
        <input type="text" name="name" required>

        <label for="preco">preço:</label>
        <input type="preco" name="preco" required>

        <label for="quantidade">quantidade:</label>
        <input type="quantidade" name="quantidade">

        <label for="descricao">descrição:</label>
        <input type="descricao" name="descricao">
</div>
        <input type="submit" value="Adicionar">
</div>
    </form>

</div>
    
</body>


</html>