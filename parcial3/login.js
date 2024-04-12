function validateForm() {
    let emailInput = document.getElementById('email'); // Cambiado de 'username' a 'email'
    let passwordInput = document.getElementById('password');
    let emailRegex = /\S+@\S+\.\S+/;
    let passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

    if (!emailRegex.test(emailInput.value)) {
        alert('Por favor, ingresa una dirección de correo electrónico válida.');
        return false;
    }

    if (!passwordRegex.test(passwordInput.value)) {
        alert('La contraseña debe tener al menos 8 caracteres, una mayúscula y un dígito.');
        return false;
    }

    // Aquí puedes hacer una solicitud al servidor para validar los datos
    // Por ahora, solo asumimos que la validación del servidor fue exitosa
    let serverValidation = true;

    if (!serverValidation) {
        // Si la validación del servidor falla, muestra un mensaje
        alert('La validación del servidor falló. Por favor, inténtalo de nuevo.');
        return false;
    }

    return true;
}



