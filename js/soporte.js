document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita el envío del formulario

    // Captura de datos del formulario
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Aquí podrías hacer una petición a un servidor para enviar el mensaje
    // Por ahora, solo mostraremos una respuesta simulada
    document.getElementById('response').innerText = `Gracias, ${name}. Tu mensaje ha sido enviado.`;
    
    // Reiniciar el formulario
    this.reset();
});
