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
    
    <h1>Cadastrar sabor</h1>


    <form action="cadastroSabor.php" method="POST">
        <table>
            <tr><td>Nome:</td><td> <input type="text" name="nome" required> </td></tr>
            <tr> <td>Preco:</td><td> <input type="number" name="preco" required>  </td></tr>
            
        </table>    

        <input type="submit" value="Cadastrar">

        <a href="listarSabor.php">Lista de Sabores</a>
    </form>


</body>
</html>