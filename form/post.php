<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "joaquin.popeye.ok@gmail.com"; // Reemplaza con la dirección de correo electrónico de destino
    $asunto = "Mensaje de contacto de $nombre";
    $contenido = "Nombre: $nombre\nCorreo Electrónico: $correo\nMensaje:\n$mensaje";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $contenido);

    // Redirige de vuelta a la página de confirmación
    header("Location: confirmacion.html");
}
?>
