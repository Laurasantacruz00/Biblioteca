<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
        }
        table{
            Background-color: #FFC;
            padding: 5px;
            border: #666 5px solid;
        }
        .no_valido{
            font-size: 18px;
            color: #F00;
            font-weight:bold;
        }
        .valido{
            font-size: 18px;
            color: #0c3;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>USANDO OPERADORES COMPARACION</h1>

    <form action="" method="post" name="datos_usuario" id="datos_usuario">
        <table width="15%" align="center">
            <tr>
            <td>Nombre:</td>
            <td><label for="nombre_usuario"></label></td>
            <input type="text" name="nombre_usuario" id="nombre_usuario">
            </tr>
            <tr>
            <td>Edad:</td>
            <td><label for="edad_usuario"></label></td>
            <input type="text" name="edad_usuario" id="edad_usuario">
            </tr>
            <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            </tr>
            <tr>
            <td>&nbsp</td>
            <td colspan="2" align="center"><input type="submit" name="enviado" id="enviado" value="Enviar">
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST["enviado"])){
            $usuario=$_POST["nombre_usuario"];
            $edad=$_POST["edad_usuario"];
            if($usuario=="Laura" && $edad>=18){
                echo "<p class='valido'>Puedes entrar</p>";
            }else{
                echo "<p class=\"no_valido\">"."No Puedes entrar"."</p>";
            }
            }
        }

        define("AUTOR","Laura", true);
        echo "La linea de esta instruccion es: ". __LINE__ ."<br>";
        echo "Estamos trabajando con este fichero: ".__FILE__;

    ?>


</body>
</html>