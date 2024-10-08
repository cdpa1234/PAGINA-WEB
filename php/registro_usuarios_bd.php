<?php

include 'conexion.php';
$conexion = new mysqli($server, $user, $pass, $db);

if (isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['identificacion']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['contrasena']) && isset($_POST['contrasena_confirmar'])) {
    $Nombres = $_POST['nombres'];
    $Apellidos = $_POST['apellidos'];
    $Identificacion = $_POST['identificacion'];
    $Telefono = $_POST['telefono'];
    $Correo_electronico = $_POST['correo'];
    $Contrasena = $_POST['contrasena'];
    $Confirmar_contrasena = $_POST['contrasena_confirmar'];

    // Validar que las contraseñas coincidan
    if ($Contrasena === $Confirmar_contrasena) {
        $registro = "INSERT INTO datos (Nombres, Apellidos, Identificacion, Telefono, Correo, Contrasena, Confirmar_contrasena) 
        VALUES ('$Nombres', '$Apellidos', '$Identificacion', '$Telefono', '$Correo_electronico', '$Contrasena', '$Confirmar_contrasena')";

        if (mysqli_query($conexion, $registro)) {
            echo "Registro exitoso";
        } else {
            echo "Error: " . $registro . "<br>" . mysqli_error($conexion);
        }
    } else {
        echo "Las contraseñas no coinciden.";
    }
} else {
    echo "Por favor, complete todos los campos.";
}

mysqli_close($conexion);
?>
