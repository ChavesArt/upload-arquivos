<?php
$conexao = mysqli_connect("localhost","root","","uploadarquivo");
$nome_arquivo =$_GET['nome_arquivo'];
$pastaDestino = "/uploads/";
$apagou =  unlink(__DIR__ . $pastaDestino . $nome_arquivo);
if($apagou == true){
    $sql = "DELETE FROM  arquivo WHERE nome_arquivo='$nome_arquivo'";
    $resultado2 = mysqli_query($conexao,$sql);
    if($resultado2 == false){
        echo"Erro ao apagar o  arquivo no banco de dados.";
        die();
    } 
} else{
    echo "Erro ao apagar o arquivo antigo.";
    die();
}
header("location:index.php");
?>