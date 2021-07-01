<?php
    $remitente = $_POST['email'];
    $destinatario = 'ivans_139@hotmail.com';
    $asunto = 'Registro';

    if(!$_POST){
        ?>

        <?php
    }
    else{
        $cuerpo = "Nombre y Apellido: " . $_POST['nombre'] . "\r\n";
        $cuerpo .= "Direccion: " . $_POST['direccion'] . "\r\n"; 
        $cuerpo .= "Correo: " . $_POST['email'] . "\r\n";
        $cuerpo .= "Telefono: " . $_POST['tel'] . "\r\n";
        $cuerpo .= "Edad: " . $_POST['edad'] . "\r\n";
        $cuerpo .= "Idioma: " . $_POST['Idioma'] . "\r\n";
        $cuerpo .= "Comentarios: " . $_POST['Opinion'] . "\r\n";

        $headers = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/plain; charset=utf-8\n";
        $headers .= "X-Priority: 3\n";
        $headers .= "X-MSMail-Priority: Normal\n";
        $headers .= "X-Mailer: php\n";
        $headers .= "From: \"".$_POST['nombre']." ".$_POST['edad']."\" <".$remitente.">\n";

        mail($destinatario, $asunto, $cuerpo, $headers);
        include 'confirma.html';
    }
?>