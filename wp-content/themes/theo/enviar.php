<?php header("Location: http://bridexperts.com/tu-mensaje-se-ha-enviado/ "); ?>
          
          

<?php
if (isset($_POST['email']))
  {
  $nombre = $_POST['nombre'];	$telefono = $_POST['telefono'] ; 
  $email = $_POST['email'];		$subject = "Mensaje de mi web" ;
  $message = $_POST['mensaje'];	$server = "From: web@bridexperts.com";

$mensaje = "Nombre: " .$nombre ."\n E-mail: " .$email ."\n Telefono: " .$telefono ."\n" ."\n" .$message;

mail("alheranx@hotmail.com",$subject, $mensaje, $server); 
  echo '<h3>Tu mensaje se ha enviado, nosotros nos pondremos en contacto contigo.</h3>';
  }

else {
 }
?>