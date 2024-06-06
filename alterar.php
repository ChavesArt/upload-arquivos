<?php

$nome_arquivo = $_GET['nome_arquivo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Arquivo</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Alterando o arquivo:<?php= $nome_arquivo?> <br>
        <input type="hidden" name="nome_arquivo" value=<?php $nome_arquivo?>>
        <input type="file" name="arquivo"> <br> <br>
        <input type="submit" value="Fazer upload" name="submit">
    </form>

</body>
</html>