<?php
//enviando correo con la función Mail

$para      = $_POST['email'];
$titulo    = $_POST['asunto'];
$mensaje   = $_POST['mensaje'];

//configuracion de Header HTML
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: Info@ds507.online';

//Mensaje en HTML
 $mensajeContenido='<html>
    <head>
    </head>
    <body>
    <table width="100%"  border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td><h3 align="center"><img src="http://www.utp.ac.pa/sites/default/files/tropical_utp_logo.jpg" width="125" height="125"><br>
          Desarrollo de Software VII<br>
          Prueba de correo electr&oacute;nico con PHP<br>
        </h3>
        </td>
      </tr>
      <tr>
        <td>'.$mensaje.'</td>
      </tr>
      <tr>
        <td bgcolor="#660066">&nbsp;</td>
      </tr>
    </table>
    </body>
    </html>';

	//Función mail
	if (mail($para, $titulo, $mensajeContenido, $cabeceras))
	echo "El mensaje se ha enviado correctamente";

?>


