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

    echo $getID;
    $cmd = "SELECT * FROM Sabor where id_sabor = ?";
    $prep = $pdocon->prepare($cmd);
    $prep->execute([$getID]);

    $gettedTumpla = $prep->fetch(PDO::FETCH_ASSOC); 

    $gettedNome = $gettedTumpla["nome_sabor"];
    $gettedPreco = $gettedTumpla["preco"];

    echo $gettedNome;
    echo $gettedPreco;
    ?>
    <h1>Tem certeza que deseja excluir o seguinte Sabor?</h1>


    <form action="excluirSaborDone.php" method="POST">
        <table>
            <tr> <td>Id:</td> <td> <input type="text" name="id" value="<?php echo $getID ?>"/>  </td></tr>
            <tr><td>Nome:</td> <td> <input type="text" name="nome" value="<?php echo $gettedNome ?>" disabled> </td></tr>
            <tr> <td>Preco:</td> <td> <input type="number" name="preco" value="<?php echo $gettedPreco ?>" disabled>  </td></tr>
            
            
        </table>    
        
        <a href="listarSabor.php">voltar</a>
        <input type="submit" value="confirmar" />

    </form>


</body>
</html>