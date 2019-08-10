<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $destino = "anderson_silvaribeiro@hotmail.com";
    $assunto = "Consulta enviada teste www.andersonsilva.com.br";

    $messagens = "Seu Nome é: " . $name . "\r\n";
    $messagens .= "Seu Email é: " . $email . "\r\n";
    $messagens .= "Consulta: " . $message . "\r\n";

    $remitente = "From: anderson@silva.com";

    mail($destino, $assunto, $messagens, $remitente);

    header("location:index.php?i=ok");
?>

