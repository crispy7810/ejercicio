<?php
$numberA=$_GET['NumberA'];
$nombreMascota=$_GET['NombreMascota'];
$date=$_GET['Date'];
$time=$_GET['Time'];
$nombre=$_GET['Nombre'];
$localidad=$_GET['Localidad'];
$email=$_GET['Email'];
$telefono=$_GET['Telefono'];
$mensaje = "<html><head><title>PARTICIPANTE</title></head>
<body><p style:'color:#99004d;'>¿Cuántos animales tienes en casa?:".$numberA."<br/> Inscribe a tu mascota con la que te quieres presentar al concurso: ".$nombreMascota."".$date."<br/> DATOS PERSONALES: ".$nombre."<br/> LOCALIDAD: ".$localidad."<br/>
TEL&Eacute;FONO: ".$telefono."<br/> E-MAIL: ".$email."<br/></p></body></html>";
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: programatic' . "\r\n";
$destino='crispy7810@gmail.com';
$asunto='PARTICIPANTE CURSO PROGRAMACION';
mail($destino, $asunto, $mensaje, $cabeceras);
echo"<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Mensaje de confirmaci&oacute;n</title>
<link href='estilos.css' rel='stylesheet' type='text/css' />
</head>
<body>
 <div>
<p id='mensaje'>Tu mensaje ha sido enviado.</br> <span id='muchas'>Muchas gracias</span></p>
<a href='index.html'><p>Volver</p></a>
</div>
</body>
</html>";
#prueba
?>