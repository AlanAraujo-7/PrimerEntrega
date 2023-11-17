<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    $destinatario = "alanaraujo5204@gmail.com"; // Cambia esto por tu dirección de correo electrónico
    $asunto = "Consulta de $nombre";
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo Electrónico: $email\n\n";
    $mensaje .= "Mensaje:\n$mensaje";
    
    // Envía el correo
    mail($destinatario, $asunto, $mensaje);
    
    // Redirige a una página de confirmación
    header("Location: confirmacion.html");
}
?>