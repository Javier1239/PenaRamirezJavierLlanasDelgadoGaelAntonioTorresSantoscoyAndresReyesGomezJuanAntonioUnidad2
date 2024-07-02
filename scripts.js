// Función síncrona para calcular la edad de un perro en años humanos
function calcularEdadHumana() {
    // Obtener el valor de la edad del perro desde el input
    const edadPerro = document.getElementById('dogAge').value;

    // Verificar que el valor ingresado sea un número válido
    if (isNaN(edadPerro) || edadPerro === '') {
        alert('Por favor, ingresa una edad válida para el perro.');
        return;
    }

    // Calcular la edad en años humanos (1 año de perro = 7 años humanos)
    const edadHumana = edadPerro * 7;

    // Mostrar el resultado en el elemento <p> con id "resultado"
    document.getElementById('resultado').textContent = `La edad del perro en años humanos es: ${edadHumana}`;
}
