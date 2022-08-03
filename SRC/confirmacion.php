<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once("_header.php") ?>
<title>Confirmacion</title>
</head>

<body>
    </br>

    <h1>Recibimos tu Mensaje</h1>


    <div class="Respuesta">

        <?php

        if (
            isset($_POST['Nombre']) & isset($_POST['Apellido'])
            & isset($_POST['Email'])  & isset($_POST['Mensaje'])
        ) {

            $Nombre = $_POST['Nombre'];
            $Apellido = $_POST['Apellido'];
            $Email = $_POST['Email'];
            $Mensaje = $_POST['Mensaje'];
            $Destino = "mail@davinci.edu.ar";
            $Asunto = "CONSULTA/COMENTARIO";

            echo "Gracias $Nombre " . "$Apellido";
            echo "</br>" . "</br>";

            echo "Nos comunicaremos a :";
            echo "</br>" . "</br>";

            echo " $Email ";
            echo "</br>" . "</br>";

            echo "para atender tu mensaje ";
            echo "</br>" . "</br>";

           
        }

       

        ?>

    </div>

    </br></br></br>

    <?php

    require_once("_footer.php");

    ?>

</body>
</html>