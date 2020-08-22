//<?php
 //$destino="matiasrsolis@yahoo.com.ar";
// $nombre=$_POST["nombre"];
// $correo=$_POST["correo"];
// $telefono=$_POST["telefono"];
// $mensaje=$_POST["mensaje"];
// $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nTeléfono: ".$telefono."\nMensaje: ".$mensaje;
 //mail("matiasrsolis@yahoo.com.ar","Asunto determinado", $contenido);
 //header("Location:gracias.html");
//
//?>




//<?php  

// Llamando a los campos
//$nombre = $_POST['nombre'];
//$correo = $_POST['correo'];
//$telefono = $_POST['telefono'];
//$mensaje = $_POST['mensaje'];

// Datos para el correo
//$destinatario = "matiasrsolis@yahoo.com.ar";
//$asunto = "Contacto desde nuestra web";

//$carta = "De: $nombre \n";
//$carta .= "Correo: $correo \n";
//$carta .= "Telefono: $telefono \n";
//$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
//mail($destinatario, $asunto, $carta);
//header('Location:gracias.html');

//?>


<?php
if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["comentario"]) ){
$to = "matiasrsolis@yahoo.com.ar";
$subject = "Mensaje desde el portfolio";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Comentario: ".$_POST["comentario"]."\n\n";
$header = "From: info@matiassolis.com\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
header("Location:gracias.html#contacto");
}
}
?>