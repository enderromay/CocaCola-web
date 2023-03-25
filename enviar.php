<?php

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensa = $_POST['mensaje'];

    $header = 'From: ' .$mail . " \r\n";
    $header .= "Reply-to: " . $mail . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "Mine-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
    $mensaje .= "Su email es: " . $mail . "\r\n";
    $mensaje .= "Mensaje: " . $mensa . " \r\n";
    $mensaje .= "Enviado el " . date('d/m/Y', time());

    $para = 'enderalejandroromay@gmail.com';
    $asunto = 'Contacto desde mi web page';
    
    mail($para, $asunto, utf8_decode($mensaje), $header);        
    header('Location: contacto2.html');
    exit();
?>