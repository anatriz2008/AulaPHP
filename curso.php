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
        <form action="CursoCadastro.php" method="post">
        <p>
        Digite o nome do curso<br>
        <input type="text" name="curso">
        </p>

        <p>
        Digite o nome da cordenador<br>
        <input type="text" name="cordenador">
        </p>

        <p>
            <input type="submit" name="enviar" value="Cadastrar">
        </p>
        </div>
</form>
</body>
</html>