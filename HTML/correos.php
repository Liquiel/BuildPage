<?php
 $destinatario = 'buildpage2020@gmail.com'; 
 $nombre = $_POST['nombre'];
 $asunto = $_POST['asunto'];
 $mensaje = $_POST['mensaje'];
 $email = $_POST['email'];
 $header = "Enviado desde la pagina BuildPage";
 $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
 mail($destinatario, $asunto, $mensajeCompleto, $header, $mail);
 echo "<script>alert('Correo enviado existosamente')</script>";
 echo "<script> setTimeout(\"location.href='PagPrin.html'\", 1000)</script>";
?>