<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Exercício de PHP<h1>

        < <form name="Enviar" method="POST" action="Ex1.php">>

            <p>
            Digite o nome do cliente<br>
            <input type="text" name="cliente">
            </p>

            <p>
            Escolha o sexo do cliente<br>
            <input type="radio" name="sexo" value="F">Feminino<br>
            <input type="radio" name="sexo" value="M">Masculino<br>
            </p>

            <p>
            Digite o valor da compra<br>
            <input type="text" value="valorcompra">
            </p>

            <p>
            <input type="submit" value="calcular">
            </p>

        </form>


        <?php
        if(isset($_REQUEST["calcular"])){ 
        $cliente = $_REQUEST["cliente"];
        $sexo = $_REQUEST["F"];
        $sexo = $_REQUEST["M"];
        $valorcompra = $_REQUEST["valorcompra"];


            echo "$cliente";

            if($sexo = "F"){
                
            }
            else{

            }
            echo"$valorcompra";


        } ?>

    </body>
</html>