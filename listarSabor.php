<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>

        <?php
            require_once('conexao.php');

            $cmd = "SELECT * FROM Sabor";
            $stmt = $pdocon->prepare($cmd);
            $stmt->execute();

            while( $dados = $stmt->fetch(PDO::FETCH_ASSOC) )  
            {
                $id = $dados["id_sabor"];
                $nome = $dados["nome_sabor"];
                $preco = $dados["preco"];

                $editarHref = " 'editarSabor.php?id=". $id ."'  ";
                $excluirHref = " 'excluirSabor.php?id=". $id ." '  ";

                //SHOW
                echo "<tr>";
                echo "<td>". $nome ."</td>"."<td>". $preco ."</td>". 
                    "<td>"."<a href=" .$editarHref. "> editar</a>  "."</td>".
                    "<td>"."<a href=" .$excluirHref. "> excluir</a>  "."</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
     
    <a href="index.php">voltar</a> 
</body>
</html>