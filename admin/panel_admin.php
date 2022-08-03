<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <title>PANEL ADMINISTRADOR</title>
</head>

<body>

    <div>
        <?php
        session_start();

        if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 'Admin') {               //VALIDA EL NIVEL DEL USUARIO 

            die('NO TENES PERMISOS' . ' ' . '<a href="index.php">Volver al Inicio</a>');   //SI NO TIENE EL NIVEL REQUERIDO NO LE DA PERMISO
        }
        ?>
    </div>

    <div class="cent">
        <h1>Panel de Aministrador</h1>
        <div class="boton1">
            <a href="categorias.php">
                <pre>Administrar Categorias</pre>
            </a>
        </div>

        <div class="boton2">
            <a href="peliculas.php">
                <pre>Administrar Peliculas</pre>
            </a>
        </div>

        <div class="boton2">
            <a href="administrar_usuarios.php">
                <pre>Administrar Usuarios</pre>
            </a>
        </div>
    </div>

</body>

</html>