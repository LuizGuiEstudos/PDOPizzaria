<?php
include("conexao.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("conexao.php");

    $getID = $_GET['id'];

    $cmd = "SELECT * FROM Sabor where id_sabor = ?";
    $prep = $pdocon->prepare($cmd);
    $prep->execute([$getID]);

    $gettedTumpla = $prep->fetch(PDO::FETCH_ASSOC); 

    $gettedNome = $gettedTumpla["nome_sabor"];
    $gettedPreco = $gettedTumpla["preco"];

    ?>
    <h1>Editar sabor</h1>


    <form action="editarSaborDone.php" method="POST">
        <table>
            <tr> <td>Id:</td> <td> <input type="text" name="id" value="<?php echo $getID ?>" />  </td></tr>
            <tr><td>Nome:</td><td> <input type="text" name="nome" value="<?php echo $gettedNome ?>" required> </td></tr>
            <tr> <td>Preco:</td><td> <input type="number" name="preco" value="<?php echo $gettedPreco ?>" required>  </td></tr>
            
            
        </table>    
        
        <a href="listarSabor.php">voltar</a>
        <input type="submit" value="confirmar" />

    </form>


</body>
</html>