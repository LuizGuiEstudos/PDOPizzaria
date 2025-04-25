<?php
@include("conexao.php");



if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $id = $_POST['id'];


    $cmd = "DELETE from Sabor WHERE id_sabor=:id ";

    $prep = $pdocon->prepare($cmd); 
    $prep->bindParam( ":id", $id);

    $prep->execute();


}  

?>
<p>Sabor excluido com sucesso!</p>
<a href="listarSabor.php">voltar</a> 

