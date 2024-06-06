<?php

$conexao = mysqli_connect("localhost","rioot","","uploadarquivo");
$sql ="SELECT * FROM  arquivo";
$resultado = mysqli_connect($conexao,$sql);
if($resultado !=false){
    $arquivos = mysqli_fetch_all($resultado,MYSQLI_BOTH);
}
else{
    echo "Erro ao executar comando SQL.";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione o arquivo: <br>
        <input type="file" name="arquivo"> <br> <br>
        <input type="submit" value="Fazer upload" name="submit">
    </form>
</body>
</html>