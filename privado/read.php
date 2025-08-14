<?php

include 'db.php';

$pessoa = "SELECT nome_usuario FROM usuario WHERE $id=id";

$sql = "SELECT * FROM produto";

$result = $conn->query($sql);

if($result->num_rows > 0){

    echo "<table border = '1'>
        <tr>
            <th> Nome </th>
            <th> Preço </th>
            <th> Descrição </th>
            <th> Disponiveis </th>
            <th> Criador </th>
        </tr>
    ";

    while($row = $result->fetch_assoc()){

        echo "<tr>
                <td> {$row['nome_produto']} </td>
                <td> {$row['preco_produto']} </td>
                <td> {$row['descricao_produto']} </td>
                <td> {$row['quantidade_produto']} </td>
                <td> {$row['id_usuario']} </td>
                <td>
                    <a href='update.php?id={$row['id']}'>Utualizar</a>
                </td>
            </tr>
        ";
    }
    echo "</table>";
}else{
    echo "Nenhum produto registrado.";
}

$conn -> close();

?>