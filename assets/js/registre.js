document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario

    const nombres = document.getElementById('nombres').value;
    const correo = document.getElementById('correo').value;
    const contrasena = document.getElementById('contrasena').value;
    const contrasenaConfirmar = document.getElementById('contrasena_confirmar').value;
    const messageDiv = document.getElementById('message');
            messageDiv.textContent = ''; // Limpiar mensajes anteriores

            if (contrasena !== contrasenaConfirmar) {
                messageDiv.textContent = 'Las contraseñas no coinciden.';
                return;
            }

 messageDiv.textContent = 'Registro exitoso. Bienvenido, ' + nombres + '!';
 messageDiv.style.color = 'green'; 
});