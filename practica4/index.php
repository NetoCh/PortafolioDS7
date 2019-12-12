<?php include("include/texto.php"); 

 if (isset($_GET['lang']) && ($_GET['lang']=='en'))
   $contenido = $english;
 else
    $contenido = $spanish;
?>

<!DOCTYPE html >
<html> 
    
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Prueba</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
    <style media='screen'>
      .jumbotron{
        margin-top: 2em;
      }
    </style>
</head>
  <body>
  <a href="index.php?lang=es">Espa&ntilde;ol</a> / <a href="index.php?lang=en">Ingl&eacute;s</a>  

  <?php
  echo "<br>";
  echo $contenido;
  ?>

</body> 
</html>