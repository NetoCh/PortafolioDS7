<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form name="form1" method="post" action="enviarMail.php">
    <h1>Formulario utilizando la funci&oacute;n Mail</h1>
    <p>Nombre:
        <input name="nombre" type="text" id="nombre">
    </p>
    <p>Apellido:
        <input name="apellido" type="text" id="apellido">
    </p>
    <p>Asunto: 
        <input name="asunto" type="text" id="asunto">
    </p>
    <p>Su email:
        <input name="email" type="text" id="email">
    </p>
    <p>Mensaje:
        <textarea name="mensaje" id="mensaje"></textarea>
    </p>
    <p>
        <input type="submit" name="Submit" value="Enviar"> 
        </p>
    </form>

</body>
</html>