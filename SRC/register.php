<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <div class="register">
        <h3>Me quiero registrar</h3>
        <form action="validar_registro.php" id="forma" name="forma" method="post">

            <div class="elemento">
                <label for="Nombre">Nombre :</label>
                <input type="text" id="Nombre" name="Nombre" required="true" />
            </div>

            <div class="elemento">
                <label for="Apellido">Apellido :</label>
                <input type="text" id="Apellido" name="Apellido" required="true" />
            </div>

            <div class="elemento">
                <label for="Email">Email :</label>
                <input type="email" id="Email" name="Email" required="true" />
            </div>

            <div class="elemento">
                <label for="Usuario">Nombre de Usuario :</label>
                <input type="text" id="Usuario" name="Usuario" required="true" />
            </div>

            <div class="elemento">
                <label for="password">Contraseña :</label>
                <input type="password" id="Password" name="Password" required="true" />
            </div>

            <div class="elemento">
                <input type="submit" value="registrarme" id="Envio" />
            </div>
        </form>
    </div>
    
</body>

</html>