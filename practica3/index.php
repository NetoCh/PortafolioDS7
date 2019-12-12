<?php include("Include/texto.php"); 

//Verifica si la variable get está inicializada
 if (isset($_GET['lang']) && ($_GET['lang']=='en'))
   $contenido = $english;
 else
    $contenido = $spanish;

  //Inicia el HTML con PHP
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Práctica PHP</title>
</head>
   <center> 
    <div id="head">
      <h1> <br> <?php echo "$contenido[0]"; ?> <br></h1>
    </div>
   <center>
  <body>
  <a href="index.php?lang=es">Espa&ntilde;ol</a> / <a href="index.php?lang=en">Ingl&eacute;s</a>  
 <center> 
    <form id="table" action="Form.php" method="post">
      <table>
        <tr>
          <td id="tblizq"><?php echo "$contenido[1]"; ?></td>
          <td id="tblder"><input type="text" name="nombre" value=""><br><br></td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[2]"; ?></td>
          <td id="tblder"><input type="text" name="apellido" value=""><br><br></td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[3]"; ?> </td>
          <td id="tblder"><input type="text" name="cedula" value="" placeholder="x-xxx-xxx"><br><br></td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[4]  "; ?></td>
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
          <td id="tblizq"><?php echo "$contenido[5]"; ?></td>
          <td id="tblder"> 
            <input type="radio" name="turno" value="Matutino"> <?php echo "$contenido[6]"; ?>
            
            <input type="radio" name="turno" value="Vespertino"> <?php echo "$contenido[7]"; ?>
           
            <input type="radio" name="turno" value="Nocturno"> <?php echo "$contenido[8]"; ?><br><br>

            </td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[9]"; ?></td>
          <td id="tblder"><input type="text" name="tel" value="" placeholder="xxx-xxxx"><br><br></td>
        </tr>
        
        <tr>
          <td id="tblizq"><?php echo "$contenido[10]"; ?></td>
          <td id="tblder"><input type="email" name="email"></td>
        </tr>
      </table>
       
      <br> <br>
      <input type="submit" value= "<?php echo $contenido[11]; ?>">
      <input type="reset"  value= "<?php echo $contenido[12]; ?>">
    </form>

   </center>

</body> 
</html>