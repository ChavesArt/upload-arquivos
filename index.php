<?php

$conexao = mysqli_connect("localhost","root","","uploadarquivo");
$sql ="SELECT * FROM  arquivo";
$resultado = mysqli_query($conexao,$sql);
if($resultado !=false){
    $arquivos = mysqli_fetch_all($resultado,MYSQLI_BOTH);
}
else{
    echo "Erro ao executar comando SQL.";
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload de arquivos</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione o arquivo: <br>
        <input type="file" name="arquivo"> <br> <br>
        <input type="submit" value="Fazer upload" name="submit">
    </form>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th> Nome do Arquivo</th>
                <th colspan ="2">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($arquivos as $arquivo){
                $arq = $arquivo['nome_arquivo'];
                echo"<tr>";//iniciar a linha
                echo "<td><a href = 'uploads/$arq></a>$arq</td>";// 1 coluna com o nome do arquivo
                echo"<td>";//iniciar a  2 coluna 
                echo"<a ";// abriu o link (abriu a tag a)
                echo "href='alterar.php?nome_arquivo=$arq'>";//inseriu o link
                echo "Alterar";//imprimiu o texto da tag a
                echo"</a>";//fechei o link(tag a)
                echo "</td>";//fechei a 2 coluna
                echo"<td>";// abri a 3 coluna
                echo "<button";//abrir o botão
                echo" onclick =";//criou o atributo onclink
                echo"'excluir(\"$arq\");'>";//chamamos a função excluir
                echo"Excluir";//mostrar o texto do botão
                echo "</button>";//fechar o botão
                echo"</td>";//fechar a 3 coluna
                echo"</tr>";//fechar a linha
            }
                ?>
        </tbody>

    </table>
            <script>
                function excluir(nome_arquivo){
                    let deletar = confirm("Você tem certeza que deseja excluir o arquivo:" + nome_arquivo + "?");
                    if(deletar == true){
                        window.location.href = "deletar.php?nome_arquivo=" + nome_arquivo;
                    }
                }
            </script>
</body>
</html>