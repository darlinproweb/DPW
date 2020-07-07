<?php
 $destinatarios = 'darlinprogramacionwed@gmail.com';

   $Nombre = $_POST['Nombre'];
   $email = $_POST['email'];
   $mensaje = $_POST['mensaje'];
   $asunto = $_POST['asunto'];


   $header = 'enviado de la paguina';
   $mensajeCompleto = $mensaje . "\nAtentamente" . $Nombre;
   
   mail($destinatarios, $asunto, $mensajeCompleto ,$email, $header );
   
   echo "<script>alert('correo enviado exitosamente')</script>";
   echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>