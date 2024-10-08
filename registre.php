<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Registro</title>
    <link rel="stylesheet" href="/assets/css/registre.css">
    <link rel="shortcut icon" href="/assets/images/favicon.ico.ico" type="image/x-icon">

</head>
<body>
    <div class="form-container ">
        <h2>Registro</h2>
        <form action="php/registro_usuarios_bd.php" method="POST" onsubmit="return validarFormulario()">
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="identificacion">Identificación:</label>
            <input type="text" id="identificacion" name="identificacion" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <label for="contrasena-confirmar">Confirmar Contraseña:</label>
            <input type="password" id="contrasena-confirmar" name="contrasena_confirmar" required>

            <button type="submit">Registrarse</button>
        </form>

        <p>Todos los derechos reservados valiaddress &copy; 2024 </p>
    </div>
    <script src="/assets/js/registre.js"></script>
</body>
</html>