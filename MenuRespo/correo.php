<?php 
    // Llamando a los campos
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Datos para el correo
    $destinatario = "zeballosmauricio12@gmail.com";
    $header = "Contacto desde Web-MAGNA s.r.l-";

    $carta = "De: $nombre \n";
    $carta .= "E-mail: $correo \n";
    $carta .= "Asunto: $asunto \n";
    $carta .= "Mensaje: $mensaje";

    // Enviando mensaje
    mail($destinatario, $asunto, $carta);
    echo "<script>alert('Correo enviado exitosamente')<script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>