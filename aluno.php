<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <?php include "menu.php"?>

    <div class="conteudo">
        <form action="#" method="post">
        <p>
        Digite o nome do aluno<br>
        <input type="text" name="nome">
        </p>

        <p>
        Digite o nome da cidade<br>
        <input type="text" name="cidade">
        </p>

        <p>
        Digite o nome do estado<br>
        <input type="text" name="estado">
        </p>

        <p>
            <input type="submit" name="enviar" value="Cadastrar">
        </p>
        </div>
</form>
</body>
</html>