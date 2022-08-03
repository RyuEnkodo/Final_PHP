<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="CSS/estilos.css" />
    <title>Admin</title>
</head>

<body>
    <div class="formulario">
        <form action="validar_sesion.php" id="forma" name="forma" method="post">

            <div>
                <label for="Usuario">Nombre de Usuario :</label>
                <input type="text" id="Usuario" name="Usuario" required="true" />
            </div>

            <div>
                <label for="Password">Password :</label>
                <input type="password" id="Password" name="Password" required="true" />
            </div>

            <div>
                <input type="submit" value="Login" id="Envio" />
            </div>
            <a href="../SRC/index.php" style="text-decoration: none; color: white;">Volver atrás</a>
        </form>
    </div>
</body>

</html>