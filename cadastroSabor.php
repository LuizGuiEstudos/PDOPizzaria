<?php
@include("conexao.php");



if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];


    $cmd = 'INSERT INTO Sabor(nome_sabor, preco) VALUES(:nome,:preco)';

    $prep = $pdocon->prepare($cmd); 
    $prep->bindParam( ':nome', $nome ); 
    $prep->bindParam( ':preco', $preco ); 


    $prep->execute();


}  

?>
<p>Sabor cadastrado com sucesso!</p>
<a href="index.php">voltar</a> 

