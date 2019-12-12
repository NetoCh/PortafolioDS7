<?php include("Include/texto.php");
  if (isset($_GET['lang']) && ($_GET['lang']=='en'))
     $contenido = $english;
   else
      $contenido = $spanish;
?>
<!DOCTYPE html >
<html> 
    <head> 
      <meta charset="UTF-8"/> 
     <!-- <link rel="stylesheet" type="text/css" href="Estilo.css" media="screen" />-->
      <title> Registro Estudiantil </title>
    </head>
 <center> 
    <div id="head">
      <h1> <br> Registro estudiantil <br></h1>
    </div>
   <center>
  <body>
    <a href="Registro.php?lang=es">Espa&ntilde;ol</a> / <a href="Registro.php?lang=en">Ingl&eacute;s</a>
   <center> 
    <form id="table" action="Form.php" method="post">
      <table>
        <tr>
          <td id="tblizq"><?php echo "$contenido[1]"  ?></td>
          <td id="tblder"><input type="text" name="nombre" value=""><br><br></td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[2]"?></td>
          <td id="tblder"><input type="text" name="apellido" value=""><br><br></td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[3]"; ?></td>
          <td id="tblder"><input type="text" name="cedula" value="" placeholder="x-xxx-xxx"><br><br></td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[4] "; ?></td>
          <td id="tblder"><select name="sede">
          <option value="Azuero">Azuero</option>
          <option value="Bocas del Toro">Bocas del Toro</option>
          <option value="Chiriquí">Chiriquí</option>
          <option value="Coclé">Coclé</option>
          <option value="Colón">Colón</option>
          <option value="Panamá">Panamá</option>
          <option value="Veraguas">Veraguas</option>
          <option value="Panamá Oeste">Panamá Oeste</option>    
        </select><br><br>
          </td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[5]";?></td>
          <td id="tblder"> 
            <input type="radio" name="turno" value="Matutino"> Matutino
            
            <input type="radio" name="turno" value="Vespertino"> Vespertino
           
            <input type="radio" name="turno" value="Nocturno"> Nocturno<br><br>

            </td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[9]";?></td>
          <td id="tblder"><input type="text" name="tel" value="" placeholder="xxx-xxxx"><br><br></td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[10]";?></td>
          <td id="tblder"><input type="email" name="email"></td>
        </tr>
      </table>
       
      <br> <br>
      <input type="submit" value="<?php echo $contenido[11]; ?>">
      <input type="reset" value="<?php echo $contenido[12]; ?>">
    </form>

   </center>

  </body> 
</html>