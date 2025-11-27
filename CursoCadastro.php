
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<?php include "menu.php" ?>
    <div class="conteudo">
        <h3>Curso</h3>

        <?php

            if(isset($_REQUEST["enviar"]))
            {
                include "conexao.php";
                $curso = $_REQUEST["curso"];
                $cordenador = $_REQUEST["cordenador"];

                $sql = "insert into cursos(curso,cordenador) VALUES(:curso, :cordenador)";

                $result = $conexao->prepare($sql);
                $result->bindValue(":curso",$curso);
                $result->bindValue(":cordenador",$cordenador);      
                $result->execute();

                echo "<p> Curso cadastrado com sucesso!</p>";
            }

        ?>
        
        <a herf="CursoCadastro.php">voltar</a>
        </div>

    
</body>
</html>