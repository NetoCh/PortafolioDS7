<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form name="form1" method="post" action="md5hash.php">
  <label>
  <input type="text" name="text1">
  </label>
  <p>
    <label>
    <input type="submit" name="boton" value="Submit">
    </label>
  </p>
</form>   

<?php

    if( isset($_POST['text1']) && isset($_POST['text2']) )
    {
    echo'<b> MD5 </b> <br>'; 

    echo md5($_REQUEST['text1']);

    echo'<br> <b> SHA1 </b> <br>'; 

    echo sha1($_REQUEST['text1']);

    echo'<br>'; 
    }
    
/*

Leer tambié<n:

    http://php.net/manual/es/function.crypt.php

    http://php.net/manual/es/faq.passwords.php




*/


?>
</body>
</html>