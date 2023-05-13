<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $problema = $_POST['problema'];

  // Construir el mensaje
  $mensaje = "Nombre: $nombre\n";
  $mensaje .= "Email: $email\n";
  $mensaje .= "Descripción del Problema: $problema\n";
  $mensaje .= "****************************************\n";

  // Crear el archivo y escribir los datos
  $archivo = "datos.txt";
  if (file_put_contents($archivo, $mensaje, FILE_APPEND)) {
    echo "¡Gracias por enviar el formulario! Los datos han sido almacenados.";
  } else {
    echo "Hubo un error al almacenar los datos. Por favor, intenta nuevamente.";
  }
}
?>
