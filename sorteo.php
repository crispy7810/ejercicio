<?php
$numberA=$_GET['NumberA'];
$nombreMascota=$_GET['NombreMascota'];
$date=$_GET['Date'];
$time=$_GET['Time'];
$nombre=$_GET['Nombre'];
$localidad=$_GET['Localidad'];
$email=$_GET['Email'];
$telefono=$_GET['Telefono'];

$link=mysql_connect('localhost', 'sorteo','6m12c18m');
mysql_select_db('sorteo');

$query="INSERT INTO sorteo VALUES(NULL,'".$numberA."','".$nombreMascota."','".$nombre."','".$localidad."','".$telefono."','".$email."','".$date."')";
$result=mysql_query($query);

if($result){
echo "<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Mensaje de confirmaci&oacute;n</title>
<link href='estilos.css' rel='stylesheet' type='text/css' />
</head>
<body>
 <div>
<img src='fotos/enviado.jpg' alt='enviado' title='enviado' style='margin-left:350px;'/> </br> <p style='color: #ff3300; font-size: 60px; margin-left: 350px;'> HASTA LA PROXIMA</p>
<a href='index.html'><p style='font-size: 30px;'>Volver</p></a>
</div>
</body>
</html>";
$mensaje = "<html><head><title>PARTICIPANTE</title></head>
<body>
<h3> Te has inscrito con los siguientes datos </h3>
<p style:'color:#99004d;'>¿Cuántos animales tienes en casa?:".$numberA."<br/> Inscribe a tu mascota con la que te quieres presentar al concurso: ".$nombreMascota."".$date."<br/> DATOS PERSONALES: ".$nombre."<br/> LOCALIDAD: ".$localidad."<br/>
TEL&Eacute;FONO: ".$telefono."<br/> E-MAIL: ".$email."<br/></p></body></html>";
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: programatic' . "\r\n";
$destino=$email;
$asunto='PARTICIPANTE SORTEO';
mail($destino, $asunto, $mensaje, $cabeceras);
}
else{
echo "<html>
 <head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Mensaje de confirmaci&oacute;n</title>
<link href='estilos.css' rel='stylesheet' type='text/css' />
</head>
<body>
 <div>
<p style='color: #ff3300;'>Tu mensaje<img src='fotos/no.jpg' alt='no' title='no'/> ha sido enviado </br> <span style='color:#ff3399; font-size: 40px; margin-left: 350px;'>Vuelve a intentarlo</span></p>
<a href='index.html'><p style='font-size: 20px; margin-left:1000px;'>Volver</p></a>
</div>
</body>
</html>";   
};
?>
