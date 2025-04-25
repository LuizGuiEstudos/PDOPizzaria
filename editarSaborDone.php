<?php
@include("conexao.php");



if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];


    $cmd = "UPDATE Sabor SET nome_sabor =:nome, preco=:preco WHERE id_sabor=:id ";

    $prep = $pdocon->prepare($cmd); 
    $prep->bindParam( ':nome', $nome ); 
    $prep->bindParam( ':preco', $preco ); 
    $prep->bindParam( ':id', $id );


    $prep->execute();


}  

?>
<p>Sabor editado com sucesso!</p>
<a href="listarSabor.php">voltar</a> 

